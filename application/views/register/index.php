<div class="container">

<?php $validation_errors = validation_errors();
if ($validation_errors) : ?>

<div class="alert alert-danger" role="alert">
    <?php echo $validation_errors; ?>
</div>

<?php endif; ?>


<form action="register/send" method="post" class="form-horizontal">


<div class="form-group">

    <label for="username" class="col-sm-3 control-label">{label_username}</label>

    <div class="col-sm-9">
        <input class="form-control" type="text" id="username" name="username" value="<?php echo set_value('username'); ?>" />
    </div>
</div>

<div class="form-group">

    <label for="password" class="col-sm-3 control-label">
        {label_password}
    </label>

    <div class="col-sm-9">
        <input class="form-control" type="password" id="password" name="password" />
    </div>
</div>

<div class="form-group">

    <label for="passconf" class="col-sm-3 control-label">
        {label_passconf}
    </label>

    <div class="col-sm-9">
        <input class="form-control" type="password" id="passconf" name="passconf" />
    </div>
</div>

<div class="form-group">

    <label for="email" class="col-sm-3 control-label">{label_email}</label>

    <div class="col-sm-9">
        <input class="form-control" type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" />
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-10">
        <input id="submit" class="btn btn-default" type="submit" value="{label_submit}" />
    </div>
</div>

</form>

</div>
