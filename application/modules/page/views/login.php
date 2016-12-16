<?php echo form_open(); ?>
<div>
	<input type="text" name="username">
</div>
<input type="password" name="password">
<button type="submit" name="submit">Login</button>
<p>New to this site? <a href="<?php echo base_url('page/registration'); ?>">Register here!</a></p>

<?php echo form_close(); ?>