
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
                        <a href="#portfolio">Articles</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
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

    <!-- Header -->
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
                                    <h3>WELCOME!</h3>
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

    <?php if($this->session->userdata('username')): ?>
        <?php
            $this->view('jobAlertView');
        ?>
        
    <?php endif; ?>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Featured Article of the Week</h2>
                    <hr class="spacer_1">
                </div>
            </div>
            <div class="row">
            <?php if($latest_article):?>
                <?php //foreach($latest_article as $row): ?>
                <div class="col-md-7 ">
                    <a href="#">
                        <img class="img-responsive border-custom" src="<?php echo base_url($latest_article['img']); ?>" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3><?php echo $latest_article['title']; ?></h3>
                    <h4>by: <?php echo $latest_article['author']; ?></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                    <a class="btn btn-primary" href="#">View Article<span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <?php //endforeach; ?>
                <?php else: ?>
                    <p>No latest article.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="spacer_1"></div>
            <div class="spacer_1"></div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="<?php echo base_url('page/about'); ?>" class="btn btn-lg btn-outline">
                     See More About Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>For Inquiries</h2>
                    <hr class="spacer_1">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        
                        <div class="row control-group">
                            <div class="form-group">
                                <?php echo form_label('Name:','inquiryname'); ?>
                                <?php echo form_error('inquiryname'); ?>
                                <?php echo form_input('inquiryname','','class="form-control" placeholder="ex:John Smith" id="inquiryname"'); ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group">
                                <?php echo form_label('E-mail Address:','inquiryemail'); ?>
                                <?php echo form_error('inquiryemail'); ?>
                                <?php echo form_input('inquiryemail','','class="form-control" placeholder="ex:myemail@gmail.com" id="inquiryemail"'); ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group">
                                <?php echo form_label('Contact Number:','inquirycontact'); ?>
                                <?php echo form_error('inquirycontact'); ?>
                                <?php echo form_input('inquirycontact','','class="form-control" placeholder="ex:+639434345529" id="inquirycontact"'); ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group">
                                <?php echo form_label('Message:','inquirymessage'); ?>
                                <?php echo form_error('inquirymessage'); ?>
                                <?php echo form_input('inquirymessage','','class="form-control" placeholder="Your Inquiry" id="inquirymessage"'); ?>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-mycustom2" style="display:block; margin:0px auto; font-size:20px;">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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

