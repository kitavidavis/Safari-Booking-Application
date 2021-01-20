<?php

session_start();
// remember to include the right database configuration here
//key things to note:
// booking is the name of the database
//booking_users is the table that keeps users record

//Author: David Kitavi.
$business_email = 'daviskitavi98@gmail.com'; // remember to change this to your preferred email username.
$booking_email = 'kitavidavis98@gmail.com'; // change this too. Deals specifically with flight bookings.
$db = mysqli_connect('localhost', 'root', '', 'booking'); // these configurations are for my local server. Ensure to change into your host's credentials.

$errors = array();

function is_user()
{
    if(isset($_SESSION['loged_in']))
    {
        return true;
    }
}

function valid_password($str){
	return preg_match('/^[a-z0-9_-]{6,18}$/', $str);
}

if(isset($_POST['login']))
{
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    if(empty($email))
    {
        array_push($errors, "Fill in your email!");
    } 
    
    if(empty($password))
    {
        array_push($errors, "Fill in your password!");
    }
    
    if(count($errors) == 0)
    {
        $pwd = md5($password);
        
        $qry = "SELECT * FROM booking_users WHERE email = '$email' AND password = '$pwd' ";
        
        $result = mysqli_query($db, $qry);
        
        if(mysqli_num_rows($result) == 1)
        {
            setcookie('email', $email);
            $_SESSION['email'] = $email;
            $_SESSION['loged_in'] = true;
            header('Location: safaris.php');
        }
        else
        {
            array_push($errors, "Invalid login credentials");
        }
    }
}

if(isset($_POST['register']))
{
    $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
    
    $email = mysqli_real_escape_string($db, $_POST['email']);
    
    $country = mysqli_real_escape_string($db, $_POST['country']);
    
    
    $pwd1 = mysqli_real_escape_string($db, $_POST['password_1']);
    
    $pwd2 = mysqli_real_escape_string($db, $_POST['password_2']);
    
    if(empty($email))
    {
        array_push($errors, "Email should not be empty.");
    } 
    
    if(empty($pwd1))
    {
        array_push($errors, "Password should not be empty.");
    }
    
    if(!valid_password($pwd1))
    {
        array_push($errors, "Your password should contain atleast one letter.");
    }
    
    
    if($pwd1 != $pwd2)
    {
        array_push($errors, "The two passwords must match.");
    }
    
    if(empty($full_name))
    {
        array_push($errors, "Name should not be empty.");
    } 
    
    if(empty($country))
    {
        array_push($errors, "Specify your country please.");
    }
    
    
    if(!empty($email))
    {
        $qry = "SELECT * FROM booking_users WHERE email = '$email'";
        $result = mysqli_query($db, $qry);
        
        if(mysqli_num_rows($result) != 0)
        {
            array_push($errors, "The email already exists");;
        }
    }
      
   if(strlen($pwd1) < 8)
    {
        array_push($errors, "Password should have a minimum of 8 characters");
    } 
    
    if(count($errors) == 0)
    {
        $notification = 'Welcome to safari Africa, your best travelling agency';
        
        $qry = "INSERT INTO notifications (notification, email) VALUES ('$notification', '$email')";
        
        $result = mysqli_query($db, $qry);
        
        if($result)
        {
        $password = md5($pwd1);
        
        $qry = "INSERT INTO booking_users (full_name, email, password, country) VALUES ('$full_name', '$email', '$password', '$country')";
        
        $result = mysqli_query($db, $qry);
        if($result)
        {
            setcookie('email', $email);
            $_SESSION['email'] = $email;
            $_SESSION['loged_in'] = true;
            header('Location: safaris.php');
        }
        else
        {
            echo "System error in creating your membership account. Please retry";
            header('Location: signup.php');
        }
        }
    }
    
}
if(isset($_POST['next']))
{
    $random_num = mt_rand(1000, 9999);
    
    $email = mysqli_real_escape_string($db, $_POST['email']);
    
    if(empty($email))
    {
        array_push($errors, "Email is empty!");
    }
    
    if(!empty($email))
    {
        $qry = "SELECT * FROM booking_users WHERE email = '$email'";
        $result = mysqli_query($db, $qry);
        
        if(mysqli_num_rows($result) != 1)
        {
            array_push($errors, "The email does not exist.");
        }
    }
    
    if(count($errors) == 0)
    {
        $to = $email;
        $subject = "Reset Password Code - Safari Africa";
        $txt = "Recently, you requested to change your password. Use this random number - " . $random_num . "- to proceed and successfully reset your password.";
        $headers = "From:".$business_email;

        $success = mail($to,$subject,$txt,$headers);
        
       if($success)
       {
           header('location: reset.php');
       }
    }
    
    if(isset($_POST['finish']))
    {
        $code = mysqli_real_escape_string($db, $_POST['code']);
        
        $pwd1 = mysqli_real_escape_string($db, $_POST['password_1']);
        
        $pwd2 = mysqli_real_escape_string($db, $_POST['password_2']);
        
        if(empty($code))
        {
            array_push($errors, "Code cannot be empty!");
        }
        
        if(empty($pwd1))
        {
            array_push($errors, "Your new password cannot be empty");
        }
        
        if(strlen($pwd1) < 8)
        {
            array_push($errors, "Password should have a minimum of 8 characters");
        } 
        
        if($pwd1 != $pwd2)
        {
            array_push($errors, "The two passwords must match.");
        }
        
        if($code != $random_num)
        {
            array_push($errors, "The code entered is incorrect");
        }
        
        if($pwd1 == $pwd2)
        {
            $pwd = md5($pwd1);
            $qry = "SELECT * FROM booking_users WHERE email = '$email' AND password = '$pwd'";
            $result = mysqli_query($db, $qry);
                
            if(mysqli_num_rows($result) == 1)
            {
                array_push($errors, "The new password should not be the old password.");
            }
        }
        
        if(count($errors) == 0)
        {
            $pwd = md5($pwd1);
            
            $qry = "UPDATE password = '$pwd' WHERE email = '$email'";
            
            $result = mysqli_query($db, $qry);
            
            if($result)
            {
                setcookie('email', $email);
                $_SESSION['loged_in'] = true;
                header("location: safari.php");
            }
        }
    }
}

