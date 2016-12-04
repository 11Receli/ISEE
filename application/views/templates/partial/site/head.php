<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>Isee Public page</title>

<!-- jQuery Version 2.1.1 -->
<script src="<?php echo base_url(JS . 'jquery-3.1.1.min.js'); ?>"></script>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link rel="stylesheet" href="<?php echo base_url(CSS . 'font-awesome.min.css'); ?>" />

<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url(CSS . 'bootstrap.min.css'); ?>" />

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<script src="<?php echo base_url(JS . 'site/script.js'); ?>"></script>

<!-- Custom for Pages -->
<?php foreach ($css as $c): ?>
    <link rel="stylesheet" href="<?php echo base_url() . CSS . $c; ?>">
<?php endforeach; ?>
