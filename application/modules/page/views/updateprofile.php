<?php echo form_open('','class="form-sign"'); ?>
  <div class=" updateprof  w3-animate-opacity">
    <div class="container">
      <div class="row size_10">
        <div class="col-lg-12">
          <div class="reg-box">
            <form>
              <div class="section-size">
                <div class="name">Personal Information</div>
                <div class="border-bottom"></div>
                <p>Provide your complete address, Birthday, Citizenship, Civil Status and Gender</p>
                <div class="col-lg-3 choices3">
                  <div <?php echo (form_error('street') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Street:','street'); ?>
                    <?php echo form_error('street','<div class="error-red">', '</div>'); ?>
                    <?php foreach($personal as $row): ?>
                    <?php echo form_input('street',$row->street,'class="form-control" placeholder="ex:0487 San Lucas" id="street"'); ?>
                    <?php endforeach; ?>
                  </div>
                  <div <?php echo (form_error('brgy') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Baranggay:','brgy'); ?>
                    <?php echo form_error('brgy','<div class="error-red">', '</div>'); ?>
                    <?php foreach($personal as $row): ?>
                    <?php echo form_input('brgy',$row->brgy,'class="form-control" placeholder="ex:Tuktukan" id="brgy"'); ?>
                    <?php endforeach; ?>
                  </div>
                  <div <?php echo (form_error('city') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('City/Town:','city'); ?>
                    <?php echo form_error('city','<div class="error-red">', '</div>'); ?>
                    <?php foreach($personal as $row): ?>
                    <?php echo form_input('city',$row->city,'class="form-control" placeholder="ex: Guiguinto" id="city"'); ?>
                    <?php endforeach; ?>
                  </div>
                  <div <?php echo (form_error('province') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Province:','province'); ?>
                    <?php echo form_error('province','<div class="error-red">', '</div>'); ?>
                    
                    <?php foreach($personal as $row): ?>
                    <?php echo form_input('province',$row->province,'class="form-control" placeholder="ex: Bulacan" id="province"'); ?>
                    <?php endforeach; ?>
                  </div>
                </div>
                <div class="col-lg-3 choices2">
                  <div <?php echo (form_error('country') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Country:','country'); ?>
                    <?php echo form_error('country','<div class="error-red">', '</div>'); ?>
                    <?php foreach($personal as $row): ?>
                   <?php echo form_input('country',$row->country,'class="form-control" placeholder="ex: Philippines" id="country"'); ?>
                    <?php endforeach; ?>
                  </div>
                  <div <?php echo (form_error('zip') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Zip Code:','zip'); ?>
                    <?php echo form_error('zip','<div class="error-red">', '</div>'); ?>
                    <?php foreach($personal as $row): ?>
                   <?php echo form_input('zip',$row->zip,'class="form-control" type="number" placeholder="ex: 3015" id="zip"'); ?>
                    <?php endforeach; ?>
                  </div>
                  <div <?php echo (form_error('birthday') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Birthday:','birthday'); ?>
                      <?php echo form_error('birthday','<div class="error-red">', '</div>'); ?>
                      <?php foreach($personal as $row): ?>
                   <input type="date" class="form-control" name="birthday" min="1900-01-02" id="birthday" placeholder="Select from the table below." value='<?php echo $row->birthday; ?>'>
                    <?php endforeach; ?>
                    <!-- 
                    <?php echo form_input('birthday',$birthday,' type="date" placeholder="Select " id="birthday"'); ?> -->
                  </div>
                </div>
                <div class="col-lg-3 choices4">
                  <div <?php echo (form_error('citizenship') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Citizenship:','citizenship'); ?>
                    <?php echo form_error('citizenship','<div class="error-red">', '</div>'); ?>
                    <?php foreach($personal as $row): ?>
                   <?php echo form_input('citizenship',$row->citizenship,'class="form-control" type="number" placeholder="ex: Korean" id="citizenship"'); ?>
                    <?php endforeach; ?>
                    
                  </div>
                  <div <?php echo (form_error('status') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Civil Status:','status'); ?>
                    <?php echo form_error('status','<div class="error-red">', '</div>'); ?>
                    <?php foreach($personal as $row): ?>
                      <input id="status" name="status" class="form-control" placeholder="Select from the list" type="text" list="personstatus" value='<?php echo $row->status; ?>' />
                    <?php endforeach; ?>
                    
                      <datalist id="personstatus">
                        <?php foreach($personstatusList as $row): ?>
                          <option><?php echo($row->status); ?></option>
                        <?php endforeach; ?>
                      </datalist>
                  </div>
                  <div <?php echo (form_error('gender') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                    <?php echo form_label('Gender:','gender'); ?>
                    <?php echo form_error('gender','<div class="error-red">', '</div>'); ?>

                    <?php foreach($personal as $row): ?>
                      <input id="gender" name="gender" class="form-control" placeholder="Select from the list" type="text" list="genders" value='<?php echo $row->gender; ?>'/>
                    <?php endforeach; ?>
                    
                      <datalist id="genders">
                        <?php foreach($genderList as $row): ?>
                          <option><?php echo($row->gender); ?></option>
                        <?php endforeach; ?>
                      </datalist>
                  </div>
                </div>
              </div>

              <div class="section-size">
                <div class="name">Educational Background</div>
                <div class="border-bottom"></div>
                <p>This area is optional, you could provide other degrees you've taken and schools attended.</p>
                <div class="col-lg-3 choices3">
                  <div  <?php echo (form_error('course1') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                        <?php echo form_label('Course:','course1'); ?>
                    <?php echo form_error('course1','<div class="error-red">', '</div>'); ?>
                        <?php echo form_input('course1','','class="form-control" placeholder="ex: Bachelor of Science in Computer Science" id="course1"'); ?>
                  </div>
                  <div <?php echo (form_error('course2') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                        <?php echo form_label('Course:','course2'); ?>
                    <?php echo form_error('course2','<div class="error-red">', '</div>'); ?>
                        <?php echo form_input('course2','','class="form-control" placeholder="ex: Bachelor of Science in Computer Science" id="course2"'); ?>
                  </div>
                  <div <?php echo (form_error('course3') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                        <?php echo form_label('Course:','course3'); ?>
                    <?php echo form_error('course3','<div class="error-red">', '</div>'); ?>
                        <?php echo form_input('course3','','class="form-control" placeholder="ex: Bachelor of Science in Computer Science" id="course3"'); ?>
                  </div>
                </div>
                <div class="col-lg-3 choices2">
                  <div  <?php echo (form_error('year1') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                          <?php echo form_label('Year Finished:','year1'); ?>
                      <?php echo form_error('year1','<div class="error-red">', '</div>'); ?>
                          <?php echo form_input('year1','','class="form-control" placeholder="ex: 2016" id="year1"'); ?>
                    </div>
                    <div <?php echo (form_error('year2') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                          <?php echo form_label('Year Finished:','year2'); ?>
                      <?php echo form_error('year2','<div class="error-red">', '</div>'); ?>
                          <?php echo form_input('year2','','class="form-control" placeholder="ex: 2016" id="year2"'); ?>
                    </div>
                    <div <?php echo (form_error('year3') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                          <?php echo form_label('Year Finished:','year3'); ?>
                      <?php echo form_error('year3','<div class="error-red">', '</div>'); ?>
                          <?php echo form_input('year3','','class="form-control" placeholder="ex: 2016" id="year3"'); ?>
                    </div>
                </div>
                <div class="col-lg-3 choices4">
                  <div  <?php echo (form_error('school1') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                          <?php echo form_label('School Attended:','school1'); ?>
                      <?php echo form_error('school1','<div class="error-red">', '</div>'); ?>
                          <?php echo form_input('school1','','class="form-control" placeholder="ex: Adamson University" id="school1"'); ?>
                    </div>
                    <div <?php echo (form_error('school2') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                          <?php echo form_label('School Attended:','school2'); ?>
                      <?php echo form_error('school2','<div class="error-red">', '</div>'); ?>
                          <?php echo form_input('school2','','class="form-control" placeholder="ex: Adamson University" id="school2"'); ?>
                    </div>
                    <div <?php echo (form_error('school3') == '') ? '' : ' class="yes_error"'; ?> class="required-red form-group">
                          <?php echo form_label('School Attended:','school3'); ?>
                      <?php echo form_error('school3','<div class="error-red">', '</div>'); ?>
                          <?php echo form_input('school3','','class="form-control" placeholder="ex: Adamson University" id="school3"'); ?>
                    </div>
                </div>
              </div>
              <hr class="col-lg-11 spacer_1">
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
    $("#zip").keydown(function (e) {
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
});
</script>
