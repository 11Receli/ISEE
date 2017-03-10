
<body class="w3-animate-opacity" id="page-top" style="height:100%">

    <!-- Navigation -->
    <nav id="main" class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="scroll navbar-brand w3-animate-opacity" href="#page-top">I S E E</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url('page/article_2'); ?>">Articles</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url('page/about_2'); ?>">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url('page/ApplicantRegistrationController/my_message_2'); ?>">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <?php if($this->session->userdata('username')): ?>
                            <a href="#" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <?php echo $this->session->userdata('username'); ?></a>
                        <?php else: ?>
                            <a href="<?php echo base_url('page/mainregistration'); ?>"><span>Sign In</span></a>
                        <?php endif; ?>
                      
                        <?php if($this->session->userdata('username')): ?>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <!-- <li>
                                    <a href="<?php echo base_url('page/ApplicantProfileUpdateController/handleProfileUpdate'); ?>" style="color:black;">Update Profile</a>
                                </li> -->
                                <!-- <li>
                                    <a href="<?php echo base_url('page/ApplicantRegistrationController/resume'); ?>" style="color:black;">View Profile</a>
                                </li> -->
                                <li>
                                    <a href="<?php echo base_url('page/logout'); ?>" style="color:black;">Logout</a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </li>
                </ul>
        </div>
            <!-- /.navbar-collapse -->
      </div>
    </nav>

    <div class="homeheaderapp">
        <div class="container">
            <div class="row homeheaderapp_size">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <div class="col-lg-4">
                            <img class="gif_1" src="<?php echo base_url(IMG . 'ISEE2.GIF'); ?>" alt="">
                            <img class="gif_2" src="<?php echo base_url(IMG . 'ISEE.GIF'); ?>" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h1 class="name">BE DISCOVERED</h1>
                            <h3 class="skills">A NEW AVENUE TO FIND JOBS AND BE KNOWN TO THE WORLD</h3>
                            <div class="spacer_1"></div>
                            <h3 class="skills">
                                <?php if($this->session->userdata('username')): ?>
                                    
                                <?php else: ?>
                                    <a href="<?php echo base_url('page/login'); ?>" class="btn-mycustom">
                                    <span>Login Here</span></a>
                                <?php endif; ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <?php if($this->session->userdata('username')): ?>
        <?php
            $this->view('jobAlertView');
        ?>
        
    <?php endif; ?> -->
    <!-- Portfolio Grid Section -->

    <!-- Footer -->
    <!-- <div style="min-height:25px;background-color:#2C3E50;"></div>
    <div style="min-height:50px;background-color:white;"></div>
    <div style="min-height:25px;background-color:#2C3E50;"></div> -->
    <div class="col-lg-12 homeapp_bg"> 
    
        <div class="col-lg-4 homeapp_base">
        <hr class="col-lg-2">
        <hr class="col-lg-8 spacer_1"> 
            <h3>PROFILE STATUS</h3>
        <hr class="col-lg-2">
        <hr class="col-lg-8 spacer_1"> 
            
            <div class="col-lg-12 homeapp">
            <?php if($tagpi=='You have no personal information yet.'):?>
                <span class="none"><?php echo $tagpi; ?></span>
            
            <?php else :?>
                <span class="updating"><?php echo $tagpi; ?></span>
            <?php endif; ?>
                
            </div>
            <div class="col-lg-12 homeapp">
                <?php if($tagedu=='You have no educational background yet.'):?>
                    <span class="none"><?php echo $tagedu; ?></span>
                
                <?php else :?>
                    <span class="updating"><?php echo $tagedu; ?></span>
                <?php endif; ?>
                
            </div>
            <div class="col-lg-12 homeapp">
                <?php if($tagwork=='You have no working background yet.'):?>
                    <span class="none"><?php echo $tagwork; ?></span>
               
                <?php else :?>
                    <span class="updating"><?php echo $tagwork; ?></span>
                <?php endif; ?>
                
            </div>
            <div class="col-lg-12 homeapp">
                <?php if($tagskill=='You have no skill information yet.'):?>
                    <span class="none"><?php echo $tagskill; ?></span>
                
                <?php else :?>
                    <span class="updating"><?php echo $tagskill; ?></span>
                <?php endif; ?>
                <a href="ApplicantRegistrationController/updateprofile" class="btn-uh1">
                    Edit Your Profile
                </a>


              <div id="selectImage" style="text-align:left;">
                <label>Upload your Resume here</label><br>
                
                <input type='file' name='userfile' size='20' id='file' onchange="readURL(this);" />
                <div class="spacer_1"></div>
                
              </div>
              
                <a href="ApplicantRegistrationController/updateprofile" class="btn-uh1">
                    Submit
                </a>
              
            </div>
        </div>
        <div class="col-lg-7 homeapp_base2">
        <hr class="col-lg-2">
        <hr class="col-lg-9 spacer_1"> 
            <h3 style="text-align:center">Job Adds</h3>
        <hr class="col-lg-2">
        <hr class="col-lg-9 spacer_1"> 
            <div class="jobad">
            <?php foreach($jobs as $row): ?>
                      <h2><?php echo $row->name; ?></h2>
                      <p><?php echo $row->date; ?></p>
                      <p><?php echo $row->title; ?></p>
                      <p><?php echo $row->description; ?></p>
                      <p><?php echo $row->location; ?></p>
                      <p><?php echo $row->course; ?></p>
                      <p><?php echo $row->yrsofexp; ?></p>
                      <p><?php echo $row->salary; ?></p>
                      <p><?php echo $row->contactno; ?></p>
                      <p><?php echo $row->address; ?></p>
                      <p><?php echo $row->skills; ?></p>
                      <a href="#" class="btn-uh2">
                            Apply
                        </a>
            <hr class="spacer_1">
            <?php endforeach; ?>
            </div>
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
    
</body>
<script type="text/javascript">
    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
        return false;
    });

    $(window).scroll(function() {
      if ($(document).scrollTop() > 100) {
        $('nav').addClass('shrink');

      } else {

        $('nav').removeClass('shrink');
      }
    });
    

</script>


