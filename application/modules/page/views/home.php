Header -->
<div class="intro-header">

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <img class="opacity5" src="<?php echo base_url(IMG . 'ISEE2.GIF'); ?>" alt="">
                    <img class="shadowimg" src="<?php echo base_url(IMG . 'ISEE.GIF'); ?>" alt="">
                    <h1>DISCOVER OR</h1>
                    <h1>BE DISCOVERED</h1>
                    <h3>A NEW AVENUE TO FIND JOBS AND EMPLOYEES ALL AT ONCE</h3>
                    <!-- <hr class="intro-divider"> -->
                    <ul class="list-inline intro-social-buttons">
                        <!-- <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li> -->
                        <li>
                            <?php if($this->session->userdata('username')): ?>
                                <h3 class="strong white">
                                WELCOME!</h3>
                            <?php else: ?>
                                <a href="<?php echo base_url('page/login'); ?>" class="btn btn-primary btn-xxlg">
                                <span>Login Here</span></a>
                            <?php endif; ?>
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.intro-header -->

<!-- Page Content -->
