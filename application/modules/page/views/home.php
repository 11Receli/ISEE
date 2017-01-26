
<div class="intro-header" id="home">

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
<div style="padding:20px 0;">
    <div><h2 class="center" style="padding-bottom:10px;">Achievers</h2></div>
    <div class="content-section-a" id="achievers">

        <div class="container">

            <div class="row">
            <?php foreach($students as $row): ?>
                <div class="col-lg-2"></div>
                <div class="col-lg-4 col-sm-12">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><?php echo $row['name']; ?></h2>
                    <p class="lead"><?php echo $row['course']; ?><br></p>
                    <p class="lead"><?php echo $row['graduation']; ?><br></p>
                    <p class="lead"><?php echo $row['achievements']; ?><br></p>
                    <p class="block-quote"><?php echo $row['quote']; ?>
                    
                </div>
                <div class="col-lg-3 col-lg-offset-1 col-sm-6">
                    <img class="img-responsive circle" src="<?php echo base_url($row['image']); ?>" alt="">
                </div>
            <?php endforeach; ?>
            </div>

        </div>
        <!-- /.container -->

    </div>
     <div class="content-section-b" id="achievers">

        <div class="container">

            <div class="row">
            <?php foreach($students as $row): ?>
                <div class="col-lg-2"></div>
                 <div class="col-lg-3 col-sm-6">
                    <img class="img-responsive circle" src="<?php echo base_url($row['image']); ?>" alt="">
                </div>
                <div class="col-lg-4  col-lg-offset-1 col-sm-12">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><?php echo $row['name']; ?></h2>
                    <p class="lead"><?php echo $row['course']; ?><br></p>
                    <p class="lead"><?php echo $row['graduation']; ?><br></p>
                    <p class="lead"><?php echo $row['achievements']; ?><br></p>
                    <p class="block-quote"><?php echo $row['quote']; ?>
                    
                </div>
               
            <?php endforeach; ?>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <div class="content-section-a" id="achievers">

        <div class="container">

            <div class="row">
            <?php foreach($students as $row): ?>
                <div class="col-lg-2"></div>
                <div class="col-lg-4 col-sm-12">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><?php echo $row['name']; ?></h2>
                    <p class="lead"><?php echo $row['course']; ?><br></p>
                    <p class="lead"><?php echo $row['graduation']; ?><br></p>
                    <p class="lead"><?php echo $row['achievements']; ?><br></p>
                    <p class="block-quote"><?php echo $row['quote']; ?>
                    
                </div>
                <div class="col-lg-3 col-lg-offset-1 col-sm-6">
                    <img class="img-responsive circle" src="<?php echo base_url($row['image']); ?>" alt="">
                </div>
            <?php endforeach; ?>
            </div>

        </div>
        <!-- /.container -->
    </div>
</div>
<div class="banner">

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="col-md-2"></div>
                <div class="intro-message col-md-8">
                    <h1 class="center">SEE MORE SUCCESSFUL DYCIANS</h1>
                    <!-- <hr class="intro-divider"> -->
                    <ul class="list-inline intro-social-buttons center">
                        <li>
                                <a href="<?php echo base_url('page/achiever'); ?>" class="btn btn-primary btn-xxlg">
                                <span>More Here</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.banner