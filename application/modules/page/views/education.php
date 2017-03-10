<?php echo form_open('','class="form-sign"'); ?>
  <div class=" my-reg-2  w3-animate-opacity">
    <div class="container">
      <div class="row size_4">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 reg-box">
          <h2 class="name">Step 5: Educational Background</h2> 

          <div class="spacer_2"></div>
          <div class="spacer_2"></div>

          <div class=" divisions2">
            <div class="form-group" style="text-align:left">
                  <?php echo form_label('Course:','course1'); ?><br>
              <span class="error-red">    <?php echo form_error('course1','Required Input: '); ?></span>
                  <?php echo form_input('course1','','class="form-control" placeholder="ex: Bachelor of Science in Computer Science" id="course1"'); ?>
            </div>
            <div class="form-group" style="text-align:left">
                  <?php echo form_label('Course:','course2'); ?><br>
              <span class="error-red">    <?php echo form_error('course2','Required Input: '); ?></span>
                  <?php echo form_input('course2','','class="form-control" placeholder="ex: Bachelor of Science in Computer Science" id="course2"'); ?>
            </div>
            <div class="form-group" style="text-align:left">
                  <?php echo form_label('Course:','course3'); ?><br>
              <span class="error-red">    <?php echo form_error('course3','Required Input: '); ?></span>
                  <?php echo form_input('course3','','class="form-control" placeholder="ex: Bachelor of Science in Computer Science" id="course3"'); ?>
            </div>
          </div>
          <div class=" divisions2">
            <div class="form-group" style="text-align:left">
                  <?php echo form_label('Year:','year1'); ?><br>
              <span class="error-red">    <?php echo form_error('year1','Required Input: '); ?></span>
                  <?php echo form_input('year1','','class="form-control" placeholder="ex: 2016" id="year1"'); ?>
            </div>
            <div class="form-group" style="text-align:left">
                  <?php echo form_label('Year:','year2'); ?><br>
              <span class="error-red">    <?php echo form_error('year2','Required Input: '); ?></span>
                  <?php echo form_input('year2','','class="form-control" placeholder="ex: 2016" id="year2"'); ?>
            </div>
            <div class="form-group" style="text-align:left">
                  <?php echo form_label('Year:','year3'); ?><br>
              <span class="error-red">    <?php echo form_error('year3','Required Input: '); ?></span>
                  <?php echo form_input('year3','','class="form-control" placeholder="ex: 2016" id="year3"'); ?>
            </div>
          </div>
          <div class=" divisions2">
            <div class="form-group" style="text-align:left">
                  <?php echo form_label('School:','school1'); ?><br>
              <span class="error-red">    <?php echo form_error('school1','Required Input: '); ?></span>
                  <?php echo form_input('school1','','class="form-control" placeholder="ex: Dr. Yangas Colleges Inc." id="school1"'); ?>
            </div>
            <div class="form-group" style="text-align:left">
                  <?php echo form_label('School:','school2'); ?><br>
              <span class="error-red">    <?php echo form_error('school2','Required Input: '); ?></span>
                  <?php echo form_input('school2','','class="form-control" placeholder="ex: Dr. Yangas Colleges Inc." id="school2"'); ?>
            </div>
            <div class="form-group" style="text-align:left">
                  <?php echo form_label('School:','school3'); ?><br>
              <span class="error-red">    <?php echo form_error('school3','Required Input: '); ?></span>
                  <?php echo form_input('school3','','class="form-control" placeholder="ex: Dr. Yangas Colleges Inc." id="school3"'); ?>
            </div>
          </div>
          <div class="form-group" style="text-align:left">
            <?php echo form_label('Certifications:','certifications'); ?><br/>
            <span class="error-red"><?php echo form_error('certifications','Rerqured Input: '); ?></span>
            <?php echo form_textarea('certifications','','class="form-control" placeholder="ex: Microsoft Specialist, NCII Certification Holder, etc." id="certifications"'); ?>
          </div>


          <button type="submit" name="submit2" class="btn btn-mycustom-login float_1" value="1"><h4>Skip</h4></button>
          <!-- <a class="btn btn-mycustom-login" style="margin-top:30px;font-size:22px;padding:10px 60px ; float:right;"href="<?php echo base_url('page/ApplicantRegistrationController/skills/'.$end); ?>">SKIP</a> -->
          <button type="submit" name="submit" class="btn btn-mycustom-login float_1" value="1"><h4>Next</h4></button>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </div>
<?php echo form_close(); ?>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(300);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
