<?php echo form_open('','class="form-sign"'); ?>
  <div class=" my-reg-2  w3-animate-opacity">
    <div class="container">
      <div class="row size_4">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 reg-box">
          <h2 class="name">Step 6: Skills and Expertise</h2> 

          <div class="spacer_2"></div>
          <div class="spacer_2"></div>

            <div class="form-group required-red">
              <?php echo form_label('Skills:','skills'); ?><br/>
              <span class="error-red"><?php echo form_error('skills','Rerqured Input: '); ?></span>
              <input id="skills" name="skills" class="form-control" placeholder="Select a skill from the list" type="text" list="skillset"/>
                <datalist id="skillset">
                  <?php foreach($skillsList as $row): ?>
                    <option><?php echo($row->skills); ?></option>
                  <?php endforeach; ?>
                </datalist>
            </div>
            <div class="form-group">
              <?php echo form_label('Others:','others'); ?><br/>
              <span class="error-red"><?php echo form_error('others','Rerqured Input: '); ?></span>
              <?php echo form_textarea('others','','class="form-control" placeholder="Other Skills not specified on the list." id="others"'); ?>
            </div>
            <div class="form-group">
              <?php echo form_label('Specializitions (Optional):','spec'); ?><br/>
              <span class="error-red"><?php echo form_error('spec','Rerqured Input: '); ?></span>
              <?php echo form_textarea('spec','','class="form-control" placeholder="A few sentences about your specific skills and specializations." id="spec"'); ?>
            </div>
        

          <div class="spacer_3"></div>
          
          <!-- <button type="submit" name="submit2" class="btn btn-mycustom-login" style="margin-top:30px; margin-right:5px; float:right;" value="1"><h4>Skip</h4></button> -->
          <button type="submit" name="submit" class="btn btn-mycustom-login float_1" value="1"><h4>Next</h4></button>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </div>


<?php echo form_close(); ?>
<script type="text/javascript">
var datalist = jQuery('datalist');
var options = jQuery('datalist option');
var optionsarray = jQuery.map(options ,function(option) {
    return option.value;
});
var input = jQuery('input[list]');
var inputcommas = (input.val().match(/,/g)||[]).length;
var separator = ',';
    
function filldatalist(prefix) {
  if (input.val().indexOf(separator) > -1 && options.length > 0) {
    datalist.empty();
    for (i=0; i < optionsarray.length; i++ ) {
      if (prefix.indexOf(optionsarray[i]) < 0 ) {
        datalist.append('<option value="'+prefix+optionsarray[i]+'">');
      }
    }
  }
}
input.bind("change paste keyup",function() {
  var inputtrim = input.val().replace(/^\s+|\s+$/g, "");
  var currentcommas = (input.val().match(/,/g)||[]).length;
  if (inputtrim != input.val()) {
    if (inputcommas != currentcommas) {
      var lsIndex = inputtrim.lastIndexOf(separator);
      var str = (lsIndex != -1) ? inputtrim.substr(0, lsIndex)+", " : "";
      filldatalist(str);
      inputcommas = currentcommas;
    }
    input.val(inputtrim);
  }
});
</script>
