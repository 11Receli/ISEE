

<link rel="stylesheet" href="<?php echo base_url(CSS . 'round-about.css'); ?>" />
<?php echo form_open(); ?>
<div class="achievers">

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message-achievers">
                     <div class="col-lg-8">
                        <h1 class="page-header">DYCIan Achievers</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>

    <div class="container">

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <img class="img-header img-circle img-responsive circle_120 float_left" src="<?php echo base_url(IMG . 'CCS.jpg'); ?>" alt="">
                <h2 class="bottom-line margin-top_85">College of Computer Studies</h2>
            </div>

            <?php foreach($students as $row): ?>
            <div class="col-lg-4 col-sm-12 text-center bottom-space ">
                <img class="img-circle img-responsive img-center circle" src="<?php echo base_url($row->image); ?>" alt="">
                
                <h3><?php echo $row->name; ?><br></h3>
                <div class="bg-blue">
                    <span class="font-18 white"><?php echo $row->course; ?><br></span>
                    <span class="font-14"><?php echo $row->achievements; ?><br></span>
                    <p class="font-13"><?php echo $row->year; ?></p>
                    <div class="bg-white">
                        <p class="italic"><?php echo $row->quote; ?></p>
                    </div>
                </div>
                
            </div>
            <?php endforeach; ?>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->

<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php echo form_close(); ?>