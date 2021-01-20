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
<link href="img/logo.png" type="img/icon" rel="icon">
<title>Safari | Index</title>
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
<link rel="stylesheet" href="Important_links/style.css" type="text/css">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    
<style>
    html, body
    {
        height: 100%;
    }
    
    .service-paragraph
    {
        color: white;
    }
    
    .service-link
    {
        color: yellow;
    }
    #popup_this {
    top: 10%;
    left: 80%;
    text-align:center;
    margin-top: -25px;
    margin-left: -50px;
    position: fixed;
    background: black;
    padding: 10px;
    color: white;
    width: 50%;
}
.b-close {
    position: absolute;
    right: 0;
    top: 0;
    cursor: pointer;
    color: #fff;
    background: #ff0000;
    padding: 5px 10px;
}    
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    
<svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="../../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="../../https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<body class="skin-blue layout-top-nav">
<!----disable popup   
<div id="popup_this">
    <span class="button b-close">
        <span>X</span>
    </span>
    <h3><img src="img/logo.png" height="50"> </h3>
    <p>Hey! We are happy to see you at Safari Africa. Check our safari's schedule <a href="safaris.php"><b><i>Here</i></b></a> </p>
</div>
----->
    
<div class="wrapper">

<header class="main-header">               
<nav class="navbar navbar-static-top">
<div class="container-fluid">
<div class="navbar-header">
<img src="img/logo.png" height="50" width="100" alt="Logo">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
<i class="fa fa-bars"></i>
</button>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="navbar-collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="#home">Home <span class="sr-only">(current)</span></a></li>
<li><a href="#aboutus">About Us</a></li>
<li><a href="#services">Safaris and services</a></li>
<li><a href="#books">African Books</a></li>
<li><a href="#contact">Contact Us</a></li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li><a href="login.php" class="btn btn-md bg-navy margin" style="border-radius: 20px; padding: 10px 20px;" >Login</a></li>
    <li><a href="signup.php" class="btn btn-md bg-navy margin" style="border-radius: 20px; padding: 10px 20px;" >Sign Up</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
</header>
<div class="content-wrapper">
<section class="content" >
<section id="home">
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
<!-- Loading Screen -->
<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
</div>
<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
<h2>The serenity and greatness of Africa.</h2>
<div style="background-color:#d3890e;">
<img data-u="image" style="opacity:0.8;" data-src="img/africa/longonot.jpg" />
<div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:40px;width:800px;height:300px;position:absolute;">
<div data-to="50% 50%" data-t="0" style="left:50px;top:520px;width:400px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Africa</div>
<div data-to="50% 50%" data-t="1" style="left:50px;top:540px;width:400px;height:100px;position:absolute;opacity:0.5;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Africa</div>
<div data-to="50% 50%" data-t="2" style="left:50px;top:560px;width:400px;height:100px;position:absolute;opacity:0.25;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Africa</div>
<div data-to="50% 50%" data-t="3" style="left:50px;top:580px;width:400px;height:100px;position:absolute;opacity:0.125;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Africa</div>
<div data-to="50% 50%" data-t="4" style="left:50px;top:600px;width:400px;height:100px;position:absolute;opacity:0.06;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Africa</div>
<div data-to="50% 50%" data-t="5" style="left:50px;top:710px;width:700px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;"></div>
</div>
</div>
    
<div style="background-color:#d3890e;">
<img data-u="image" style="opacity:0.8;" data-src="img/africa/mountkenya.jpg" />
<div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:40px;width:800px;height:300px;position:absolute;">
<div data-to="50% 50%" data-t="0" style="left:50px;top:520px;width:400px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Mount Kenya</div>
<div data-to="50% 50%" data-t="1" style="left:50px;top:540px;width:400px;height:100px;position:absolute;opacity:0.5;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Mount Kenya</div>
<div data-to="50% 50%" data-t="2" style="left:50px;top:560px;width:400px;height:100px;position:absolute;opacity:0.25;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Mount Kenya</div>
<div data-to="50% 50%" data-t="3" style="left:50px;top:580px;width:400px;height:100px;position:absolute;opacity:0.125;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Mount Kenya</div>
<div data-to="50% 50%" data-t="4" style="left:50px;top:600px;width:400px;height:100px;position:absolute;opacity:0.06;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Mount Kenya</div>
<div data-to="50% 50%" data-t="5" style="left:50px;top:710px;width:700px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;"></div>
</div>
</div>
<div>
<img data-u="image" data-src="img/africa/maasaimara.jpg" />
<div data-ts="flat" data-p="540" data-po="40% 50%" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
<div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:350px;top:360px;width:900px;height:500px;position:absolute;">
<svg viewbox="0 0 800 60" data-to="50% 50%" width="800" height="60" data-t="7" style="left:0px;top:-70px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:700;letter-spacing:0.05em;overflow:visible;">
    <text fill="#454447" stroke="#ff9500" stroke-width="2" text-anchor="middle" x="400" y="60">NATURAL
    </text>
