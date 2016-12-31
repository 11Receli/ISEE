
<?php echo form_open(); ?>

<div class="intro-header-login">

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message-login">
                    <form class="form-signin">
						<h2 class="form-signin-heading">Login Here</h2>
						<label for="username" class="sr-only">Email address</label>
						<input type="text" name="username" class="login-textbox form-control" placeholder="User Name" required="" autofocus="">

						<label for="password" class="sr-only">Password</label>
						<input type="password" name="password" class="login-textbox form-control" placeholder="Password" required="" autofocus="">

						<div class="checkbox">
					      <label>
					        <input type="checkbox" value="remember-me"> Remember me
					      </label>
					    </div>

						<button type="submit" name="submit" class="btn btn-xlg btn-primary space">Login</button>

						<p>New to this site? <a href="<?php echo base_url('page/registration'); ?>">Register here!</a></p>

					</form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
`

<?php echo form_close(); ?>