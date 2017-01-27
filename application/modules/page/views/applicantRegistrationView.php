<?php echo form_open('page/ApplicantRegistrationController/handleRegistrationRequestSubmit','class="form-sign"'); ?>
  <div class="container-fluid">
    <div class="col-md-2"></div>
    <div class="col-md-8 register">
      <h2 class="form-signin-heading">Applicant Registration Form</h2> 
      <h3></h3>
	  
	  <div class="form-group">
        <?php echo form_label('user name:','userName'); ?>
        <?php echo form_error('userName'); ?>
        <?php echo form_input('userName','','class="form-control" id="userName"'); ?>
      </div>
	  
	  <div class="form-group">
        <?php echo form_label('password:','password'); ?>
        <?php echo form_error('password'); ?>
        <?php echo form_input('password','','class="form-control" id="password"'); ?>
      </div>
	  
	  <div class="form-group">
        <?php echo form_label('email:','email'); ?>
        <?php echo form_error('email'); ?>
        <?php echo form_input('email','','class="form-control" placeholder="emailId@domain.com" id="email"'); ?>
      </div>
	  
      <button type="submit" name="submit" class="btn btn-lg btn-primary" value="1">Submit</button>
          
    </div>
  </div>
<?php echo form_close(); ?>