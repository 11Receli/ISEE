<?php echo form_open('','class="form-sign"'); ?>
  <div class="container-fluid intro-header-mainlogin  w3-animate-opacity">
    <div class="col-md-3"></div>
    <div class="col-md-6 register">
      <h2 class="black" style="padding-top:50px">Step 1</h2> 
      <h3></h3>
      
      <div class="black" style="min-height:140px; padding:50px 70px  10px 70px;">
        <?php echo form_error('accounttype'); ?>
        <?//php echo form_input('accounttype',$accounttype,'class="form-control" placeholder="Type of Company" id="accounttype"'); ?>
        <div  style=" display:block; margin:0 0 0 35%;">
           <input id="accounttype" name="accounttype" type="radio" value="Employer"/> Employer<br>
           <input id="accounttype" name="accounttype" type="radio" value="Job Applicant"/> Job Applicant
        </div>
       
       <!--  <form id="accounttype" name="accounttype" class="form-control" style="width:30%;">
          <input type="radio" value="Employer" checked> Employer<br>
          <input type="radio" value="Job Applicant"> Job Applicant
        </form>  -->
        <!-- <datalist id="types">
           <option >
           <option value="Job Applicant">
        </datalist> -->
      </div>
      <button type="submit" name="submit" class="btn btn-lg btn-primary" value="1">Next</button>
          
    </div>
  </div>
<?php echo form_close(); ?>