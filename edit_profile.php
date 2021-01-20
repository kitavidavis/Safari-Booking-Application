<?php
require_once('function.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="../images/logo.png" type="image/png" rel="icon">
<title>Safari Africa </title>
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
<body class="skin-blue layout-top-nav">
<div class="wrapper">


<div class="content-wrapper">
<section class="content">
<div class="login-box">

<form method="post" action="edit_profile.php" enctype="multipart/form-data">
<?php include('errors.php'); ?>
<?php
    $email = $_SESSION['email'];
?>
<input type="hidden" name="email" value="<?php echo $email; ?>">
<div class="form-group has-feedback">
<input type="file" name="filename" max="5000000" required />
</div>
    <input type="submit" name="save_profile" value="Finish">
</form>

    </div>
</section>
</div>
    
</div> 

<script src="../Important_links/jQuery/jQuery-2.1.3.min.js"></script>
<script src="../Important_links/bootstrap_js/bootstrap.min.js" type="text/javascript"></script>
<script src="../Important_links/plugins/fastclick/fastclick.min.js"></script>

<script src="../Important_links/admin/app.min.js" type="text/javascript"></script>
<script src="../Important_links/admin/lib.js" type="text/javascript"></script>
<script type="text/javascript">
function logout() {
alert("Do you want to logout? You will lose all the unsaved changes.");
}
</script>
</body>
</html>