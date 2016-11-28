<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url() . JS . "bootstrap.min.js"; ?>"></script>

<!-- custom for pages -->
<?php foreach ($js as $j): ?>
    <script src="<?php echo base_url() . JS . $j; ?>"></script>
<?php endforeach; ?>
