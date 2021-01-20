<?php
require_once('function.php');
?>

<?php
if(is_user())
{
    header('location: safaris.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="img/logo.png" type="img/png">
<title>Safari | Register</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="Website for Safari Africa">
<meta name="author" content="David Kitavi">
<meta name="keywords" content="Safari, Africa, Kenya, Natural, Positivity">
<link rel="stylesheet" href="Important_links/bootstrap_css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="Important_links/admin/AdminLTE.min.css" type="text/css">
<link href="Important_links/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    
<body class="register-page" style="background-image: url(img/africa/mountkenya1.jpg);">
<div class="row">
<div class="col-md-6" style="padding-top: 5px;">
<?php include('errors.php'); ?>  
</div>
<div class="col-md-6">
<div class="register-box">
<div class="register-logo">
<img src="img/logo.png" width="120" height="110" alt="Logo">
</div>
    
<div class="register-box-body" style="background-color: black;">
<p class="register-box-msg" style="color: white;">Register with Safari to get started </p> 
<form action="signup.php" method="post"> 
<div class="form-group has-feedback">
    <label><span style="color: grey;">Full name</span></label>
<input type="text" style="background-color: transparent; color: white;" class="form-control" name="full_name"/>
</div>
    
<div class="form-group has-feedback">
    <label><span style="color: grey;">Email</span></label>
<input type="email" style="background-color: transparent; color: white;" class="form-control" name="email"/>
</div>
 
<div class="form-group has-feedback">
    <label><span style="color: grey;">Home Country</span></label>
<input type="text" style="background-color: transparent; color: white;" class="form-control" name="country"/>
</div>
    
<div class="form-group has-feedback">
    <label><span style="color: grey;">Password</span></label>
<input type="password" style="background-color: transparent; color: white;" class="form-control" name="password_1" />
</div>
    
<div class="form-group has-feedback">
    <label><span style="color: grey;">Confirm Password</span></label>
<input type="password" style="background-color: transparent; color: white;" class="form-control" name="password_2" />
</div>
    
    <p><span style="color: white;">By registering with Safari, you agree to all the <a href="terms.php">terms </a>of our organization. Click the sign up button to continue.</span></p>
<button type="submit" class="btn btn-primary btn-block btn-flat" name="register" style="border-radius: 20px; padding: 10px 20px;">Sign up</button><br>
</form>
<center>   
    <a href="login.php" class="text-center"><br>I have an account</a>
    </center>
</div>
</div>
    </div>
    </div>

<script src="Important_links/jQuery/jQuery-2.1.3.min.js"></script>
<script src="Important_links/bootstrap_js/bootstrap.min.js" type="text/javascript"></script>
<script src="Important_links/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

<script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>
</html>