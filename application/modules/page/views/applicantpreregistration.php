<?php echo form_open('','class="form-sign"'); ?>
  <div class=" my-reg-2  w3-animate-opacity">
    <div class="container">
      <div class="row size_4">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 reg-box">
          <h2 class="name">Step 2</h2> 

          <div class="spacer_2"></div>
          <div class="spacer_2"></div>

          <div class=" divisions">
            <div class="form-group required-red">
                  <?php echo form_label('First name:','firstname'); ?><br>
              <span class="error-red">    <?php echo form_error('firstname','Required Input: '); ?></span>
                  <?php echo form_input('firstname',$firstname,'class="form-control" placeholder="ex: John" id="firstname"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Middle Name:','middlename'); ?><br>
              <span class="error-red"><?php echo form_error('middlename','Required Input: '); ?></span>
              <?php echo form_input('middlename',$middlename,'class="form-control" placeholder="Summer" id="middlename"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Last Name:','lastname'); ?><br>
              <span class="error-red"><?php echo form_error('lastname','Required Input: '); ?></span>
              <?php echo form_input('lastname',$lastname,'class="form-control" placeholder="Smith" id="lastname"'); ?>
            </div>
            <div class="form-group required-red">
              <?php echo form_label('Department:','department'); ?><br>
              <span class="error-red"><?php echo form_error('department','Required Input: '); ?></span>
              <?//php echo form_input('department',$department,'class="form-control" placeholder="Type of Company" id="department"'); ?>
              <input id="department" name="department" class="form-control" placeholder="Select from the list" type="text" list="departments" autocomplete="off"/>
              <datalist id="departments">
                 <option value="College of Computer Studies">
                 <option value="College of Business Administration ">
                 <option value="College of Accountancy">
                 <option value="College of Education">
                 <option value="College of Hotel Management and Tourism">
                 <option value="College of Maritime Engineering">
                 <option value="College of Arts and Scieneces">
                 <option value="College of Health and Sciences">
                 <option value="School of Mechanical Engineering">
              </datalist>
            </div>
          </div>
          
          <div class=" divisions"> 
            <div class="form-group required-red">
                <?php echo form_label('Year of Graduation:','graduation'); ?><br>
              <span class="error-red">  <?php echo form_error('graduation','Required Input: '); ?></span>
                <?php echo form_input('graduation',$graduation,'class="form-control" placeholder="ex: 1995" id="graduation"'); ?>
            </div>
            <div class="form-group required-red">
                <?php echo form_label('Contact Number:','contact'); ?><br>
              <span class="error-red">  <?php echo form_error('contact','Required Input: '); ?></span>
                <?php echo form_input('contact',$contact,'class="form-control" placeholder="ex: +639123456789" id="contact"'); ?>
            </div>
            <div class="form-group required-red">
                <?php echo form_label('Student ID:','studentid'); ?><br>
              <span class="error-red">  <?php echo form_error('studentid','Required Input: '); ?></span>
                <?php echo form_input('studentid',$studentid,'class="form-control" placeholder="ex: 21316211" id="studentid"'); ?>
            </div>
            <div class="form-group required-red">
                <?php echo form_label('Status:','status'); ?><br>
              <span class="error-red">  <?php echo form_error('status','Required Input: '); ?></span>
                <?//php echo form_input('status',$status,'class="form-control" required placeholder="Type of Company" id="status"'); ?>
                <input id="status" name="status" class="form-control" placeholder="Select from the list" type="text" list="statuslist" autocomplete="off"/>
                <datalist id="statuslist">
                   <option value="Graduating">
                   <option value="Alumni">
                </datalist>
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