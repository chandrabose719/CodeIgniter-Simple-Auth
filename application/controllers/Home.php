<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		// Language
		$this->lang->load('home/index');

		// Session ID
		$this->data["user_id"] = $this->session->userdata('user_id');
		$this->data["user_email"] = $this->session->userdata('user_email');

	}

	// Home
	public function index(){
		$this->data['title'] = $this->lang->line('home_title');
		$this->data['body'] = 'home/index';
		$this->load->view("main_layout", $this->data);
	}

	// Signup
	public function signup(){
		$user_id = $this->session->userdata('user_id');
		if(empty($user_id)){
			if(isset($_POST['signup-submit'])){
				$rules = $this->signup_rules();
	            $this->form_validation->set_rules($rules);
				if($this->form_validation->run()){
					$first_name = $this->input->post('first_name');
					$last_name = $this->input->post('last_name');
					$user_email = $this->input->post('user_email');
					$user_mobile = $this->input->post('user_mobile');
					$user_password = $this->input->post('user_password');
					$array['first_name'] = $first_name;
					$array['last_name'] = $last_name;	
					$array['user_email'] = $user_email;	
					$array['user_mobile'] = $user_mobile;	
					$array['user_password'] = $user_password;	
					$array['status'] = 'active';
					$array['created_date'] = time();
					if ($this->User_m->insert($array)) {
						$this->session->set_flashdata('success', 'User details registered successfully!');
						redirect(base_url('accounts/login'));
					}else{
						$this->session->set_flashdata('error', 'Error occured, try again!');
					}
				}	
			}	
			$this->data['title'] = $this->lang->line('signup_title');
			$this->data['body'] = 'home/signup';
			$this->load->view("main_layout", $this->data);
		}else{
			redirect(base_url('dashboard'));
		}	
	}	

	// Login
	public function login(){
		$user_id = $this->session->userdata('user_id');
		if(empty($user_id)){
			if(isset($_POST['login-submit'])){
				$rules = $this->login_rules();
	            $this->form_validation->set_rules($rules);
				if($this->form_validation->run()){
					$user_email = $this->input->post('user_email');
					$user_password = $this->input->post('user_password');
					$array['user_email'] = $user_email;	
					$array['user_password'] = $user_password;	
					$array['status'] = 'active';
					$user_data = $this->User_m->get($array);
					if(!empty($user_data) && count($user_data) == 1){
						$user_id = $user_data[0]->user_id;
						$user_email = $user_data[0]->user_email;
						$this->session->set_userdata('user_id', $user_id);
						$this->session->set_userdata('user_email', $user_email);
						$this->session->set_flashdata('success', 'Loggedin successfully!');
						redirect(base_url('dashboard'));
					}else{
						$this->session->set_flashdata('error', 'Given credentials are wrong, try different!');
					}
				}	
			}	
			$this->data['title'] = $this->lang->line('login_title');
			$this->data['body'] = 'home/login';
			$this->load->view("main_layout", $this->data);
		}else{
			redirect(base_url('dashboard'));	
		}	
	}

	private function signup_rules(){
		$rules = array(
			array(
				'field' => 'first_name', 
				'label' => $this->lang->line('first_name'), 
				'rules' => 'trim|required|min_length[2]|max_length[25]'
			),
			array(
				'field' => 'last_name', 
				'label' => $this->lang->line('last_name'), 
				'rules' => 'trim|required|min_length[2]|max_length[25]'
			),
			array(
				'field' => 'user_email', 
				'label' => $this->lang->line('user_email'), 
				'rules' => 'trim|required|is_unique[user_details.user_email]' 
			),
			array(
				'field' => 'user_mobile', 
				'label' => $this->lang->line('user_mobile'),
				'rules' => 'trim|required|integer|exact_length[10]'
			),
			array(
				'field' => 'user_password', 
				'label' => $this->lang->line('user_password'), 
				'rules' => 'trim|required|min_length[6]|max_length[15]' 
			)
		);
		return $rules;
	}

	private function login_rules(){
		$rules = array(
			array(
				'field' => 'user_email', 
				'label' => $this->lang->line('user_email'), 
				'rules' => 'trim|required' 
			),
			array(
				'field' => 'user_password', 
				'label' => $this->lang->line('user_password'), 
				'rules' => 'trim|required|min_length[6]|max_length[15]' 
			)
		);
		return $rules;
	}

	// Dashboard
	public function dashboard(){
		$user_id = $this->session->userdata('user_id');
		if(!empty($user_id)){
			$array['user_id'] = $user_id;
			$user_data = $this->User_m->get($array, TRUE);
			$this->data['user_data'] = $user_data;
			$this->data['title'] = $this->lang->line('dashboard_title');
			$this->data['body'] = 'home/dashboard';
			$this->load->view("main_layout", $this->data);
		}else{
			redirect(base_url('accounts/login'));
		}
	}

	// Logout
	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_email');
		redirect(base_url());
	}

}
