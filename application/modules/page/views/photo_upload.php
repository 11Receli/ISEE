<?php //echo form_open('','class="form-sign"'); ?>
<?php echo form_open_multipart(/*base_url('page/ApplicantRegistrationController/photo_upload')*/'','class="form-sign"');?>
  <div class=" my-reg-2  w3-animate-opacity">
    <div class="container">
      <div class="row size_4">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 reg-box">
          <h2 class="name">Step 8: Photo and Job Preferences</h2> 

            <form>
            <div class="form-group required-red">
              <span class='field'>
              <?php echo form_label('Salary Expectation:','expectation'); ?><br/>
              <span class="error-red"><?php echo form_error('expectation','Rerqured Input: '); ?></span>
                <input id="expectation" name="expectation" type="text" class="form-control"/>
              </span>
            </div>
            <div class="form-group required-red">
              <div class='field'>
              <?php echo form_label('Are you willing to work in different regions or countries?','yesno'); ?><br/>
              <span class="error-red"><?php echo form_error('yesno','Rerqured Input: '); ?></span>
              <input id="yesno" type="text" name="yesno" class="form-control" placeholder="Type either Yes or No" list="yesnolist"/>
                <datalist id="yesnolist">
                  <?php foreach($yesnoList as $row): ?>
                    <option><?php echo($row->yesno); ?></option>
                  <?php endforeach; ?>
                </datalist>
              </div>
            </div>
              <div class="spacer_1"></div>
              <div id="selectImage" style="text-align:left;">
                <label>Select your Profile Image Here</label><br>
                
                <input type='file' name='userfile' size='20' id='file' onchange="readURL(this);" />
                <div class="spacer_1"></div>
                <img id="blah" class="upload_size" src="<?php echo base_url(IMG . 'empty.jpg'); ?>" alt="your image" />
              </div>
              <div class='actions'>
                
                <input id="submit" name="submit" class="btn btn-mycustom-login float_1" type="submit" value="Next" disabled="disabled" style="font-size:30px" />
              </div>
            </form>

          <?php echo form_close(); ?>
          
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(350);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

  $(document).ready(function() {
    $('.field input').keyup(function() {

        var empty = false;
        $('.field input').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.actions input').attr('disabled', 'disabled');
        } else {
            $('.actions input').attr('disabled', false);
        }
    });
  });
</script>
