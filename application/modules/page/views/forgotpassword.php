<?php echo form_open('','class="form-sign"'); ?>
  <div class=" passwordforgot  w3-animate-opacity">
    <div class="container">
      <div class="row size_4">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
          <div class="reg-box">
            <form>
              <div class="">
                <div class="name">FORGOT PASSWORD</div>
                <div class="border-bottom"></div>
                <p>For You to be able to retrieve your forgotten password, you must then complete the required information below.</p>
                <div class="choices3">
                  <div <?php echo (form_error('username') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                      <?php echo form_label('Username:','username'); ?>
                    <?php echo form_error('username','<div class="error-red">', '</div>'); ?>
                      <?php echo form_input('username',$username,'class="form-control" placeholder="ex: Smith456" id="username"'); ?>
                  </div>
                  <div <?php echo (form_error('firstname') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('First name:','firstname'); ?>
                    <?php echo form_error('firstname','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('firstname',$firstname,'class="form-control" placeholder="ex: John" id="firstname"'); ?>

                  </div>
                  <div <?php echo (form_error('middlename') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Middle Name:','middlename'); ?>
                    <?php echo form_error('middlename','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('middlename',$middlename,'class="form-control" placeholder="Summer" id="middlename"'); ?>
                  </div>
                  <div <?php echo (form_error('lastname') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Last Name:','lastname'); ?>
                    <?php echo form_error('lastname','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('lastname',$lastname,'class="form-control" placeholder="Smith" id="lastname"'); ?>
                  </div>
                </div>
                <div class="choices2"> 
                  <div <?php echo (form_error('department') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Department:','department'); ?>
                    <?php echo form_error('department','<div class="error-red">', '</div>'); ?>
                    <input id="department" name="department" class="form-control" placeholder="Select from the list" type="text" list="departments"/>
                      <datalist id="departments">
                        <?php foreach($collegeList as $row): ?>
                          <option><?php echo($row->college); ?></option>
                        <?php endforeach; ?>
                      </datalist>
                  </div>
                  <div <?php echo (form_error('contact') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                      <?php echo form_label('Contact Number:','contact'); ?>
                    <?php echo form_error('contact','<div class="error-red">', '</div>'); ?>
                      <?php echo form_input('contact',$contact,'class="form-control" type="number" placeholder="ex: +639123456789" id="contact"'); ?>
                  </div>
                  <div <?php echo (form_error('studentid') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                      <?php echo form_label('Student ID:','studentid'); ?>
                    <?php echo form_error('studentid','<div class="error-red">', '</div>'); ?>
                      <?php echo form_input('studentid',$studentid,'class="form-control" placeholder="ex: 21316211" id="studentid"'); ?>
                  </div>
                  <div <?php echo (form_error('status') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Status:','status'); ?>
                    <?php echo form_error('status','<div class="error-red">', '</div>'); ?>
                    <input id="status" name="status" class="form-control" placeholder="Select from the list" type="text" list="statuslist"/>
                      <datalist id="statuslist">
                        <?php foreach($statusList as $row): ?>
                          <option><?php echo($row->status); ?></option>
                        <?php endforeach; ?>
                      </datalist>
                  </div>  
                </div>
              </div>
              <button type="submit" name="submit" id="submit" class="btn btn-mycustom-rightreg2" value="1">
                <h4>Next<span class="glyphicon glyphicon-chevron-right"></span></h4>
              </button>
              <button type="submit" name="submit2" id="submit2" class="btn btn-mycustom-leftreg2" value="1">
                <h4><span class="glyphicon glyphicon-chevron-left" style="margin-right:2px;"></span>Back</h4>
              </button>
              <!-- 
              <button type="submit" name="submit" class="btn btn-mycustom-reg2">
                <h4>Next<span class="glyphicon glyphicon-chevron-right"></span></h4>
              </button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php echo form_close(); ?>
<script type="text/javascript">

$(document).ready(function() {
    $("#contact").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 107 || e.keyCode == 106)) {
            e.preventDefault();
        }
    });
    $("#graduation").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    $("#studentid").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
</script>
