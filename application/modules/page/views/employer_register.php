<?php echo form_open('','class="form-sign"'); ?>
  <?php echo form_open('','class="form-sign"'); ?>
  <div class=" my-reg-2  w3-animate-opacity">
    <div class="container">
      <div class="row size_4">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 reg-box">
          <h2 class="name">Step 3</h2> 

          <div class="spacer_2"></div>
          <div class="spacer_2"></div>

          <div>
            <div class="form-group  required-red">
              <?php echo form_label('Username:','username'); ?><br>
              <span class="error-red"><?php echo form_error('username','Required Input: '); ?></span>
              <?php echo form_input('username',$username,'class="form-control" placeholder="ex: JohnSmith22" id="username"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Password:','password'); ?><br>
              <span class="error-red"><?php echo form_error('password','Required Input: '); ?></span>
              <?php echo form_password('password',$password,'class="form-control" placeholder="Password" id="password"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Confirm Password:','conpassword'); ?><br>
              <span class="error-red"><?php echo form_error('conpassword','Required Input: '); ?></span>
              <?php echo form_password('conpassword',$conpassword,'class="form-control" placeholder="Confirm Password" id="conpassword"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('E-mail:','email'); ?><br>
              <span class="error-red"><?php echo form_error('email','Required Input: '); ?></span>
              <?php echo form_input('email',$email,'class="form-control" placeholder="myemail@mail.com" id="email"'); ?>
            </div>
          </div>

          <div class="spacer_3"></div>
          <button type="submit" name="submit" class="btn btn-mycustom-login" style="margin-top:30px;" value="1"><h4>Submit</h4></button>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </div>
<?php echo form_close(); ?>