</svg>
<div data-to="50% 50%" data-t="8" style="filter:url('#jssor_1_flt_1');left:200px;top:0px;width:600px;height:60px;position:absolute;opacity:0;color:#C49D8F;font-family:Roboto Condensed, sans-serif;font-size:48px;line-height:1.2;letter-spacing:0.1em;text-align:center;">and</div>
<svg viewbox="0 0 800 100" width="800" height="100" data-t="9" style="left:40px;top:250px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:100px;font-weight:900;letter-spacing:0.5em;overflow:visible;">
    <text fill="rgba(255,255,255,0.7)" stroke="#ff9500" text-anchor="middle" x="400" y="100">FUN
    </text>
</svg>
</div>
</div>
</div>
    
<div style="background-color:#d3890e;">
<img data-u="image" style="opacity:0.8;" data-src="img/africa/Naivasha.jpg" />
<div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:40px;width:800px;height:300px;position:absolute;">
<div data-to="50% 50%" data-t="0" style="left:50px;top:520px;width:400px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Naivasha</div>
<div data-to="50% 50%" data-t="1" style="left:50px;top:540px;width:400px;height:100px;position:absolute;opacity:0.5;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Naivasha</div>
<div data-to="50% 50%" data-t="2" style="left:50px;top:560px;width:400px;height:100px;position:absolute;opacity:0.25;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Naivasha</div>
<div data-to="50% 50%" data-t="3" style="left:50px;top:580px;width:400px;height:100px;position:absolute;opacity:0.125;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Naivasha</div>
<div data-to="50% 50%" data-t="4" style="left:50px;top:600px;width:400px;height:100px;position:absolute;opacity:0.06;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Naivasha</div>
<div data-to="50% 50%" data-t="5" style="left:50px;top:710px;width:700px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">Cool</div>
</div>
</div>
<div style="background-color:#000000;">
<img data-u="image" style="opacity:0.8;" data-src="img/africa/diani2.jpg" />
<div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
<svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3" style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
<g mask="url(#jssor_1_msk_3)">
    <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20" d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10" style="position:absolute;overflow:visible;"></path>
</g>
</svg>
<svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11" style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;overflow:visible;">
<text fill="#fafbfc" text-anchor="middle" x="400" y="72">AWESOME
</text>
</svg>
<svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12" style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
<text fill="#fafbfc" text-anchor="middle" x="400" y="72">BEACHES
</text>
</svg>
</div>
</div>
<div>
<img data-u="image" data-src="img/africa/naturalAfrica.jpg" />
<div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
<div data-to="50% 50%" data-t="13" style="left:100px;top:-20px;width:800px;height:200px;position:absolute;opacity:0;">
<div style="left:94px;top:35px;width:480px;height:90px;position:absolute;color:rgba(60,217,205,0.8);font-family:'Roboto Condensed',sans-serif;font-size:72px;line-height:1.2;">Natural</div>
<div style="left:307px;top:115px;width:400px;height:50px;position:absolute;color:rgba(60,217,205,0.8);font-family:'Roboto Condensed',sans-serif;font-size:42px;line-height:1.1;text-align:center;background-color:rgba(72,77,76,0.5);">& Inspiring</div>
</div>
</div>
</div>
<div>
<img data-u="image" data-src="img/africa/africa.jpg" />
<div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
<div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0.9;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">Africa<br />Has a long history.</div>
<img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:157px;position:absolute;opacity:0;max-width:344px;" data-src="" />
<img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="img/logo.png" />
</div>
</div>
</div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
<!-- Bullet Navigator -->
<div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
<div data-u="prototype" class="i" style="width:12px;height:12px;">
<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
<circle class="b" cx="8000" cy="8000" r="5800"></circle>
</svg>
</div>
</div>
<!-- Arrow Navigator -->
<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
</svg>
</div>
<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
</svg>
</div>
</div>   
</section>
    
<section id="aboutus" >
<div class="container">
<div class="row">
<div class="col-md-6">
<h2>About Us</h2>
<div class="aboutus-content">
<p>Our company is established in Kenya and is one of the leading personal guiding companies in the country. We are set up to provide a very personal service. You will be dealing directly with the people who benefit directly from your visit. You won't get closer than that.</p>   
</div>
</div>  
<div class="col-md-6">
<p>Memorable safaris?</p>
<div class="progress">
                  <div class="progress-bar" style="width: 100%;">100%</div>
              </div>
<p>Affordability and quality?</p>
<div class="progress">
                  <div class="progress-bar" style="width: 100%;">100%</div>
              </div>
<p>Client's support?</p>
<div class="progress">
                  <div class="progress-bar" style="width: 100%;">100%</div>
              </div>
</div> 
</div>    
</div>    
</section>
    
