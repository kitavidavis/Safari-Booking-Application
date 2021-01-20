<?php
require_once('function.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="img/logo.png" type="img/png">
<title>Safari | Forgot password redirect</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
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

<div class="content-wrapper">
<section class="content">
  
    
<div class="login-box">
<div class="login-logo">
<img src="----" width="120" height="110" alt="Logo">   
</div> 
    
<p class="login-box-msg">Use the code sent to your email.</p>
<form method="post" action="reset.php">
<?php include('errors.php'); ?>
<div class="form-group has-feedback" style="color: black;">
<input type="text" class="form-control" name="code" placeholder="Code" size="50"/>
</div>
<div class="form-group has-feedback" style="color: black;">
<input type="password" class="form-control" name="password_1" placeholder="Your new password" size="50"/>
</div>
<div class="form-group has-feedback" style="color: black;">
<input type="password" class="form-control" name="password_2" placeholder="Confirm Password" size="50"/>
</div>
<br>   
<div class="row">
<div class="col-xs-8">  
</div> 
<div class="col-xs-4">
<button type="submit" name="finish" class="btn btn-primary">Finish</button>
</div>
</div>


</form>
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