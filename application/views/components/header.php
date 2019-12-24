
<div id="header-part">
	<nav class="navbar navbar-expand-md navbar-light fixed-top navbar-custom">
		<div class="container">
	    	<a class="navbar-brand" href="<?= base_url(); ?>">Simple Auth</a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    		<i class="fas fa-bars text-custom"></i>
	  		</button>
		  	<div class="collapse navbar-collapse" id="navbarNav">
		    	<ul class="navbar-nav ml-auto">
		      		<?php if(!empty($user_id)){ ?>
		      			<li class="nav-item">
			        		<a class="nav-link" href="<?= base_url('dashboard'); ?>">DASHBORAD</a>
			        	</li>
			        	<li class="nav-item">
			        		<a class="nav-link text-custom" href="<?= base_url('accounts/logout'); ?>">LOGOUT</a>
			        	</li>
		      		<?php }else{ ?>
			      		<li class="nav-item">
			        		<a class="nav-link" href="<?= base_url('accounts/signup'); ?>">REGISTER</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link mx-3 px-5 btn btn-outline-primary btn-custom-primary custom-radius" href="<?= base_url('accounts/login'); ?>">LOGIN</a>
			        	</li>
		      		<?php } ?>
		        </ul>
		  	</div>
		</div>	
	</nav>
</div>


