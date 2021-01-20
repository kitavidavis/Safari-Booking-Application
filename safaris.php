<?php
require_once('function.php');

?>

<?php
if(!isset($_SESSION['loged_in']))
{
echo"<h5 style='color: red;'>You must log in first before booking your flight.</h5>";
header("location: login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="img/logo.png" rel="icon" type="img/png">
<title>Safari | Safari Booking</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="Website for Safari Africa">
<meta name="author" content="David Kitavi">
<meta name="keywords" content="Safari, Africa, Kenya, Natural, Positivity">
<link rel="stylesheet" href="Important_links/bootstrap_css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="Important_links/admin/AdminLTE.min.css" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="Important_links/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
<style type="text/css">

.price.panel-red>.panel-heading {

color: #fff;

background-color: #D04E50;

border-color: #FF6062;

border-bottom: 1px solid #FF6062;

}	

.price.panel-red>.panel-body {

color: #fff;

background-color: #EF5A5C;

}

.price .list-group-item{ 

border-bottom:1px solid rgba(250,250,250, .5);

}

.panel.price .list-group-item:last-child {

border-bottom-right-radius: 0px;

border-bottom-left-radius: 0px;

}

.panel.price .list-group-item:first-child {

border-top-right-radius: 0px;

border-top-left-radius: 0px;

}

.price .panel-footer {

color: #fff;

border-bottom:0px;

background-color:  rgba(0,0,0, .1);

box-shadow: 0px 3px 0px rgba(0,0,0, .3);

}

.panel.price .btn{

box-shadow: 0 -1px 0px rgba(50,50,50, .2) inset;

border:0px;

}

</style>

<?php

$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';

$paypalId='kvs3944-facilitator@gmail.com';

?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="../../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="../../https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue layout-top-nav">
<div class="wrapper">
<header class="main-header">               
<nav class="navbar navbar-static-top" role="navigation">
<div class="pull-left" style="padding-top: 10px; padding-left: 10px;">
<a href="flight_booking.php" class="btn btn-success" > Book flight</a><span style="padding-left: 10px;">
    <a href="mountain_climbing.php" class="btn btn-warning">Mountain Climbing</a>  </span>
</div>
<?php
    global $email;
    $email = $_SESSION['email'];
    
    $_SESSION['email'] = $email;
    $qry = "SELECT * FROM notifications WHERE email = '$email'";
    $result = mysqli_query($db, $qry);
    $result1 = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $notification = $row['notification'];

    if(isset($_SESSION['token']))
    {
        $result1 = 0;
    }
?>   
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
  <li style="padding-left: 10px;">
                <a href="notifications.php" >
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">
                    <?php
                      $_SESSION['email'] = $email;
                      if($result1 == 0 ) 
                      {
                          echo 0; 
                      }else
                      {
                          echo $result1;
                      }
                      ?>
                    </span>
                </a>
              </li>
<?php
$email2 = $_COOKIE['email'];
    
$qry = "SELECT * FROM booking_users WHERE email = '$email'";
    
$result = mysqli_query($db, $qry);
    
$row = mysqli_fetch_assoc($result);
    
$qry2 = "SELECT * FROM images WHERE email = '$email2'";
    
$result2 = mysqli_query($db, $qry2);
    
$row2 = mysqli_fetch_assoc($result2);
    
if(mysqli_num_rows($result2) == 0)
{
    $img = 'img/is-user.png';
} else {
    $img = $row2['img'];
}

$fullname = $row['full_name'];
    
$created = $row['created'];
?>
    
    

<li class="dropdown user user-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img src="<?php echo $img; ?>" class="user-image" alt="User Image">
<span class="hidden-xs"><?php echo $fullname;?></span>   
</a>
<ul class="dropdown-menu">
<li class="user-header" id="user-header">
<img src="<?php echo $img; ?>" class="user-circle" alt="User Image"/>
<p>
<?php echo $fullname?><br><small>
    <?php echo "Member since - ". $created; ?></small>
</p>    
</li> 
    
<li class="user-body">
<div class="row">
<center>
Scheduled Safaris: <span class="label label-success"> 0</span>
</center>
    </div> <br>
<div class="row">
<center>
Completed Safaris: <span class="label label-warning"> 0</span>
    </center>
    </div>
</li>
    
<li class="user-footer">
<div class="pull-left">
<a href="edit_profile.php" class="btn btn-default btn-flat">Change Picture</a>
</div>
<div class="pull-right">
<a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
</div>   
</li>
</ul>
</li>
    </ul>
</div>

</nav>
</header>
<div class="content-wrapper">
<section class="content" style="background-image: url('img/africa/springbok.jpg')"> 
<div class="row">
<div class="col-md-12">
<div class="nav-tabs-custom">
<ul class="nav nav-tabs" id="tabs" style="background-color: lavender;">
<li class="active"><a href="#tab_1" data-toggle="tab">Maasai Mara</a></li>
<li><a href="#tab_2" data-toggle="tab">Amboseli</a></li>
<li><a href="#tab_3" data-toggle="tab">Tsavo</a></li>
<li><a href="#tab_4" data-toggle="tab">Naivasha</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane active" id="tab_1">
<div class="row">
<div class="col-md-7">

<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">

<div class="panel price panel-red">

<input type="hidden" name="business" value="<?php echo $paypalId; ?>">

<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="annual_subscription" value="Language Library">

<input type="hidden" name="subscription_number" value="1">

<input type="hidden" name="amount" value="499">

<input type="hidden" name="no_shipping" value="1">

<input type="hidden" name="currency_code" value="USD">

<input type="hidden" name="cancel_return" value="http://demo.itsolutionstuff.com/paypal/cancel.php">
<!---change the url here...--->
<input type="hidden" name="return" value="http://demo.itsolutionstuff.com/paypal/success.php">  
<!---change the url here also --->


<div class="panel-heading  text-center">

<h3>Maasai Mara Trip</h3>

</div>

<div class="panel-body text-center">

<p class="lead" style="font-size:40px"><strong>$499 / Individual</strong></p>

</div>

<ul class="list-group list-group-flush text-center">

<li class="list-group-item"><i class="icon-ok text-danger"></i> Breathtaking views</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Artefacts</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Local entertainement</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> One week trip</li>

</ul>

<div class="panel-footer">

<button class="btn btn-lg btn-block btn-success" href="#">Book Now</button>

</div>

</div>

</form>    
</div> 
<div class="col-md-5">
<h3>Trip Description:</h3>
<ul style="list-style: square;">
<li>Travel</li>  
<li>Travel</li> 
<li>Travel</li> 
<li>Travel</li> 
</ul>
</div>
</div>

</div>

<div class="tab-pane" id="tab_2">
<div class="row">
<div class="col-md-7">
<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">

<div class="panel price panel-red">

<input type="hidden" name="business" value="<?php echo $paypalId; ?>">

<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="item_name" value="It Solution Stuff">

<input type="hidden" name="item_number" value="2">

<input type="hidden" name="amount" value="299">

<input type="hidden" name="no_shipping" value="1">

<input type="hidden" name="currency_code" value="USD">

<input type="hidden" name="cancel_return" value="http://demo.itsolutionstuff.com/paypal/cancel.php">

<input type="hidden" name="return" value="http://demo.itsolutionstuff.com/paypal/success.php">  



<div class="panel-heading  text-center">

<h3>Trip to Amboseli</h3>

</div>

<div class="panel-body text-center">

<p class="lead" style="font-size:40px"><strong>$299 / Individual</strong></p>

</div>

<ul class="list-group list-group-flush text-center">

<li class="list-group-item"><i class="icon-ok text-danger"></i> Breathtaking views</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Local entertainement</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Cultural artefacts</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> One week trip</li>

</ul>

<div class="panel-footer">

<button class="btn btn-lg btn-block btn-success" href="#">Book Now</button>

</div>

</div>

</form>   
</div> 

<div class="col-md-5">
<h3>Trip Description:</h3>   
</div>
</div>

</div> 

<div class="tab-pane " id="tab_3">

<div class="row">
<div class="col-md-7">
<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">

<div class="panel price panel-red">

<input type="hidden" name="business" value="<?php echo $paypalId; ?>">

<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="item_name" value="It Solution Stuff">

<input type="hidden" name="item_number" value="2">

<input type="hidden" name="amount" value="99">

<input type="hidden" name="no_shipping" value="1">

<input type="hidden" name="currency_code" value="USD">

<input type="hidden" name="cancel_return" value="http://demo.itsolutionstuff.com/paypal/cancel.php">

<input type="hidden" name="return" value="http://demo.itsolutionstuff.com/paypal/success.php">  



<div class="panel-heading  text-center">

<h3>Tsavo National Park</h3>

</div>

<div class="panel-body text-center">

<p class="lead" style="font-size:40px"><strong>$99 / Individual</strong></p>

</div>

<ul class="list-group list-group-flush text-center">

<li class="list-group-item"><i class="icon-ok text-danger"></i> Serene views</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Classic hotels</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Artefacts</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> 2 Days trip</li>

</ul>

<div class="panel-footer">

<button class="btn btn-lg btn-block btn-success" href="#">Book now</button>

</div>

</div>

</form>    
</div>

<div class="col-md-5">
<h3>Trip description</h3>   
</div>
</div>

</div>

<div class="tab-pane " id="tab_4">

<div class="row">
<div class="col-md-7">
<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">

<div class="panel price panel-red">

<input type="hidden" name="business" value="<?php echo $paypalId; ?>">

<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="item_name" value="It Solution Stuff">

<input type="hidden" name="item_number" value="2">

<input type="hidden" name="amount" value="99">

<input type="hidden" name="no_shipping" value="1">

<input type="hidden" name="currency_code" value="USD">

<input type="hidden" name="cancel_return" value="http://demo.itsolutionstuff.com/paypal/cancel.php">

<input type="hidden" name="return" value="http://demo.itsolutionstuff.com/paypal/success.php">  



<div class="panel-heading  text-center">

<h3>Lake Naivasha National Park</h3>

</div>

<div class="panel-body text-center">

<p class="lead" style="font-size:40px"><strong>$99 / Individual</strong></p>

</div>

<ul class="list-group list-group-flush text-center">

<li class="list-group-item"><i class="icon-ok text-danger"></i> Serene views</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Classic hotels</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Artefacts</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> 2 Days trip</li>

</ul>

<div class="panel-footer">

<button class="btn btn-lg btn-block btn-success" href="#">Book now</button>

</div>

</div>

</form>    
</div>

<div class="col-md-5">
<h3>Trip description</h3>   
</div>
</div>

</div>


<div class="tab-pane " id="tab_5">

<div class="row">
<div class="col-md-7">
<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">

<div class="panel price panel-red">

<input type="hidden" name="business" value="<?php echo $paypalId; ?>">

<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="item_name" value="It Solution Stuff">

<input type="hidden" name="item_number" value="2">

<input type="hidden" name="amount" value="99">

<input type="hidden" name="no_shipping" value="1">

<input type="hidden" name="currency_code" value="USD">

<input type="hidden" name="cancel_return" value="http://demo.itsolutionstuff.com/paypal/cancel.php">

<input type="hidden" name="return" value="http://demo.itsolutionstuff.com/paypal/success.php">  



<div class="panel-heading  text-center">

<h3>Nairobi National Park</h3>

</div>

<div class="panel-body text-center">

<p class="lead" style="font-size:40px"><strong>$99 / Individual</strong></p>

</div>

<ul class="list-group list-group-flush text-center">

<li class="list-group-item"><i class="icon-ok text-danger"></i> Serene views</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Classic hotels</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Artefacts</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> 2 Days trip</li>

</ul>

<div class="panel-footer">

<button class="btn btn-lg btn-block btn-success" href="#">Book now</button>

</div>

</div>

</form>    
</div>

<div class="col-md-5">
<h3>Trip description</h3>   
</div>
</div>

</div>

<div class="tab-pane " id="tab_6">

<div class="row">
<div class="col-md-7">
<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">

<div class="panel price panel-red">

<input type="hidden" name="business" value="<?php echo $paypalId; ?>">

<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="item_name" value="It Solution Stuff">

<input type="hidden" name="item_number" value="2">

<input type="hidden" name="amount" value="99">

<input type="hidden" name="no_shipping" value="1">

<input type="hidden" name="currency_code" value="USD">

<input type="hidden" name="cancel_return" value="http://demo.itsolutionstuff.com/paypal/cancel.php">

<input type="hidden" name="return" value="http://demo.itsolutionstuff.com/paypal/success.php">  



<div class="panel-heading  text-center">

<h3>Mombasa Trip</h3>

</div>

<div class="panel-body text-center">

<p class="lead" style="font-size:40px"><strong>$99 / Individual</strong></p>

</div>

<ul class="list-group list-group-flush text-center">

<li class="list-group-item"><i class="icon-ok text-danger"></i> Serene views</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Classic hotels</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> Artefacts</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i> 2 Days trip</li>

</ul>

<div class="panel-footer">

<button class="btn btn-lg btn-block btn-success" href="#">Book now</button>

</div>

</div>

</form>    
</div>

<div class="col-md-5">
<h3>Trip description</h3>   
</div>
</div>

</div>

</div>
</div>    
</div>
</div>
</section>
</div>    
</div>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="Important_links/stripe.js"></script>
<script src="Important_links/jQuery/jQuery-2.1.3.min.js"></script>
<script src="Important_links/bootstrap_js/bootstrap.min.js" type="text/javascript"></script>
<script src="Important_links/plugins/fastclick/fastclick.min.js"></script>
<script src="Important_links/admin/app.min.js" type="text/javascript"></script>
<script src="Important_links/admin/lib.js" type="text/javascript"></script>
<script>
    function setSessions() {
      let session_val =  "<?php
            $_SESSION['email'] = $email;
            ?>";
        return session_val;
    }
</script>
</body>
</html>