<?php echo form_open('','class="form-sign"'); ?>
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

<div id="contact">
        <div class="container w3-animate-opacity">
            <div class="row">

                <div class="spacer_1"></div>
                <div class="spacer_1"></div>
                <div class="spacer_1"></div>
                <div class="col-lg-12 text-center">
                    <hr class="spacer_1">
                    <div class="spacer_1"></div>
                    <h1>For Inquiries</h1>
                    <hr class="spacer_1">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm">
                        <div class="form-group required-red">
                          <?php echo form_label('Name:','inquiryname'); ?><br/>
                          <span class="error-red"><?php echo form_error('inquiryname','Rerqured Input: ');?></span>
                          <?php echo form_input('inquiryname',$inquiryname,'class="form-control" placeholder="ex: John Smith" id="inquiryname"'); ?>
                        </div>
                        <div class="form-group required-red">
                          <?php echo form_label('Contact Number:','inquirycontact'); ?><br/>
                          <span class="error-red"><?php echo form_error('inquirycontact','Rerqured Input: '); ?></span>
                          <?php echo form_input('inquirycontact',$inquirycontact,'class="form-control" placeholder="ex: (044) 6324 877 / +639984478282" type="number" id="inquirycontact"'); ?>
                        </div>
                        <div class="form-group required-red">
                          <?php echo form_label('E-mail Address:','inquiryemail'); ?><br/>
                          <span class="error-red"><?php echo form_error('inquiryemail','Rerqured Input: '); ?></span>
                          <?php echo form_input('inquiryemail',$inquiryemail,'class="form-control"  type="email" placeholder="ex: inquiryemail@gmail.com" id="inquiryemail"'); ?>
                        </div>
                        <div class="form-group required-red">
                          <?php echo form_label('Message:','inquirymessage'); ?><br/>
                          <span class="error-red"><?php echo form_error('inquirymessage','Rerqured Input: '); ?></span>
                          <?php echo form_textarea('inquirymessage',$inquirymessage,'class="form-control" placeholder="Name of Company Owner" id="inquirymessage"'); ?>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <h3 class="skills">
                                
                                    <button type="submit" name="submit" class="btn btn-mycustom-login" style="margin-top:30px;" value="1">
                                      <h4>Submit</h4>
                                    </button>
                            </h3>
                            </div>
                        </div>

                <div class="spacer_1"></div>
                <div class="spacer_1"></div>
                <div class="spacer_1"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 
<?php echo form_close(); ?>


          