if(isset($_POST['send_msg']))
{
    $name = mysqli_real_escape_string($db, $_POST['name']);
    
    $email = mysqli_real_escape_string($db, $_POST['email']);
    
    $message = mysqli_real_escape_string($db, $_POST['message']);
    
    if(empty($name))
    {
        array_push($errors, "Your name is required.");
    }
    
    if(empty($email))
    {
        array_push($errors, "Your email should not be empty");
    }
    
    if(empty($message))
    {
        array_push($errors, "Message should not be empty");
    }
    
    if(count($errors) == 0)
    {
        $qry = "INSERT INTO message (name, email, comment) VALUES ('$name', '$email', '$message')";
        $result = mysqli_query($db, $qry);
        
        if($result)
        {
            $to = $business_email;
            $subject = "Customer Message - Safari Africa";
            $txt = $message;
            $headers = "From:".$email;

            $success = mail($to,$subject,$txt,$headers);

            if($success)
            {
                $_SESSION['send'] = true;
               $to = $email;
               $subject = "Thank you for contacting us - Safari Africa";
               $txt = "Hello," . $name . "\r\n". "Thank you for contacting us.One of us will get back to you as soon as possible.";
               $headers = "From:".$business_email;

               mail($to,$subject,$txt,$headers); 

               $success = mail($to, $subject, $txt, $headers);
                if($success)
                {
                    $_SESSION['send'] = true;
                    header('location: thankyou.php');
                    
                } else {
                    $_SESSION['email'] = $email;
                    $_SESSION['unsend'] = true;
                    header('location: thankyou.php');
                }
            } else {
                  $_SESSION['email'] = $email;
                 $_SESSION['unsend'] = true;
                header('location: thankyou.php');
            }
        }
    }
}

if(isset($_POST['save_profile']))
{
    $email = $_COOKIES['email'];
    
    $email = $_POST['email'];
    
    $target = "private/images".basename($_FILES['filename']['name']);
    
    if(move_uploaded_file($_FILES['filename']['tmp_name'], $target))
    {
       $qry = "SELECT * FROM images WHERE email = '$email'";
        
        $result = mysqli_query($db, $qry);
        
        if(mysqli_num_rows($result) == 0)
        {
            $qry = "INSERT INTO images (email, img) VALUES ('$email', '$target')";
            $result = mysqli_query($db, $qry);
            
            if($result)
            {
                header('location: safaris.php');
            }
        } else
        {
            $qry = "DELETE FROM images WHERE email = '$email'";
            
            $result = mysqli_query($db, $qry);
            
            if($result)
            {
                $qry = "INSERT INTO images (email, img) VALUES ('$email', '$target')";
                
                $result = mysqli_query($db, $qry);
                
                if($result)
                {
                    header('location: safaris.php');
                }
            }
        }
    }
}

