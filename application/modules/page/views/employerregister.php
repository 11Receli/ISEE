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
              <?php echo form_label('Company Name:','companyname'); ?><br/>
              <span class="error-red"><?php echo form_error('companyname','Rerqured Input: ');?></span>
              <?php echo form_input('companyname',$companyname,'class="form-control" placeholder="Company Name" id="companyname"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Company Type:','companytype'); ?><br/>
              <span class="error-red"><?php echo form_error('companytype','Rerqured Input: '); ?></span>
              <input id="companytype" name="companytype" class="form-control" placeholder="Select from the list" type="text" list="companytypes"/>
                <datalist id="companytypes">
                  <?php foreach($industryList as $row): ?>
                    <option><?php echo($row->industry); ?></option>
                  <?php endforeach; ?>
                </datalist>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Street:','companystreet'); ?><br/>
              <span class="error-red"><?php echo form_error('companystreet','Rerqured Input: '); ?></span>
              <?php echo form_input('companystreet',$companystreet,'class="form-control" placeholder="ex: 487 Acacia Street" id="companystreet"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Baranggay:','companybrgy'); ?><br/>
              <span class="error-red"><?php echo form_error('companybrgy','Rerqured Input: '); ?></span>
              <?php echo form_input('companybrgy',$companybrgy,'class="form-control" placeholder="ex: Panginay" id="companybrgy"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('City/Town:','companycity'); ?><br/>
              <span class="error-red"><?php echo form_error('companycity','Rerqured Input: '); ?></span>
              <?php echo form_input('companycity',$companycity,'class="form-control" placeholder="ex: Balagtas" id="companycity"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Province:','companyprovince'); ?><br/>
              <span class="error-red"><?php echo form_error('companyprovince','Rerqured Input: '); ?></span>
              <?php echo form_input('companyprovince',$companyprovince,'class="form-control" placeholder="ex: Bulacan" id="companyprovince"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Country:','companycountry'); ?><br/>
              <span class="error-red"><?php echo form_error('companycountry','Rerqured Input: '); ?></span>
              <?php echo form_input('companycountry',$companycountry,'class="form-control" placeholder="ex: Philippines" id="companycountry"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Zip Code:','companyzip'); ?><br/>
              <span class="error-red"><?php echo form_error('companyzip','Rerqured Input: '); ?></span>
              <?php echo form_input('companyzip',$companyzip,'class="form-control" type="number" placeholder="ex: 3018" id="companyzip"'); ?>
            </div>
          </div>

          <div class="divisions">
            <div class="form-group required-red">
              <?php echo form_label('Contact Number:','companycontact'); ?><br/>
              <span class="error-red"><?php echo form_error('companycontact','Rerqured Input: '); ?></span>
              <?php echo form_input('companycontact',$companycontact,'class="form-control" placeholder="ex: (044) 6324 877 / +639984478282" type="number" id="companycontact"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('E-mail Address:','companyemail'); ?><br/>
              <span class="error-red"><?php echo form_error('companyemail','Rerqured Input: '); ?></span>
              <?php echo form_input('companyemail',$companyemail,'class="form-control"  type="email" placeholder="ex: companyemail@gmail.com" id="companyemail"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Company Owner:','companyfounder'); ?><br/>
              <span class="error-red"><?php echo form_error('companyfounder','Rerqured Input: '); ?></span>
              <?php echo form_input('companyfounder',$companyfounder,'class="form-control" placeholder="Name of Company Owner" id="companyfounder"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Company Year:','companyyear'); ?><br/>
              <span class="error-red"><?php echo form_error('companyyear','Rerqured Input: '); ?></span>
              <?php echo form_input('companyyear',$companyyear,'class="form-control" placeholder="Year of Establishment" id="companyyear"'); ?>
            </div>
            <div class="form-group">
              <?php echo form_label('Human Resource Representative:','hrname'); ?><br/>
              <span class="error-red"><?php echo form_error('hrname','Rerqured Input: '); ?></span>
              <?php echo form_input('hrname',$hrname,'class="form-control" placeholder="ex: John Martin" id="hrname"'); ?>
            </div>
            <div class="form-group">
              <?php echo form_label('HR Contact','hrcontact'); ?><br/>
              <span class="error-red"><?php echo form_error('hrcontact','Rerqured Input: '); ?></span>
              <?php echo form_input('hrcontact',$hrcontact,'class="form-control" type="number" placeholder="ex: (044) 6324 877 / +639984478282" id="hrcontact"'); ?>
            </div>
            <div class="form-group">
              <?php echo form_label('HR E-mail Address:','hremail'); ?><br/>
              <span class="error-red"><?php echo form_error('hremail','Rerqured Input: '); ?></span>
              <?php echo form_input('hremail',$hremail,'class="form-control" type="email" placeholder="ex: hremail@gmail.com" id="hremail"'); ?>
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

