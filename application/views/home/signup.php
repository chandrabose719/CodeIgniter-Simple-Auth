<div id="register-part">
    <div class="container">
        <div class="row">
        	<div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12 col-xs-12 col-12">
        		<div class="register-block">
        			<div class="register-content">
        				<h2>Signup</h2>
                        <form method="post">
        					<div class="form-group">
                                <label><?= $this->lang->line('first_name'); ?>: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control custom-radius" name="first_name" id="first_name" value="<?= set_value('first_name'); ?>">
                                <small class="text-danger"><?= form_error('first_name');?></small> 
                            </div>
                            <div class="form-group">
                                <label><?= $this->lang->line('last_name'); ?>: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control custom-radius" name="last_name" id="last_name" value="<?= set_value('last_name'); ?>">
                                <small class="text-danger"><?= form_error('last_name');?></small> 
                            </div>
                            <div class="form-group">
        						<label><?= $this->lang->line('user_email'); ?>: <span class="text-danger">*</span></label>
        						<input type="email" class="form-control custom-radius" name="user_email" id="user_email" value="<?= set_value('user_email'); ?>">
                                <small class="text-danger"><?= form_error('user_email');?></small> 
                            </div>
                            <div class="form-group">
                                <label><?= $this->lang->line('user_mobile'); ?>: <span class="text-danger">*</span></label>
                                <input type="number" class="form-control custom-radius" name="user_mobile" id="user_mobile" value="<?= set_value('user_mobile'); ?>">
                                <small class="text-danger"><?= form_error('user_mobile');?></small> 
                            </div>
        					<div class="form-group">
        						<label><?= $this->lang->line('user_password'); ?>: <span class="text-danger">*</span></label>
        						<input type="password" class="form-control custom-radius" name="user_password" id="user_password">
                                <small class="text-danger"><?= form_error('user_password');?></small> 
                            </div>
        					<div class="form-group">
                                <input type="submit" class="form-control btn btn-primary btn-custom-primary custom-radius" name="signup-submit" value="SUBMIT">
        					</div>
        				</form>
        				<p class="text-right">Already have an account? <a class="text-custom" href="<?= base_url('accounts/login'); ?>">Login</a></p>
        			</div>
        		</div>
        	</div>	
        </div>
    </div>
</div>




