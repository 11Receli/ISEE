<?php echo form_open('','class="form-sign"'); ?>
  <div class=" my-reg-2  w3-animate-opacity">
    <div class="container">
      <div class="row size_4">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 reg-box">
          <h2 class="name">Step 4: Personal Information</h2> 

          <div class="spacer_2"></div>
          <div class="spacer_2"></div>

          <div class=" divisions">
            <div class="form-group required-red">
                  <?php echo form_label('Street:','street'); ?><br>
              <span class="error-red">    <?php echo form_error('street','Required Input: '); ?></span>
                  <?php echo form_input('street',$street,'class="form-control" placeholder="ex: 0487 San Lucas" id="street"'); ?>
            </div>
            <div class="form-group required-red">
                  <?php echo form_label('Baranggay:','brgy'); ?><br>
              <span class="error-red">    <?php echo form_error('brgy','Required Input: '); ?></span>
                  <?php echo form_input('brgy',$brgy,'class="form-control" placeholder="ex: 0487 San Lucas" id="brgy"'); ?>
            </div>
            <div class="form-group required-red">
                  <?php echo form_label('City/Town:','city'); ?><br>
              <span class="error-red">    <?php echo form_error('city','Required Input: '); ?></span>
                  <?php echo form_input('city',$city,'class="form-control" placeholder="ex: 0487 San Lucas" id="city"'); ?>
            </div>
            <div class="form-group required-red">
                  <?php echo form_label('Province:','province'); ?><br>
              <span class="error-red">    <?php echo form_error('province','Required Input: '); ?></span>
                  <?php echo form_input('province',$province,'class="form-control" placeholder="ex: 0487 San Lucas" id="province"'); ?>
            </div>
            <div class="form-group required-red">
                  <?php echo form_label('Country:','country'); ?><br>
              <span class="error-red">    <?php echo form_error('country','Required Input: '); ?></span>
                  <?php echo form_input('country',$country,'class="form-control" placeholder="ex: 0487 San Lucas" id="country"'); ?>
            </div>
          </div>
          
          <div class=" divisions">
            <div class="form-group required-red">
                  <?php echo form_label('Zip Code:','zip'); ?><br>
              <span class="error-red">    <?php echo form_error('zip','Required Input: '); ?></span>
                  <?php echo form_input('zip',$zip,'class="form-control" placeholder="ex: 0487 San Lucas" id="zip"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Birthday:','birthday'); ?><br>
              <span class="error-red"><?php echo form_error('birthday','Required Input: '); ?></span>
              <input type="date" class="form-control" name="birthday" min="1900-01-02" id="birthday" placeholder="Select from the table below."><!-- 
              <?php echo form_input('birthday',$birthday,' type="date" placeholder="Select " id="birthday"'); ?> -->
            </div>
            <div class="form-group required-red">
                  <?php echo form_label('Citizenship:','citizenship'); ?><br>
              <span class="error-red">    <?php echo form_error('citizenship','Required Input: '); ?></span>
                  <?php echo form_input('citizenship',$citizenship,'class="form-control" placeholder="ex: 0487 San Lucas" id="zip"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Status:','status'); ?><br/>
              <span class="error-red"><?php echo form_error('status','Rerqured Input: '); ?></span>
              <input id="status" name="status" class="form-control" placeholder="Select from the list" type="text" list="personstatus"/>
                <datalist id="personstatus">
                  <?php foreach($personstatusList as $row): ?>
                    <option><?php echo($row->status); ?></option>
                  <?php endforeach; ?>
                </datalist>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Gender:','gender'); ?><br/>
              <span class="error-red"><?php echo form_error('gender','Rerqured Input: '); ?></span>
              <input id="gender" name="gender" class="form-control" placeholder="Select from the list" type="text" list="genders"/>
                <datalist id="genders">
                  <?php foreach($genderList as $row): ?>
                    <option><?php echo($row->gender); ?></option>
                  <?php endforeach; ?>
                </datalist>
            </div>
          </div>

          <div class="spacer_3"></div>
          <button type="submit" name="submit" class="btn btn-mycustom-login" style="margin-top:30px;" value="1"><h4>Next</h4></button>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </div>
<?php echo form_close(); ?>
