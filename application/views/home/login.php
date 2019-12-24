    
<div id="login-part">
    <div class="container">
        <div class="row">
        	<div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12 col-xs-12 col-12">
        		<div class="login-block">
        			<div class="login-content">
        				<h2>Login</h2>
        				<form method="post">
        					<div class="form-group">
        						<label><?= $this->lang->line('user_email'); ?>: <span class="text-danger">*</span></label>
        						<input type="email" class="form-control custom-radius" name="user_email" id="user_email" value="<?= set_value('user_email'); ?>">
                                <small class="text-danger"><?= form_error('user_email');?></small> 
                            </div>
        					<div class="form-group">
        						<label><?= $this->lang->line('user_password'); ?>: <span class="text-danger">*</span></label>
        						<input type="password" class="form-control custom-radius" name="user_password" id="user_password">
                                <small class="text-danger"><?= form_error('user_password');?></small> 
                            </div>
        					<div class="form-group">
        						<input type="submit" class="form-control btn btn-primary btn-custom-primary custom-radius" name="login-submit" value="SUBMIT">
        					</div>
        				</form>
        				<p class="text-right">Don't have an account? <a class="text-custom" href="<?= base_url('accounts/signup'); ?>">Signup</a></p>
        			</div>
        		</div>
        	</div>	
        </div>
    </div>
</div>


