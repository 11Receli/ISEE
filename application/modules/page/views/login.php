<head>
    {head}
</head>
<?php echo form_open(); ?>
<body>
	<div class="container">
		<form class="form-signin">
			<h2 class="form-signin-heading">Login Here</h2>
			<label for="username" class="sr-only">Email address</label>
			<input type="text" name="username" class="form-control" placeholder="User Name" required="" autofocus="">
			<label for="password" class="sr-only">Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" required="" autofocus="">

			<div class="checkbox">
		      <label>
		        <input type="checkbox" value="remember-me"> Remember me
		      </label>
		    </div>

			<button type="submit" name="submit" class="btn btn-lg btn-primary">Login</button>

			<p>New to this site? <a href="<?php echo base_url('page/registration'); ?>">Register here!</a></p>

		</form>
	</div>
</body>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<?php echo form_close(); ?>