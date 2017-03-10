
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
                <li class="page-scroll hidden">
                    <a class="scroll" href="#page-top"></a>
                </li>
                <li class="page-scroll" >
                    <a id="art" class="scroll" href="#portfolio">Articles</a>
                </li>
                <li class="page-scroll" >
                    <a id="abt" class="scroll" href="#about">About</a>
                </li>
                <li class="page-scroll" >
                    <a id="cont" class="scroll" href="#contact">Contact</a>
                </li>
                <li>
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
    </nav>

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
        <div class="container" style="min-height:400px;">
            <div class="row" >
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
                    <h3 style="margin-top:20px"><?php echo $latest_article['title']; ?></h3>
                    <h4>by: <?php echo $latest_article['author']; ?></h4>
                    <p><?php echo $latest_article['headline']; ?></p>
                    <a class="btn btn-primary" href="<?php echo base_url('page/article'); ?>">View Article<span class="glyphicon glyphicon-chevron-right"></span></a>
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
        <div class="container"  style="min-height:500px;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="about_header">About Us</h2>
                </div>
            </div>
            <div class="spacer_1"></div>
            <div class="spacer_1"></div>
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1">
                    <p style="font-size:28px;line-height:35px;">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-5">
                    <p style="font-size:28px;line-height:35px;">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="<?php echo base_url('page/about'); ?>" class="btn btn-lg btn-outline" style="font-size:28px;">
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
                    <form name="sentMessage" id="contactForm">
                        
                        
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <h3 class="skills">
                                
                                    <a href="<?php echo base_url('page/ApplicantRegistrationController/my_message'); ?>" class="btn-mycustom2" style="display:block;margin:0 auto;width:75%;text-align:center;">
                                    <span>Go Here</span></a>
                            </h3>
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

        if ($(document).scrollTop() > 600) {
            if ($(document).scrollTop() > 1200) {
                if ($(document).scrollTop() > 1800) {

                    $('nav').removeClass('active');
                    $('nav').removeClass('active2');
                    $('nav').addClass('active3');
                    $('nav').removeClass('inactive');
                    $('nav').removeClass('inactive2');
                } else {
                    $('nav').addClass('active2');
                    $('nav').removeClass('active');
                    $('nav').removeClass('active3');
                    $('nav').removeClass('inactive');
                    $('nav').removeClass('inactive2');
                }
            } else {
                $('nav').addClass('active');
                $('nav').removeClass('active2');
                $('nav').removeClass('active3');
                $('nav').removeClass('inactive');
                $('nav').removeClass('inactive2');
            }
        } else {
            $('nav').removeClass('active');
            $('nav').removeClass('active2');
            $('nav').removeClass('active3');

            $('nav').addClass('inactive2');
            $('nav').removeClass('inactive');
        }
      } else {
        $('nav').addClass('inactive');
        $('nav').removeClass('inactive2');
        $('nav').removeClass('shrink');
      }
    });

</script>


