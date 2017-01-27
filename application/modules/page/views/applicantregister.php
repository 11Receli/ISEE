<?php echo form_open('','class="form-sign"'); ?>
  <div class="container-fluid">
    <div class="col-md-2"></div>
    <div class="col-md-8 register">
      <h2 class="form-signin-heading">Register Here</h2> 
      
      <div class="form-group">
        <?php echo form_label('Username:','username'); ?>
        <?php echo form_error('username'); ?>
        <?php echo form_input('username',$username,'class="form-control" placeholder="ex: JohnSmith22" id="username"'); ?>
      </div>
      <div class="form-group">
        <?php echo form_label('Password:','password'); ?>
        <?php echo form_error('password'); ?>
        <?php echo form_input('password',$password,'class="form-control" placeholder="Password" id="password"'); ?>
      </div>
      <div class="form-group">
        <?php echo form_label('E-mail:','email'); ?>
        <?php echo form_error('email'); ?>
        <?php echo form_input('email',$email,'class="form-control" placeholder="myemail@mail.com" id="email"'); ?>
      </div>
      <button type="submit" name="submit" class="btn btn-lg btn-primary" value="1">Submit</button>
          
    </div>
  </div>
<?php echo form_close(); ?>