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
    <?php
        if(isset($_SESSION['send']))
        {
            echo "<h3 style='color: green;'>Thank you for sending us message.</h3>
            <p>One of us will get back to you via email</p>";
        } else if(isset($_SESSION['unsend']))
        {
            $email = $_SESSION['email'];
          echo "<h3 style='color: green;'>Thank you for sending us a message.</h3>
          <p>Unfortunately, the email used,<span style='color: blue'> ".$email. " </span>,seems not to be working.<br> Therefore, you wont receive a response from us.</p>"; 
        } else{
            echo "500 - Error.";
        }
        ?>
    <footer>
    <a href="index.php" class="btn btn-half">Go back</a>   
    <a href="login.php" class="btn btn-half">Login to view Safaris</a>   
    </footer>
            </center>
    </body>
</html>