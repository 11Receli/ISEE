<?php echo form_open('','class="form-sign"'); ?>

<div class="my-reg-1 w3-animate-opacity">
    <div class="container my-reg-1">
        <div class="row size_3">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="reg-box">
                  <form >
                  <div class="name">Step 1</div>
                  <div class="spacer_3"></div>
                  <?php echo form_error('accounttype'); ?>
                  <div class="choices">
                    <input id="accounttype" name="accounttype" type="radio" value="TRUE"/> <span>Employer</span><br>
                    <input id="accounttype" name="accounttype" type="radio" value="FALSE"/> <span>Job Applicant</span>
                  </div>
                  <div class="spacer_3"></div>
                    <button type="submit" name="submit" class="btn btn-mycustom-login">
                      <h4>Next<span class="glyphicon glyphicon-chevron-right"></span></h4>
                    </button>
                  </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<?php echo form_close(); ?>




