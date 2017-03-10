<?php echo form_open('','class="form-sign"'); ?>
  <div class=" my-reg-222  w3-animate-opacity">
    <div class="container">
      <div class="row size_4">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
          <div class="reg-box">
            <form>
              <div class="">
                <div class="name">JOB POST</div>
                <div class="border-bottom"></div>
                <p>Create a job post by completing the forms and automatically send a notification to the users.</p>
                <div class="choices3">

                  <div <?php echo (form_error('date') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Date Posted:','date'); ?>
                      <?php echo form_error('date','<div class="error-red">', '</div>'); ?>
                      
                   <input type="date" class="form-control" name="date" min="1900-01-02" id="date" placeholder="Select from the table below." >
                    
                    <!-- 
                    <?php echo form_input('date',$date,' type="date" placeholder="Select " id="date"'); ?> -->
                  </div>
                  <div <?php echo (form_error('name') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Company Name:','name'); ?>
                          <?php echo form_error('name','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('name','','class="form-control" placeholder="ex:Teacher for Secondary (English)" id="name"'); ?>
                  </div>
                  <div <?php echo (form_error('description') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Job Description:','description'); ?>
                          <?php echo form_error('description','<div class="error-red">', '</div>'); ?>
                    <?php echo form_textarea('description','','class="form-control" placeholder="A few sentences about your job offer." id="description"'); ?>
                  </div>
                  <div <?php echo (form_error('location') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('City Area:','location'); ?>
                          <?php echo form_error('location','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('location','','class="form-control" placeholder="ex: Makati" id="location"'); ?>
                  </div>
                </div>
                <div class="choices2">
                  <div <?php echo (form_error('title') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Job Title:','title'); ?>
                          <?php echo form_error('title','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('title','','class="form-control" placeholder="ex:Teacher for Secondary (English)" id="title"'); ?>
                  </div>
                  <div <?php echo (form_error('course') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Course Requirement:','course'); ?>
                          <?php echo form_error('course','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('course','','class="form-control" placeholder="ex: Graduate of Bachelors Degree in Computer Science" id="course"'); ?>
                  </div>
                  <div <?php echo (form_error('yrsofexp') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Years of Experience Required:','yrsofexp'); ?>
                          <?php echo form_error('yrsofexp','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('yrsofexp','','class="form-control" placeholder="ex: 50" id="yrsofexp"'); ?>
                  </div>
                  <div <?php echo (form_error('salary') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Offered Salary Range:','salary'); ?>
                          <?php echo form_error('salary','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('salary','','class="form-control" placeholder="ex: 50000" id="salary"'); ?>
                  </div>
                  <div <?php echo (form_error('contactno') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Contact Number:','contactno'); ?>
                          <?php echo form_error('contactno','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('contactno','','class="form-control" placeholder="ex: +639434345529" id="contactno"'); ?>
                  </div>
                  <div <?php echo (form_error('address') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Complete Address:','address'); ?>
                          <?php echo form_error('address','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('address','','class="form-control" placeholder="ex: 4th flr. Ignacius bldg., Corner Timog Avenue, Diliman, Quezon City, Philippines" id="address"'); ?>
                  </div>
                  <div <?php echo (form_error('skills') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Required Skills:','skills'); ?>
                          <?php echo form_error('skills','<div class="error-red">', '</div>'); ?>
                    <?php echo form_input('skills','','class="form-control" placeholder="ex: Programming" id="skills"'); ?>
                  </div>
                </div>
              </div>
              <hr class="spacer_1">
              <button type="submit" name="submit" id="submit" class="btn btn-mycustom-rightreg22" value="1">
                <h4>Next<span class="glyphicon glyphicon-chevron-right"></span></h4>
              </button>
              <button type="submit" name="submit2" id="submit2" class="btn btn-mycustom-leftreg22" value="1">
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
    $("#contactno").keydown(function (e) {
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
    $("#salary").keydown(function (e) {
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
    $("#yrsofexp").keydown(function (e) {
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

