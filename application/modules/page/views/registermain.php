<?php echo form_open('','class="form-sign"'); ?>
  <h2 class="form-signin-heading">Register Here</h2> 
  	<div class="form-group">
   	<?php echo form_label('Company Name','companyname'); ?>
  	<?php echo form_error('companyname'); ?>
    <?php echo form_input('companyname',$companyname,'class="form-control" placeholder="Company Name" id="companyname"'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('Type of Company:','companytype'); ?>
    <?php echo form_error('companytype'); ?>
    <?php echo form_input('companytype',$companytype,'class="form-control" placeholder="Type of Company" id="companytype"'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('Company Address:','companyaddress'); ?>
    <?php echo form_error('companyaddress'); ?>
    <?php echo form_input('companyaddress',$companyaddress,'class="form-control" placeholder="Company Address" id="companyaddress"'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('Contact Number:','companycontact'); ?>
    <?php echo form_error('companycontact'); ?>
    <?php echo form_input('companycontact',$companycontact,'class="form-control" placeholder="ex: (044) 6324 877 / +639984478282" id="companycontact"'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('E-mail Address:','companyemail'); ?>
    <?php echo form_error('companyemail'); ?>
    <?php echo form_input('companyemail',$companyemail,'class="form-control" placeholder="ex: companyemail@gmail.com" id="companyemail"'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('Company Owner:','companyfounder'); ?>
    <?php echo form_error('companyfounder'); ?>
    <?php echo form_input('companyfounder',$companyfounder,'class="form-control" placeholder="Name of Company Owner" id="companyfounder"'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('Company Year:','companyyear'); ?>
    <?php echo form_error('companyyear'); ?>
    <?php echo form_input('companyyear',$companyyear,'class="form-control" placeholder="Year of Establishment" id="companyyear"'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('Human Resource Representative:','hrname'); ?>
    <?php echo form_error('hrname'); ?>
    <?php echo form_input('hrname',$hrname,'class="form-control" placeholder="ex: John Martin" id="hrname"'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('HR Contact','hrcontact'); ?>
    <?php echo form_error('hrcontact'); ?>
    <?php echo form_input('hrcontact',$hrcontact,'class="form-control" placeholder="ex: (044) 6324 877 / +639984478282" id="hrcontact"'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('HR E-mail Address:','hremail'); ?>
    <?php echo form_error('hremail'); ?>
    <?php echo form_input('hremail',$hremail,'class="form-control" placeholder="ex: hremail@gmail.com" id="hremail"'); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('Company Positions:','positions'); ?>
    <?php echo form_error('positions'); ?>
    <?php echo form_input('positions',$positions,'class="form-control" placeholder="ex: Accountant, Manager, etc." id="positions"'); ?>
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div> -->
  <button type="submit" name="submit" class="btn btn-lg btn-primary" value="1">Submit</button>
<?php echo form_close(); ?>