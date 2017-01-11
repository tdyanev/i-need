<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />

<title>{title}</title>

<?php echo link_tag('vendor/bootstrap/dist/css/bootstrap.min.css'); ?>
<?php echo link_tag('css/main.css'); ?>


<script type="text/javascript" src="<?php echo base_url(); ?>vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap/dist/js/bootstrap.min.js"></script>


</head>

<body>

<div class="container">
{header_goes_here}
</div>

{content}



<script src="//localhost:35729/livereload.js"></script>
</body>
</html>
