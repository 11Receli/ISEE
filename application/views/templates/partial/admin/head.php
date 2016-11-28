<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ISEE</title>

<!-- CSS -->
<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url() . CSS . "bootstrap.min.css"; ?>" />

<!-- Roboto Font
<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,100,300,500" rel="stylesheet" type="text/css"> -->
<link href="<?php echo base_url() . CSS . "font-awesome.min.css"; ?>" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo base_url() . IMG . "icon.ico"; ?>" type="image/x-icon" />

<!-- jQuery Version 2.1.1 -->
<script src="<?php echo base_url() . JS . "jquery-2.1.1.min.js"; ?>"></script>

<!-- Custom for Pages -->
<?php foreach ($css as $c): ?>
    <link rel="stylesheet" href="<?php echo base_url() . CSS . $c; ?>">
<?php endforeach; ?>
<?php if(isset($plugin)): ?>
	<?php foreach ($plugin as $p): ?>
		<?php if($p['type'] != 'js') : ?>
	    	<link rel="stylesheet" href="<?php echo base_url() . PLUGINS . $p['path']; ?>">
	    <?php else: ?>
			<script src="<?php echo base_url() . PLUGINS . "list.min.js"; ?>"></script>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>

