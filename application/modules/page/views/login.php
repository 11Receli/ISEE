
<?php echo form_open(); ?>

<div class="my-login w3-animate-opacity">
    <div class="container">
        <div class="row size_2">
            <div class="col-lg-12">
                <div class="intro-text">
	                <img class="gif_1" src="<?php echo base_url(IMG . 'ISEE2.GIF'); ?>" alt="">
	                <img class="gif_2" src="<?php echo base_url(IMG . 'ISEE.GIF'); ?>" alt="">
                    <form class="form-signin">
                    	
						<?php if($notify): ?>
	                		<p class="text-danger">
						  		<?php echo $notify; ?>
						  	</p>
		                <?php endif; ?>
		                <div>
					  	<?php echo form_error('username'); ?>
						<h4><?php echo form_label('USERNAME','username'); ?></h4>
					    <?php echo form_input('username',$username,'class="textbox-login form-control" placeholder="USERNAME" id="username"'); ?>
					    </div>
						<div class="spacer_2"></div>
						<div>
						<?php echo form_error('password'); ?>
						<h4><?php echo form_label('PASSWORD','password'); ?></h4>
					    <?php echo form_password('password',$password,'class="textbox-login form-control" placeholder="PASSWORD" id="password"'); ?>
					    </div>

					    <div class="spacer_1"></div>
					    <div class="spacer_1"></div>
						<button type="submit" name="submit" class="btn btn-mycustom-login">
							<h4>Login</h4>
						</button>
						<div class="spacer_1"></div>
						<div class="spacer_1"></div>
						<p class="mylink">New to this site? 
							<a class="mylink" href="<?php echo base_url('page/mainregistration'); ?>">
								Click Here.
							</a>
						</p>
					</form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<?php echo form_close(); ?>
