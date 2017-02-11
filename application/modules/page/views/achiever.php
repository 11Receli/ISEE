

<link rel="stylesheet" href="<?php echo base_url(CSS . 'round-about.css'); ?>" />
<?php echo form_open(); ?>
<div class="achiever_content">
    <div class="achievers w3-animate-opacity">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message-achievers">
                         <div class="col-lg-8">
                            <h1 class="page-header">DYCIan Achievers</h1>
                            <p>DYCIans are true individuals that shows the value of perseverance and uniqueness in the world. Here are a few of those personalities that became accomplished individuals in the industry today.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>

        <div class="container w3-animate-opacity ">

            <!-- Team Members Row -->
            <div class="row " >
                <div class="col-lg-12">
                    <img class="img-header img-circle img-responsive circle_120 float_left" src="<?php echo base_url(IMG . 'CCS.jpg'); ?>" alt="">
                    <h2 class="bottom-line margin-top_85">The College Hall of Fame</h2>
                    <h2 class="bottom-line2"></h2>
                </div>

                <?php foreach($students as $row): ?>
                <div class="col-lg-4 col-sm-12 text-center bottom-space backchange" style="padding-bottom:50px">
                    <div class="padding-top_25">
                       <img class="img-circle img-thumbnail img-center circle growachiever margin-bottom_35" src="<?php echo base_url($row->image); ?>" alt="">
                    
                        <div class="margin-top_25" style="min-height:140px;">
                            <h3 class="grow" style="line-height:20px;"><?php echo $row->name; ?></h3>
                            <h5 class="font-15 grow" style="line-height:20px; font-weight:bold;"><?php echo $row->course; ?><br> <span class="font-13 grow" style="line-height:20px; font-weight:lighter;">Batch <?php echo $row->graduation; ?></span></h5>
                            <h6 class="font-13 grow" style="line-height:20px;"><?php echo $row->achievements; ?><br></h6>
                            <!-- <h6 class="font-13 grow" style="line-height:20px;">Batch <?php echo $row->graduation; ?><br></h6> -->
                        </div>
                        <div class="bg-blue" style="padding:10px">
                            <h5 class="font-22 white grow" style="line-height:20px;"><?php echo $row->work; ?><br></h5>
                            <h6 class="font-13 white grow" style="line-height:15px;"><?php echo $row->company; ?><br></h6><!-- 
                            <p class="font-13"><?php echo $row->year; ?></p> -->
                            <p></p>
                            <div class="bg-white grow">
                                <h2 class="font-14 italic" style="line-height:20px;"><?php echo $row->quote; ?></h2>
                            </div>
                        </div>
                         
                    </div>
                    
                </div>
                <?php endforeach; ?>
            </div>

            <hr>

            <!-- Footer -->
         <!--    <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
            </footer> -->

        </div>
        <!-- /.container -->
    
</div>

    <!-- jQuery -->

<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php echo form_close(); ?>