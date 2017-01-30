
<?php echo form_open(); ?>

<div class="intro-header-login">

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message-login">
                    <form class="form-signin">
                    <img class="opacity5" src="<?php echo base_url(IMG . 'ISEE2.GIF'); ?>" alt="">
                    <img class="shadowimg" src="<?php echo base_url(IMG . 'ISEE.GIF'); ?>" alt="">
						<h2 class="form-signin-heading borderline"></h2>
						<?php if($notify): ?>
	                		<p class="text-danger">
						  		<?php echo $notify; ?>
						  	</p>
		                <?php endif; ?>
		                <div class="col-xs-12">
					  	<?php echo form_error('username'); ?>
						<?php echo form_label('Username','username'); ?>
					    <?php echo form_input('username',$username,'class="login-textbox form-control" placeholder="User Name" id="username"'); ?>

						<?php echo form_error('password'); ?>
						<?php echo form_label('Password','password'); ?>
					    <?php echo form_password('password',$password,'class="login-textbox form-control" placeholder="Password" id="password"'); ?>
					    
<!-- 
						<div class="checkbox">
					      <label>
					        <input type="checkbox" value="remember-me"> Remember me
					      </label>
					    </div>
 -->
						<button type="submit" name="submit" class="btn btn-xlg btn-primary space">Login</button>
						<h2 class="borderline"></h2>
						<p>New to this site?</p> <br/>
						<p><a class="whitelink" href="<?php echo base_url('page/registration'); ?>">Employer Registration</a></p><br/>
						<p><a class="whitelink" href="<?php echo base_url('page/ApplicantRegistrationController/preregistration'); ?>">Job Applicant Registration</a></p>

						

					</form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<?php echo form_close(); ?>
