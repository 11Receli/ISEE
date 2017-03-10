
<?php echo form_open(); ?>
<div class="row authors2 w3-animate-opacity">

    <div class="col-lg-12">
        <h1 class="page-header">Your Profile</h1>
    </div>
    <div class="col-lg-1"></div>
    <div class="col-lg-10 text-center">
        <div class="profile-custom2" style="color:#000;">
            <?php foreach($photo as $row): ?>
                <img class="img-responsive img-center img-circle" src="<?php echo base_url($row->userfile); ?>" alt="">
            <?php endforeach; ?>
            <?php foreach($basic as $row): ?>
                <h3><?php echo $row->studentid; ?></h3>
                <span style="font-size:14px;"><?php echo $row->department; ?></span></br>
                <span style="font-size:14px;"><?php echo $row->course; ?></span></br>
                <span style="font-size:14px;"><?php echo $row->graduation; ?></span></br>
            <?php endforeach; ?>
            <hr class="spacer_1">
            <div style="min-height:50px;"></div>
            <?php foreach($personal as $row): ?>
            <h1 class="page-header" style="text-align:left;padding-left:6%;">Personal Information</h1>
            <div style="padding-left:5%;padding-bottom:50px;">
                <div class="divisions_profile">
                    
                        <span style="color:#000;font-size:20px;"><span style="color:#132639">Birthday: </span><?php echo $row->birthday; ?></span></br>
                    
                </div>
                <div class="divisions_profile">
                    
                        <span style="color:#000;font-size:20px;"><span style="color:#132639">Citizenship: </span> <?php echo $row->citizenship; ?></span></br>
                    
                </div>
                <div class="divisions_profile">
                    
                        <span style="color:#000;font-size:20px;"><span style="color:#132639">Status: </span><?php echo $row->status; ?> </span></br>
                    
                </div>
                <div class="divisions_profile">
                    
                        <span style="color:#000;font-size:20px;"><span style="color:#132639">Gender: </span><?php echo $row->gender; ?> </span></br>
                    
                </div>
            </div>

            <?php endforeach; ?>

            <hr class="spacer_1">
            <div style="min-height:50px;"></div>

            <?php foreach($education as $row): ?>
            <h1 class="page-header" style="text-align:left;padding-left:6%;">Educational Background</h1>
            <div style="padding-left:5%">
                <div class="divisions_profile_full">
                    
                        <span style="color:#000;font-size:20px;"><span style="color:#132639">Certifications: </span></span></br>
                        <span style="color:#000;font-size:20px;"><?php echo $row->certifications; ?></span>
                    
                </div>
                
            </div>
            <?php endforeach; ?>
            <?php foreach($education as $row): ?>
            <div style="min-height:50px;"></div>
            <h5 class="page-header" style="text-align:left;padding-left:6%;">Other Courses Taken</h5>
            <div style="padding-left:5%">
                <div class="divisions_profile_thirds" style="border-right:2px solid #000">
                    
                        <span style="color:#000;font-size:20px;"><span style="color:#132639">Course</span></span></br>
                        <span style="color:#000;font-size:20px;"><?php echo $row->course1; ?> </span></br>
                        <span style="color:#000;font-size:20px;"><?php echo $row->course2; ?> </span></br>
                        <span style="color:#000;font-size:20px;"><?php echo $row->course3; ?> </span></br>
                    
                </div>
                <div class="divisions_profile_thirds" style="border-right:2px solid #000">
                    
                        <span style="color:#000;font-size:20px;"><span style="color:#132639">School</span></span></br>
                        <span style="color:#000;font-size:20px;"><?php echo $row->school1; ?> </span></br>
                        <span style="color:#000;font-size:20px;"><?php echo $row->school2; ?> </span></br>
                        <span style="color:#000;font-size:20px;"><?php echo $row->school3; ?> </span></br>
                    
                </div>
                <div class="divisions_profile_thirds">
                    
                        <span style="color:#000;font-size:20px;"><span style="color:#132639">Year Finished</span></span></br>
                        <span style="color:#000;font-size:20px;"><?php echo $row->year1; ?> </span></br>
                        <span style="color:#000;font-size:20px;"><?php echo $row->year2; ?> </span></br>
                        <span style="color:#000;font-size:20px;"><?php echo $row->year3; ?> </span></br>
                    
                </div>
                
            </div>
            <?php endforeach; ?>
        </div>
        <a class="btn btn-mycustom-login" style="font-size:22px;padding:10px 60px; display:block; margin:30px auto 0px auto;"href="<?php echo base_url('page/login'); ?>">GO TO LOG IN PAGE</a>
    </div>  
   

    
</div>

<div class="text-center my-footer">
        <div class="my-footer-above">
            <div class="container">
                <div class="row">
                    <div class="my-footer-col col-md-4">
                        <h3>Location</h3>
                        <p>McArthur Highway,
                            <br>Wakas, Bocaue, Bulacan, Philippines</p>
                    </div>
                    <div class="my-footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://web.facebook.com/clairerecelli.renosa" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            
                            <li>
                                <a href="https://twitter.com/11Receli" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="my-footer-col col-md-4">
                        <h3>About ISEE</h3>
                        <p>This is a property created by Bachelor of Science in Computer Science students of <a class="btn-mycustom3" href="https://web.facebook.com/dycihs/?_rdr"> Dr. Yanga's Colleges Inc.</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; ISEE 2017
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php echo form_close(); ?>
