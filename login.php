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
<title>Safari | Login</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="Website for Safari Africa">
<meta name="author" content="David Kitavi">
<meta name="keywords" content="Safari, Africa, Kenya, Natural, Positivity">
<link rel="stylesheet" href="Important_links/bootstrap_css/bootstrap.min.css" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<link href="Important_links/admin/AdminLTE.min.css" type="text/css" rel="stylesheet">
<link href="Important_links/skins/_all-skins.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="../../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="../../https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    </head>
<body class="skin-blue layout-top-nav" >
<div class="wrapper" >

<div class="content-wrapper" style="background-image: url(img/africa/springbok.jpg); text-align: center;">
<section class="content">
  
    
<div class="login-box">
<div class="login-logo">
<img src="img/logo.png" width="120" height="110" alt="Logo">   
</div> 
    
<p class="login-box-msg" style="color: black;">Login to get started</p>
<form method="post" action="login.php">
<?php include('errors.php'); ?>
<div class="form-group has-feedback" style="color: black;">
<input type="email" class="form-control" name="email" placeholder="Email" size="50"/>
</div>
<div class="form-group has-feedback">
<input type="password" class="form-control" name="password" placeholder="Password"/>
</div>
<br>   
<button type="submit" class="btn btn-success btn-block btn-flat" name="login" style="border-radius: 20px; padding: 10px 20px;">Sign In</button>


</form>
 <br>   
    <a href="forgot_pwd.php"><span style="background-color: white;">I forgot my password</span></a><br> <br>
    <span style="color: white;">- OR</span> - <br><br>
    <a href="signup.php" class="text-center"><span style="background-color: white;">I have no account</span></a>
</div>

</section>  
</div>  
    
</div>  
<script src="Important_links/jQuery/jQuery-2.1.3.min.js"></script>
<script src="Important_links/bootstrap_js/bootstrap.min.js" type="text/javascript"></script>
<script src="Important_links/plugins/fastclick/fastclick.min.js"></script>
<script src="Important_links/admin/app.min.js" type="text/javascript"></script>
<script src="Important_links/admin/lib.js" type="text/javascript"></script>
</body>
</html>