<section id="services" style="background-image: url('img/africa/bg1.jpg')">
<div class="container">
<h2>Our Services</h2> 
<div class="row services">
            <div class="col-md-3 text-center">
            <div class="icon1">
                <img src="img/flight.png" class="icon"/>
                </div>
                <h3>Flight booking</h3>
                <p class="service-paragraph"><span class="service-paragraph">Book both domestic and international flights with ease. <a href="flight_booking.php"><span class="service-link">Book a flight</span></a></span> </p>
            </div>
            
            <div class="col-md-3 text-center">
            <div class="icon2">
                <img src="img/index1.jpg" class="icon" />
                </div>
                <h3>Safaris and Touring</h3>
                <p class="service-paragraph"><span class="service-paragraph">Have fun and a taste of Africa's natural habitat. <a href="safaris.php"><span class="service-link">Book and view safaris</span></a></span> </p>
            </div>
            
            <div class="col-md-3 text-center">
            <div class="icon2">
                <img src="img/index2.jpg" class="icon"/>
                </div>
                <h3>Mountain climbing</h3>
                <p class="service-paragraph"><span class="service-paragraph">Go for an hyke on mount Kenya and experience a breathtaking moment. <a href="mountain_climbing.php"><span class="service-link">Book here</span></a></span> </p>
            </div>
            
            <div class="col-md-3 text-center">
            <div class="icon2">
                <img src="img/index3.png" class="icon"/>
                </div>
                <h3>Trip diaries</h3>
                <p><span class="service-paragraph">See which Safaris have been the most remarkable and plan yourself for the next. </span><a href="diaries.php"><span class="service-link">View diaries</span></a> </p>
            </div>
        </div>

</div>   
</section>

<section id="books">
<div class="container">
<h2>Sample Books out of Africa</h2> 
<div class="row books" style="background-color: lavender;">
<div class="col-md-3 text-center" style="color: black;">
<div class="icon1">
<img src="img/books/makingafrica.jpg" class="book"/>
</div>
<h5>Making Africa</h5>
</div>

<div class="col-md-3 text-center" style="color: black;">
<div class="icon2">
<img src="img/books/everyday--.jpg" class="book" />
</div>
<h5>Everyday Africa</h5>

</div>

<div class="col-md-3 text-center" style="color: black;">
<div class="icon2">
<img src="img/books/luxe--.jpg" class="book"/>
</div>
<h5>Luxe Noir</h5>
</div>

<div class="col-md-3 text-center" style="color: black;">
<div class="icon2">
<img src="img/books/family--.jpg" class="book"/>
</div>
<h5>The family album of wild Africa</h5>
</div>
</div>
</div>   
</section>


<section id="contact" style="background-image: url('img/africa/maasai.jpg')">
   <div class="container">
       <center>
        <h2 style="color: white;">Get In Touch</h2>
            <form class="contact-form" action="index.php" method="post" style="width: 60%">
                <?php include('errors.php'); ?>
            <div class="form-group has-feedback">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                <textarea class="form-control" name="message" rows="4" placeholder="Message"></textarea>
                </div>
                <button type="submit" name="send_msg" class="btn btn-primary">Send</button>
            </form>
       </center>
        </div>    
</section>
</section>
    
<footer class="main-footer">
<div class="row">
<div class="col-md-3">
<h4>Links</h4>
<ul class="links">
<li><a href="terms.php" class="btn btn-half">Terms</a> </li> 
<li><a href="privacy.php" class="btn btn-half">Privacy</a> </li>
<li><a href="diaries.php" class="btn btn-half">Diaries</a> </li>
</ul>
</div>
<div class="col-md-3">
<h4>Payment Methods</h4> 
<ul class="payment">
<li><a href="#" class="btn btn-half">Mpesa</a> </li> 
<li><a href="#" class="btn btn-half">PesaLimk</a> </li> 
<li><a href="#" class="btn btn-half">Paypall and stripe</a> 
</ul>
</div>
<div class="col-md-3">
<h4>Get Social</h4>
<ul class="follow">
<li><a href="#" class="btn btn-half"><i class="fa fa-facebook"></i> </a></li> <li><a href="#" class="btn btn-half"><i class="fa fa-twitter"></i> </a></li> 
<li><a href="#" class="btn btn-half"><i class="fa fa-linkedin"></i> </a></li>
</ul>
</div>
<div class="col-md-3">
<h4>Contact Details</h4>
    <ul>
    <li><b> Address:</b> <!---Include here---></li><br>
    <li><b>Phone:</b><!---Include here--->  </li><br>
    <li><b>Email:</b><!---Include here---></li>
    </ul>
    </div>
</div>
</footer>
</div>  


</div>  
<script src="Important_links/jQuery/jQuery-2.1.3.min.js"></script>
<script src="Important_links/bpopup/jquery.bpopup.min.js"></script>
<script src="Important_links/bootstrap_js/bootstrap.min.js" type="text/javascript"></script>
<script src="Important_links/plugins/smooth-scroll.js"></script>
<script src="Important_links/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
<script src="Important_links/plugins/fastclick/fastclick.min.js"></script>
<script src="Important_links/admin/app.min.js" type="text/javascript"></script>
<script src="Important_links/admin/lib.js" type="text/javascript"></script>
    
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script>
    
<script type="text/javascript">
    $( document ).ready(function() {
    $('#popup_this').bPopup();
});
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 20);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    
<script type="text/javascript">jssor_1_slider_init();
    </script>
</body>
</html>