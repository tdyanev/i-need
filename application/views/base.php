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

{header}

{content}


<div class="row">
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
</div>
<div class="row">
  <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
  <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
</div>


</body>
</html>
