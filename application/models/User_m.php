<?php
	class User_m extends MY_Model{
		
		protected $_TABLE = 'user_details';	
		protected $_ID = 'user_id';	
		protected $_ORDER = 'desc';	

	    function __construct() {
	        parent::__construct();
	        
	    }
	}
?>