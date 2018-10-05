<!DOCTYPE html>
<html>
<head>
	<title> Coba Post Update Booking</title>
</head>
<body>
<form action="<?php echo base_url('Admin_trv/login') ;?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" id="email" name="email" class="form-control" placeholder="email">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
</body>
</html>