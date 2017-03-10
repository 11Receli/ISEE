<?php echo form_open('','class="form-sign"'); ?>

<div class="my-reg-1 w3-animate-opacity">
    <div class="container">
        <div class="row size_3">
            <div class="col-lg-4">
                <div class="reg-box">
                  <form>
                    <div class="">
                      <div class="name">Step 1</div>
                      <div class="border-bottom"></div>
                      <p>Kindly choose the type of account you wish to create from the choices below.</p>
                      <?php echo form_error('accounttype'); ?>
                      <div class="choices">
                        <div class="form-group">
                          <input id="accounttype" name="accounttype" type="radio" value="FALSE"/> <span>JOB APPLICANT</span><br>
                          <input id="accounttype" name="accounttype" type="radio" value="TRUE"/> <span>EMPLOYER</span>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submit2" id="submit2" class="btn btn-mycustom-leftreg1" value="1">
                      <h4><span class="glyphicon glyphicon-chevron-left" style="margin-right:2px;"></span>Back</h4>
                    </button>
                    <button type="submit" name="submit" id="submit" class="btn btn-mycustom-rightreg1" value="1">
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




