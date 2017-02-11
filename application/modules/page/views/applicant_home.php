<?php echo form_open(); ?>
	<?php 
	echo form_input('lastname','','class="login-textbox form-control" placeholder="Last Name" id="lastname"'); ?>
	<?php 
	echo form_input('firstname','','class="login-textbox form-control" placeholder="First Name" id="firstname"'); ?>
	<?php 
	echo form_input('middlename','','class="login-textbox form-control" placeholder="Middle Name" id="middlename"'); ?>
	<?php 
	echo form_input('department','','class="login-textbox form-control" placeholder="Department" id="department"'); ?>
	<?php 
	echo form_input('graduation','','class="login-textbox form-control" placeholder="Graduation" id="graduation"'); ?>
	<button type="submit">Search</button>
<?php echo form_close(); ?>