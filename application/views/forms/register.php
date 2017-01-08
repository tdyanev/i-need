<div class="error"><?php echo validation_errors(); ?></div>


<?php echo form_open('register/send'); ?>

<h5>{in_user_label}</h5>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" />

<h5>Password</h5>
<input type="password" name="password" />

<h5>Password Confirm</h5>
<input type="password" name="passconf" />

<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" />

<div><input type="submit" value="Submit" /></div>

</form>
