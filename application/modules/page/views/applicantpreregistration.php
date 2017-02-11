<?php echo form_open('','class="form-sign"'); ?>
  <div class=" black container-fluid intro-header-mainlogin  w3-animate-opacity">
    <div class="col-md-2"></div>
    <div class="col-md-8 register" style="min-height:140px; padding:10px 70px;">
      <h2 class="form-signin-heading">Step 2</h2> 
      
      <div class="form-group">
        <?php echo form_label('First name:','firstname'); ?>
        <?php echo form_error('firstname'); ?>
        <?php echo form_input('firstname',$firstname,'class="form-control" placeholder="ex: John" id="firstname"'); ?>
      </div>
      <div class="form-group">
        <?php echo form_label('Middle Name:','middlename'); ?>
        <?php echo form_error('middlename'); ?>
        <?php echo form_input('middlename',$middlename,'class="form-control" placeholder="Summer" id="middlename"'); ?>
      </div>
      <div class="form-group">
        <?php echo form_label('Last Name:','lastname'); ?>
        <?php echo form_error('lastname'); ?>
        <?php echo form_input('lastname',$lastname,'class="form-control" placeholder="Smith" id="lastname"'); ?>
      </div>
      <div class="form-group">
        <?php echo form_label('Department:','department'); ?>
        <?php echo form_error('department'); ?>
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
      <div class="form-group">
        <?php echo form_label('Year of Graduation:','graduation'); ?>
        <?php echo form_error('graduation'); ?>
        <?php echo form_input('graduation',$graduation,'class="form-control" placeholder="ex: 1995" id="graduation"'); ?>
      </div>
      <div class="form-group">
        <?php echo form_label('Contact Number:','contact'); ?>
        <?php echo form_error('contact'); ?>
        <?php echo form_input('contact',$contact,'class="form-control" placeholder="ex: +639123456789" id="contact"'); ?>
      </div>
      <div class="form-group">
        <?php echo form_label('Current/Previous Student ID:','studentid'); ?>
        <?php echo form_error('studentid'); ?>
        <?php echo form_input('studentid',$studentid,'class="form-control" placeholder="ex: 21316211" id="studentid"'); ?>
      </div>
      <div class="form-group" style="padding-bottom:30px;">
        <?php echo form_label('Status:','status'); ?>
        <?php echo form_error('status'); ?>
        <?//php echo form_input('status',$status,'class="form-control" placeholder="Type of Company" id="status"'); ?>
        <input id="status" name="status" class="form-control" placeholder="Select from the list" type="text" list="statuslist" autocomplete="off"/>
        <datalist id="statuslist">
           <option value="Graduating">
           <option value="Alumni">
        </datalist>
      </div>
      <button type="submit" name="submit" class="btn btn-lg btn-primary"  style="float:right" value="1">Submit</button>
          
    </div>
  </div>
<?php echo form_close(); ?>