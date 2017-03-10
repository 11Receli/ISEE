
  <?php echo form_open('','class="form-sign"'); ?>
  <div class="my-reg-3 w3-animate-opacity">
    <div class="container">
        <div class="row size_4">
            <div class="col-lg-4">
                <div class="reg-box">
                  <form>
                    <div class="">
                      <div class="name">Step 3</div>
                      <div class="border-bottom"></div>
                      <p>You are a DYCIan! You can now create your user account in this section.</p>
                    
                      <div class="choices4">
                        <div <?php echo (form_error('username') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                          <?php echo form_label('Username:','username'); ?>
                    <?php echo form_error('username','<div class="error-red">', '</div>'); ?>
                          <?php echo form_input('username','','class="form-control" placeholder="ex: JohnSmith22" id="username"'); ?>
                        </div>
                        <div <?php echo (form_error('password') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                          <?php echo form_label('Password:','password'); ?>
                    <?php echo form_error('password','<div class="error-red">', '</div>'); ?>
                          <?php echo form_password('password','','class="form-control" placeholder="Password" id="password"'); ?>
                        </div>
                        <div <?php echo (form_error('conpassword') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                          <?php echo form_label('Confirm Password:','conpassword'); ?>
                    <?php echo form_error('conpassword','<div class="error-red">', '</div>'); ?>
                          <?php echo form_password('conpassword','','class="form-control" placeholder="Confirm Password" id="conpassword"'); ?>
                        </div>
                        <div <?php echo (form_error('email') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                          <?php echo form_label('E-mail:','email'); ?>
                    <?php echo form_error('email','<div class="error-red">', '</div>'); ?>
                          <?php echo form_input('email','','class="form-control" type="email" placeholder="myemail@mail.com" id="email"'); ?>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-mycustom-right" value="1">
                      <h4>Next<span style="margin-left:2px;" class="glyphicon glyphicon-chevron-right"></span></h4>
                    </button>
                    
                    <button type="submit" name="submit2" class="btn btn-mycustom-left" value="1">
                    <h4>Cancel</h4>
                    </button>
                    
                  </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>

<?php echo form_close(); ?>