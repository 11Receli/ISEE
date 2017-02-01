<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">I S E E</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="#home">Home</a>
                    </li>
                    <li class="">
                        <a href="#achievers">Achievers</a>
                    </li>
                    <li class="">
                        <a href="#">Contact</a>
                    </li>
                    <li class="">
                        <?php if($this->session->userdata('username')): ?>
                            <a href="#" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <?php echo $this->session->userdata('username'); ?></a>
                        <?php else: ?>
                            <a href="<?php echo base_url('page/registration'); ?>"><span>Sign In</span></a>
                        <?php endif; ?>
                      
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li>
                            <?php if($this->session->userdata('username')): ?>
                                <a href="<?php echo base_url('page/logout'); ?>">Logout</a>
                            <?php endif; ?>
                        </li>
                      </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>