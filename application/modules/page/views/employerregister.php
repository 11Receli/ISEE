<?php echo form_open('','class="form-sign"'); ?>
  <div class=" my-reg-2  w3-animate-opacity">
    <div class="container">
      <div class="row size_4">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 reg-box">
          <h2 class="name">Step 2</h2> 

          <div class="spacer_2">
          </div>
          <div class="spacer_2">
          </div>

          <div class="divisions">
            <div class="form-group required-red">
              <?php echo form_label('Company Name:','companyname'); ?><br>
              <span class="error-red"><?php echo form_error('companyname','Rerqured Input: ');?></span>
              <?php echo form_input('companyname',$companyname,'class="form-control" placeholder="Company Name" id="companyname"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Type of Company:','companytype'); ?><br>
              <span class="error-red"><?php echo form_error('companytype','Rerqured Input: '); ?></span>
              <?//php echo form_input('companytype',$companytype,'class="form-control" placeholder="Type of Company" id="companytype"'); ?>
              <input id="companytype" name="companytype" class="form-control" placeholder="ex. Startup" type="text" list="types" autocomplete="off"/>
              <datalist id="types">
                 <option value="Afghanistan"></option>
                 <option value="Albania"></option>
                 <option value="Algeria"></option>
                 <option value="Andorra"></option> 
                 <option value="Angola"></option>
              </datalist>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Company Address:','companyaddress'); ?><br>
              <span class="error-red"><?php echo form_error('companyaddress','Rerqured Input: '); ?></span>
              <?php echo form_input('companyaddress',$companyaddress,'class="form-control" placeholder="Company Address" id="companyaddress"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Contact Number:','companycontact'); ?><br>
              <span class="error-red"><?php echo form_error('companycontact','Rerqured Input: '); ?></span>
              <?php echo form_input('companycontact',$companycontact,'class="form-control" placeholder="ex: (044) 6324 877 / +639984478282" id="companycontact"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('E-mail Address:','companyemail'); ?><br>
              <span class="error-red"><?php echo form_error('companyemail','Rerqured Input: '); ?></span>
              <?php echo form_input('companyemail',$companyemail,'class="form-control" placeholder="ex: companyemail@gmail.com" id="companyemail"'); ?>
            </div>
          </div>

          <div class="divisions">
            <div class="form-group required-red">
              <?php echo form_label('Company Owner:','companyfounder'); ?><br>
              <span class="error-red"><?php echo form_error('companyfounder','Rerqured Input: '); ?></span>
              <?php echo form_input('companyfounder',$companyfounder,'class="form-control" placeholder="Name of Company Owner" id="companyfounder"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Company Year:','companyyear'); ?><br>
              <span class="error-red"><?php echo form_error('companyyear','Rerqured Input: '); ?></span>
              <?php echo form_input('companyyear',$companyyear,'class="form-control" placeholder="Year of Establishment" id="companyyear"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Human Resource Representative:','hrname'); ?><br>
              <span class="error-red"><?php echo form_error('hrname','Rerqured Input: '); ?></span>
              <?php echo form_input('hrname',$hrname,'class="form-control" placeholder="ex: John Martin" id="hrname"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('HR Contact','hrcontact'); ?><br>
              <span class="error-red"><?php echo form_error('hrcontact','Rerqured Input: '); ?></span>
              <?php echo form_input('hrcontact',$hrcontact,'class="form-control" placeholder="ex: (044) 6324 877 / +639984478282" id="hrcontact"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('HR E-mail Address:','hremail'); ?><br>
              <span class="error-red"><?php echo form_error('hremail','Rerqured Input: '); ?></span>
              <?php echo form_input('hremail',$hremail,'class="form-control" placeholder="ex: hremail@gmail.com" id="hremail"'); ?>
            </div>
          </div>

          <div class="spacer_3">
          </div>

          <button type="submit" name="submit" class="btn btn-mycustom-login" style="margin-top:30px;" value="1">
            <h4>Submit</h4>
          </button>

        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </div>
<?php echo form_close(); ?>

            <!-- 
      <div class="form-group">
        <?php echo form_label('Company Positions:','positions'); ?>
        <?php echo form_error('positions'); ?>
        <?//php echo form_input('positions',$positions,'class="form-control" placeholder="ex: Accountant, Manager, etc." id="positions"'); ?>
        <input id="positions" name="positions" class="form-control" placeholder="ex: Accountant, Manager, etc." type="text" list="positionlist" autocomplete="off" />
        <datalist id="positionlist">
           <option value="Start Up">
           <option value="Albania">
           <option value="Algeria">
           <option value="Andorra">
           <option value="Angola">
        </datalist>
      </div> -->
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
