
  <div class="container">

<form class="login-form" action="forgot.php" method="POST">
  <div class="login-wrap">
    <p class="login-img"><i class="icon_lock_alt"></i></p>
    <div class="input-group">
      <span class="input-group-addon"><i class="icon_profile"></i></span>
      <input type="text" class="form-control" placeholder="Your Username" name="uname" required autocomplete=off>
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="icon_profile"></i></span>
      <input type="email" class="form-control" placeholder="Your Email" name="email" required>
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="icon_key_alt"></i></span>
      <input type="password" class="form-control" placeholder="New Password" name="pass1" required>
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="icon_key_alt"></i></span>
      <input type="password" class="form-control" placeholder="Confirm New Password" name="pass2" required>
    </div>
   
    <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Forgot</button>
  </div>
</form>