if(isset($_POST['international']))
{
    $booking_date= date('Y-m-d H:i:s');
    
    $full_name = mysqli_real_escape_string($db, $_POST['name']);
    
    $from_country = $_POST['from_country'];
    
    $class = $_POST['class'];
    
    $departure = mysqli_real_escape_string($db, $_POST['departure']);
    
    $trip = $_POST['trip'];
    
    $email = mysqli_real_escape_string($db, $_POST['email']);
    
    $to_country = $_POST['to_country'];
    
    $id_number = mysqli_real_escape_string($db, $_POST['id']);
    
    $return = mysqli_real_escape_string($db, $_POST['return']);
    
    $booking_date1 = strtotime($booking_date);
    $departure1 = strtotime($departure);
    $return1 = strtotime($return);
    
    if($booking_date1 == $departure1)
    {
        array_push($errors, "Your departure date cannot be today.");
    }
    
    if($booking_date1 == $return1)
    {
        array_push($errors, "Your return date cannot be today.");
    }
    
    if($departure1 == $return1)
    {
        array_push($errors, "Your departure and return date cannot be same.");
    }
    
    if($departure1 > $return1)
    {
        array_push($errors, "Return date should be few days after departure date");
    }
    
    if($departure1 < $booking_date1)
    {
        array_push($errors, "Departure date should not be prior to today.");
    }
    if(empty($full_name))
    {
        array_push($errors, "Enter your full names");
    }
    
     if(empty($from_country))
    {
        array_push($errors, "Enter the country where you come from");
    }
    
     if(empty($class))
    {
        array_push($errors, "Select your preffered class");
    }
    
     if(empty($departure))
    {
        array_push($errors, "Your departure date is empty");
    }
    
     if(empty($trip))
    {
        array_push($errors, "Select your preffered trip type");
    }
    
     if(empty($email))
    {
        array_push($errors, "Enter your email");
    }
    
     if(empty($to_country))
    {
        array_push($errors, "Enter your destination country");
    }
    
     if(empty($id_number))
    {
        array_push($errors, "Your ID/passport number is empty");
    }
    
     if(empty($return))
    {
        array_push($errors, "Enter your return date");
    }
    
    if(count($errors) == 0)
    {
        $qry = "INSERT INTO flight_booking_international(full_name, from_country, class, departure, trip, email, to_country, passport_number, end_date, booking_date) VALUES ('$full_name', '$from_country', '$class', '$departure', '$trip', '$email', '$to_country', '$id_number', '$return', '$booking_date')";
        
        $result = mysqli_query($db, $qry);
        
        if($result)
        {
           $to = $booking_email;
           $subject = "New Flight booking order - Safari Africa";
           $txt = "
                  Hello admin,
                  
                  Use these credentials to book the flight for your customer,
                  
                  Full Name = $fullname.
                  From-Country = $from_country.
                  To-Country = $to_country.
                  Class = $class.
                  Departure date = $departure.
                  Type of trip = $trip.
                  Email = $email.
                  ID or Passport number = $id_number.
                  Return date = $return.
                  Date when this was booked = $booking_date.
                  
                  
                   ";
           $headers = "From:".$business_email;

          $success =  mail($to,$subject,$txt,$headers);  
            
            if($success)
            {
                 $to = $email;
                 $subject = "Flight Booking Report - Safari Africa";
                 $txt = "
                 Hello.

                 Your flight booking is been processed.

                 The following credentials  are being used as provided.

                 Full Name = $fullname.
                  From-Country = $from_country.
                  To-Country = $to_country.
                  Class = $class.
                  Departure date = $departure.
                  Type of trip = $trip.
                  Email = $email.
                  ID or Passport number = $id_number.
                  Return date = $return.
                  Date when this was booked = $booking_date.
                  
                  For any modification or clarification, please contact the admin via. $booking_email.
                  
                  Thank you and keep it Safari Africa.
                     .";
                 $headers = "From:".$business_email;

          $success = mail($to,$subject,$txt,$headers); 
                
                if($success)
                {
                    echo "<h3 style='color: green;'>Your flight has been booked successfully.</h3>";
                    header("location: safari.php");
                }
            }
        }
    }
}

