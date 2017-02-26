<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#home">I S E E</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="<?php echo base_url('page'); ?>">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#articles">Articles</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url('page/about'); ?>">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url('page'); ?>">Contact</a>
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
