
<div class="intro-header w3-animate-opacity" id="home">

    <div class="container ">

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
                        <li class="grow2">
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
<?php if($this->session->userdata('username')): ?>
	<?php
		$this->view('jobAlertView');
	?>
	
<?php endif; ?>

<div style="padding:20px 0;">
    <div><h1 class="center font-50" style="padding-bottom:10px;font-weight:bold;">Achievers</h1></div>
    <div class="content-section-a grow " id="achievers">
        <div class="container">
            <div class="row">
            <?php foreach($home_achievers_1 as $row): ?>
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-sm-12"><!-- 
                <hr class="-spacer"> -->
                <div class="clearfix"></div>
                <h2 class=" center font-30" style="font-weight:bold;"><?php echo $row->name; ?></h2>
                <h2 class="center font-15" style="font-weight:bold;"><?php echo $row->course; ?><h4 class="lead center font-15" style="font-weight:bold;">Batch <?php echo $row->graduation; ?><br></h4></h2>
                <p class="lead center font-15"><?php echo $row->achievements; ?><br></p>
                
                <!-- <p class="block-quote italic center"><?php echo $row->quote; ?> -->
                
            </div>
            <div class="col-lg-3 col-lg-offset-1 col-sm-6">
                <img class="img-thumbnail circle_200 img-circle w3-animate-opacity" src="<?php echo base_url($row->image); ?>" alt="">
            </div>
            
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="content-section-b grow" id="achievers">
        <div class="container">
            <div class="row">
            <?php foreach($home_achievers_2 as $row): ?>
                <div class="col-lg-2"></div>
                 <div class="col-lg-3 col-sm-6">
                    <img class="img-thumbnail circle_200 img-circle w3-animate-opacity " src="<?php echo base_url($row->image); ?>" alt="">
                </div>
                <div class="col-lg-4  col-lg-offset-1 col-sm-12"><!-- 
                    <hr class="-spacer"> -->
                    <div class="clearfix"></div>
                    <h2 class=" center font-30" style="font-weight:bold;"><?php echo $row->name; ?></h2>
                    <h2 class="center font-15" style="font-weight:bold;"><?php echo $row->course; ?><h4 class="lead center font-15" style="font-weight:bold;">Batch <?php echo $row->graduation; ?><br></h4></h2>
                    <p class="lead center font-15"><?php echo $row->achievements; ?><br></p>
                    
                    <!-- <p class="block-quote italic center"><?php echo $row->quote; ?> -->
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="content-section-a grow" id="achievers">
        <div class="container">
            <div class="row">
            <?php foreach($home_achievers_3 as $row): ?>
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-sm-12"><!-- 
                <hr class="-spacer"> -->
                <div class="clearfix"></div>
                <h2 class=" center font-30" style="font-weight:bold;"><?php echo $row->name; ?></h2>
                <h2 class="center font-15" style="font-weight:bold;"><?php echo $row->course; ?><h4 class="lead center font-15" style="font-weight:bold;">Batch <?php echo $row->graduation; ?><br></h4></h2>
                <p class="lead center font-15"><?php echo $row->achievements; ?><br></p>
            
                <!-- <p class="block-quote italic center"><?php echo $row->quote; ?> -->
                
            </div>
            <div class="col-lg-3 col-lg-offset-1 col-sm-6">
                <img class="img-thumbnail circle_200 img-circle w3-animate-opacity" src="<?php echo base_url($row->image); ?>" alt="">
            </div>
            
            <?php endforeach; ?>
            </div>
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
                        <li class="grow2">
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
<!-- /.banner-->