if(isset($_POST['domestic']))
{
    $booking_date= date('Y-m-d H:i:s');
    
    $full_name = mysqli_real_escape_string($db, $_POST['name']);
    
    $from_city = mysqli_real_escape_string($db, $_POST['from_city']);
    
    $class = $_POST['class'];
    
    $departure = mysqli_real_escape_string($db, $_POST['departure']);
    
    $trip = $_POST['trip'];
    
    $email = mysqli_real_escape_string($db, $_POST['email']);
    
    $to_city = mysqli_real_escape_string($db, $_POST['from_city']);
    
    $id_number = mysqli_real_escape_string($db, $_POST['id']);
    
    $return = mysqli_real_escape_string($db, $_POST['return']);
    
    $booking_date1 = strtotime($booking_date);
    $departure1 = strtotime($departure);
    $return1 = strtotime($return);
    
    if($booking_date1 == $departure1)
    {
        array_push($errors, "Your departure date cannot be today.");
    }
    
    if($booking_date1 == $return1)
    {
        array_push($errors, "Your return date cannot be today.");
    }
    
    
    if($departure1 > $return1)
    {
        array_push($errors, "Return date should be few days or hours after departure date");
    }
    
    if($departure1 < $booking_date1)
    {
        array_push($errors, "Departure date should not be prior to today.");
    }
    if(empty($full_name))
    {
        array_push($errors, "Enter your full names");
    }
    
     if(empty($from_city))
    {
        array_push($errors, "Enter the city where you come from");
    }
    
     if(empty($class))
    {
        array_push($errors, "Select your preffered class");
    }
    
     if(empty($departure))
    {
        array_push($errors, "Your departure date is empty");
    }
    
     if(empty($trip))
    {
        array_push($errors, "Select your preffered trip type");
    }
    
     if(empty($email))
    {
        array_push($errors, "Enter your email");
    }
    
     if(empty($to_city))
    {
        array_push($errors, "Enter your destination city");
    }
    
     if(empty($id_number))
    {
        array_push($errors, "Your ID/passport number is empty");
    }
    
     if(empty($return))
    {
        array_push($errors, "Enter your return date");
    }
    
    if(count($errors) == 0)
    {
        $qry = "INSERT INTO flight_booking_domestic(full_name, from_city, class, departure, trip, email, to_city, passport_number, End_date, booking_date) VALUES ('$full_name', '$from_city', '$class', '$departure', '$trip', '$email', '$to_city', '$id_number', '$return', '$booking_date')";
        
        $result = mysqli_query($db, $qry);
        
        if($result)
        {
           $to = $booking_email;
           $subject = "New Flight booking order - Safari Africa";
           $txt = "
                  Hello admin,
                  
                  Use these credentials to book the flight for your customer,
                  
                  Full Name = $fullname.
                  From-Country = $from_city.
                  To-Country = $to_city.
                  Class = $class.
                  Departure date = $departure.
                  Type of trip = $trip.
                  Email = $email.
                  ID or Passport number = $id_number.
                  Return date = $return.
                  Date when this was booked = $booking_date.
                  
                  
                   ";
           $headers = "From:".$business_email;

          $success =  mail($to,$subject,$txt,$headers);  
            
            if($success)
            {
                 $to = $email;
                 $subject = "Flight Booking Report - Safari Africa";
                 $txt = "
                 Hello.

                 Your flight booking is been processed.

                 The following credentials  are being used as provided.

                 Full Name = $fullname.
                  From-Country = $from_city.
                  To-Country = $to_city.
                  Class = $class.
                  Departure date = $departure.
                  Type of trip = $trip.
                  Email = $email.
                  ID or Passport number = $id_number.
                  Return date = $return.
                  Date when this was booked = $booking_date.
                  
                  For any modification or clarification, please contact the admin via. $booking_email.
                  
                  Thank you and keep it Safari Africa.
                     .";
                 $headers = "From:".$business_email;

          $success = mail($to,$subject,$txt,$headers); 
                
                if($success)
                {
                    echo "<h3 style='color: green;'>Your flight has been booked successfully.</h3>";
                    header("location: safari.php");
                }
            }
        }
    }
}
?>