
<div id="page-top">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">I S E E</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
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
                            <a href="<?php echo base_url('page/mainregistration'); ?>"><span>Sign In</span></a>
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

    <!-- Header --><!-- 
    <div class="my_header">
        <div class="container">
            <div class="row size_1">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <img class="gif_1" src="<?php echo base_url(IMG . 'ISEE2.GIF'); ?>" alt="">
                        <img class="gif_2" src="<?php echo base_url(IMG . 'ISEE.GIF'); ?>" alt="">
                        <h1 class="name">DISCOVER OR</h1>
                        <h1 class="name">BE DISCOVERED</h1>
                        <h3 class="skills">A NEW AVENUE TO FIND JOBS AND EMPLOYEES ALL AT ONCE</h3>
                        <div class="spacer_1"></div>
                            <h3 class="skills">
                                <?php if($this->session->userdata('username')): ?>
                                    <h3>WELCOME DYCIAN!</h3>
                                <?php else: ?>
                                    <a href="<?php echo base_url('page/login'); ?>" class="btn-mycustom">
                                    <span>Login Here</span></a>
                                <?php endif; ?>
                            </h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- 
    <?php if($this->session->userdata('username')): ?>
        <?php
            $this->view('jobAlertView');
        ?> -->
        
    <?php endif; ?>
    <!-- Portfolio Grid Section -->
    
    <!-- Footer -->
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
</div>

