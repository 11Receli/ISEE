
<?php echo form_open(); ?>
<!-- Navigation -->
    <nav id="mainNav" class="w3-animate-opacity navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('page'); ?>">I S E E</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="<?php echo base_url('page'); ?>">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url('page/article'); ?>">Articles</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url('page/about'); ?>">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url('page/ApplicantRegistrationController/my_message'); ?>">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <?php if($this->session->userdata('username')): ?>
                            <a href="#" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <?php echo $this->session->userdata('username'); ?></a>
                        <?php else: ?>
                            <a href="<?php echo base_url('page/registration'); ?>"><span>Sign In</span></a>
                        <?php endif; ?>
                      
                        <?php if($this->session->userdata('username')): ?>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li>
                                    <a href="<?php echo base_url('page/ApplicantProfileUpdateController/handleProfileUpdate'); ?>">Update Profile</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('page/logout'); ?>">Logout</a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<div class="my_header-2 w3-animate-opacity">
    <div class="container">
        <div class="row size_5">
            <div class="col-lg-12">
                <div class="intro-text col-lg-12">
                    <div class="spacer_1"></div>
                    <div class="spacer_1"></div>
                    <img class="gif_1 area-1" src="<?php echo base_url(IMG . 'CCS.jpg'); ?>" alt="">
                    <div class="area-2">
                        <span class="name">DYCIans</span>
                        <div class="spacer_1"></div>
                        <span class="skills">We are students in Dr. Yanga's Colleges Inc., taking up the course of Bachelor of Science in Computer Science, creating an employment site to help out our fellow DYCIans on about having more opportunities and connections to the real world.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row authors w3-animate-opacity">
    <div class="col-lg-12">
        <h1 class="page-header">Our Team</h1>
    </div>

    <?php foreach($team as $row): ?>
    <div class="col-lg-3 text-center">
        <div style="width:97%" class="profile-custom">
            <img class="img-circle img-responsive img-center" src="<?php echo base_url($row->image); ?>" alt="">
            <h3><?php echo $row->name; ?></h3>
            <h5><?php echo $row->graduation; ?></h5><br>
            <span><?php echo $row->ambision; ?></span>
        </div>
    </div>  
    <?php endforeach; ?>
</div>

<div class="text-center my-footer w3-animate-opacity">
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
<!--                 <?php foreach($students as $row): ?>
                <div class="col-lg-4 col-sm-12 text-center bottom-space backchange" style="padding-bottom:50px">
                    <div class="padding-top_25">
                       <img class="img-circle img-thumbnail img-center circle growachiever margin-bottom_35" src="<?php echo base_url($row->image); ?>" alt="">
                    
                        <div class="margin-top_25" style="min-height:140px;">
                            <h3 class="grow" style="line-height:20px;"><?php echo $row->name; ?></h3>
                            <h5 class="font-15 grow" style="line-height:20px; font-weight:bold;"><?php echo $row->course; ?><br> <span class="font-13 grow" style="line-height:20px; font-weight:lighter;">Batch <?php echo $row->graduation; ?></span></h5>
                            <h6 class="font-13 grow" style="line-height:20px;"><?php echo $row->achievements; ?><br></h6>
                        </div>
                        <div class="bg-blue" style="padding:10px">
                            <h5 class="font-22 white grow" style="line-height:20px;"><?php echo $row->work; ?><br></h5>
                            <h6 class="font-13 white grow" style="line-height:15px;"><?php echo $row->company; ?><br></h6>
                            <p></p>
                            <div class="bg-white grow">
                                <h2 class="font-14 italic" style="line-height:20px;"><?php echo $row->quote; ?></h2>
                            </div>
                        </div>
                         
                    </div>
                    
                </div>
                <?php endforeach; ?> -->