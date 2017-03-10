
<?php echo form_open(); ?>
<!-- 
<div class="my_header-2 w3-animate-opacity">
    <div class="container">
        <div class="row size_5">
            <div class="col-lg-12">
                <div class="intro-text col-lg-12">
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
 -->
 <!-- Navigation -->
    <nav id="mainNav" class="w3-animate-opacity navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('page/reload_page'); ?>">I S E E</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="<?php echo base_url('page/reload_page'); ?>">Home</a>
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

 <div id="portfolio">
        <div class="container w3-animate-opacity">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr class="spacer_1">
                    <hr class="spacer_1">
                    <hr class="spacer_1">
                    <div class="spacer_1"></div>
                    <h2>Featured Article of the Week</h2>
                    <hr class="spacer_1">
                </div>
            </div>
            <?php if($latest_article):?>
            <div class="row">
            
                <?php //foreach($latest_article as $row): ?>
                <div class="col-md-2 "></div>
                <div class="col-md-8 ">
                        <img class="img-responsive border-custom" src="<?php echo base_url($latest_article['img']); ?>" alt="">
                        <div style="border:2px solid #132639;margin-right:4%;margin-top:20px;border-radius:10px">
                            <div class="spacer_1"></div>
                            <div class="spacer_1"></div>
                            <h3 style="text-align:center"><?php echo $latest_article['title']; ?></h3>
                            <h4 style="text-align:center">by: <?php echo $latest_article['author']; ?></h4>
                            <div class="spacer_1"></div>
                            <div class="spacer_1"></div>
                        </div>
                            <div class="spacer_1"></div>
                            <div class="spacer_1"></div>

                            <p style="padding:0px 40px"><?php echo $latest_article['content']; ?></p>
                            <div class="spacer_1"></div>
                            <div class="spacer_1"></div>
                            <div class="spacer_1"></div>
                            <div class="spacer_1"></div>
                            <div class="spacer_1"></div>
                            <div class="spacer_1"></div>
                            <div class="spacer_1"></div>
                </div>
                <div class="col-md-2 "></div>
                <!-- <div class="col-md-5">
                    
                </div> -->
                
            </div>
            <?php else: ?>
                    <p>No latest article.</p>
                <?php endif; ?>
        </div>
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
