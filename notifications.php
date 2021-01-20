<?php
require_once('function.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link href="Important_links/bootstrap_css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="Important_links/admin/AdminLTE.min.css" rel="stylesheet" type="text/css">

<script src="Important_links/bootstrap_js/bootstrap.min.js" type="text/javascript"></script>
<script src="Important_links/jQuery/jQuery-2.1.3.min.js"></script>
</head>
<body>
<center> 
<div class="box">
<div class="box-body" style=" overflow-x: auto;">
<table id="notifications" class="table table-bordered table-hover">
<thead>
<h2>Available Notifications:</h2>
</thead>
<tbody>
<?php
    
    $email = $_COOKIE['email'];
    
    $db = mysqli_connect('localhost', 'root', '', 'booking');
    
    $qry = "SELECT * FROM notifications WHERE email = '$email'";
    $result = mysqli_query($db, $qry);
    $result1 = mysqli_num_rows($result);
    if($result1 == 0)
    {
       echo '<tr><td colspan="1"><center>You have zero notifications</center></td></tr>'; 
    } else {
        while ($row = mysqli_fetch_assoc($result))
        {
        echo "<tr><td>{$row['notification']}</td><td>{$row['created']}</td></tr>\n";
        }
    } 
    
$random_token = mt_rand(1000, 9999);
    
$_SESSION['token'] = $random_token
?>

</tbody>
</table> 
</div>   
</div>
<footer>
<a href="safaris.php" class="btn btn-half">Go back</a>
    </footer>
</center>
</body>
</html>