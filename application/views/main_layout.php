<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	
	<link href="<?= base_url('assets/images/favicon.png'); ?>" rel="shortcut icon" type="image/x-icon">
	<title> <?= $title; ?> | Simple Authentication </title>
	
	<meta name="description" content="">
	<meta name="keyword" content="">
    <meta name="copyright" content="">
	
	<!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/library/bootstrap-four/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/library/bootstrap-four/css/fontawesome-all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/library/bootstrap-four/css/animate.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Font Family -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Custom CSS -->
	<link href="<?= base_url('assets/library/custom/css/custom.css'); ?>" rel="stylesheet" type="text/css">

</head>
<body>
	
	<!-- Alert Content -->
	<div id="alert-message">
		<?php 
			$alert_message = $this->session->flashdata('success');
			if (!empty($alert_message)){ 
				echo' 	
					<div class="alert alert-success alert-dismissible fade show">
				    	<button type="button" class="close" data-dismiss="alert">&times;</button>
				    	<strong> Success! </strong>'.$alert_message.'
					</div>
				';	 
			} 
		?>
		<?php 
			$alert_message = $this->session->flashdata('error');
			if (!empty($alert_message)) {
				echo'
					<div class="alert alert-warning alert-dismissible fade show">
				    	<button type="button" class="close" data-dismiss="alert">&times;</button>
				    	<strong> Error! </strong>'.$alert_message.'
					</div>
				';	
			} 
		?>
	</div>
	<!-- End Alert Content -->
	
	<!-- Wrapper -->
	<div class="main-wrapper">
		<div id="main-header">
			<?php $this->load->view('components/header'); ?>
		</div>
		<div id="main-body">
			<?php $this->load->view($body);?>
		</div>
	</div>				
	<!-- End Wrapper -->

	<!-- Bootstrap Core JS -->
	<script src="<?= base_url('assets/library/bootstrap-four/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/library/bootstrap-four/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/library/bootstrap-four/js/bootstrap.bundle.min.js'); ?>"></script>

	<!-- Custom JS -->
    <script src="<?= base_url('assets/library/custom/js/custom.js'); ?>"></script>

</body>
</html>

