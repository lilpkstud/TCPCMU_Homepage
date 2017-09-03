<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="TCPC Martus United Website">
    <meta name="keywords" content="TCPC Martus United Website, TCPC, Martus United, Martus">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Paul Kwon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Martus United | Home</title>
    
    <!--Tab Logo-->
    <link rel="icon" type="image/png" href="../img/mu_thumbnail.png"/>
    
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
    
    <!--Navigation/Footer CSS-->
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">

    <!--Media Devices-->
    <link rel="stylesheet" type="text/css" href="../css/media.css">

    <style>
        *
        {
            margin: 0;
            padding: 0;
            border: 0;
        }
       #position_left
       {
           float: left;
           display: inline-block;
           max-width: 50%;
       }
       #position_right
       {
           float: right;
           display: inline-block;
           max-width: 50%;
       }
       .event
       {
           display: inline-block;
           background-color: 
       }
       .date
       {
           padding-top: 25px;
           padding-right: 25px;
           float: left;
           display: inline-block;
       }
       .event_details
       {
           margin-left: 20px;
           background-color: 
       }
       .event_details p
       {
           color: ;
           width: 50%;
           text-align: justify;
           margin-left: 50px;
       }
    </style>

</head>
<body>
<?php include_once("analyticstracking.php") ?>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div id="background"class="container-fluid">
            <a class = "navbar-brand"href="/">
                <img src="../img/mu_thumbnail.png" alt="MU Logo Nav" class ="nav_logo" height = "120px"
            width = "250px">
            </a>
            
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar_mobile" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar_mobile">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">HOME <span class="sr-only">(current)</span></a></li>
                    <li><a href="../views/tcpc_aboutus.php">ABOUT US</a></li>
                    <li><a href="../views/tcpc_staff.php">STAFF</a></li>
                    <li><a href="../views/tcpc_resources.php">RESOURCES</a></li>
                    <li><a href="../views/tcpc_events.php">EVENTS</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class = "content container">
        <h1 style="text-align:center"> TCPC Martus United Youth Group </h1>
        <div class="slideshow-container"> 
            <div class="mySlides">
                <div class="numbertext">1 / 4</div>
                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/GMiH2ivOtF4?autoplay=1" frameborder="0" allowfullscreen></iframe>
                <div class="text">TCPC Summer Retreat 2017</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">2 / 4</div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GMiH2ivOtF4?rel=0?autoplay=0" frameborder="0" allowfullscreen></iframe>
                <div class="text">Image 2</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">3 / 4</div>
                <img src="../img/mu_logo.png" style="width:100%">
                <div class="text">Image 3</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">4 / 4</div>
                <img src="../img/sanfran/cloud_fam2.JPG" style="width:100%">
                <div class="text">Image 4</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
            </div>
        </div>
    </div>
    <div id="calendar_sermon" class="container">
        <div id ="position_left">
            <h3>Upcoming Events</h3>
            <div class="event">
                <a class="date" href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=MHNqMTk4NTh0cTNnZDBwc3FnZXZmYmFjMm0gdGNwY211eWdAbQ&tmsrc=tcpcmuyg%40gmail.com" target="_blank">
                    <span class="month">Aug</span>
                    <span class="day">18</span>
                </a>
                <div class="event_details">
                    <a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=MHNqMTk4NTh0cTNnZDBwc3FnZXZmYmFjMm0gdGNwY211eWdAbQ&tmsrc=tcpcmuyg%40gmail.com" target="_blank"> <h3>Point Defiance Zoo</h3></a>
                    <p>
                        Pastor James is treating our junior high students (7th - 9th grade) to the zoo/dinner. Others will have to pay for the whole amount.  
                    </p>
                   
                </div>
            </div>
        </div>
        <div id="position_right" class= "sermon container">     
            <h3>Sermon Notes</h3>
            <a href="#"> <h4>Being Undignified In Praise (July 30th, 2017)</h4> </a>
            <a href="#"><h4>Micro-transactions</h4></a>
            <a href="../views/tcpc_index2.php">Index2</a>
        </div>
    </div>
        
        <hr>
        <div class="event_picture container">
            <h2> Photos of Past Events </h2>
            <p><a href="https://drive.google.com/drive/folders/0B4aBssRwWNyuN0FSWnBDSmtVSFU?usp=sharing" target = "_blank"> Summer Retreat 2017</a> (Shot by Matthew Park)</p>
            <p><a href="https://drive.google.com/drive/folders/0Bzg9HiQ5Cf2SLUxxSjRBM0VGeUk" target = "_blank"> Church Picnic 2017 </a> </p>
            <p><a href= "https://drive.google.com/open?id=0B6fFMlpFXOXfQ3RLWW5mU3VoSUk" target ="_blank"> Teachers Appreciation Night 2017 </a>       (Shot by Rachael Ryu)</p>
        </div>
    </div>

    <!--Footer of the Page-->
    <footer class="footer">
        <div class="container">
            <p>@2017 TCPC Martus United Youth Group | 8001 Pine St S, Lakewood, WA 98499 | <a href="mailto:tcpcmuyg@gmail.com" class = "email"> Email </a> | Instagram | Facebook</p>
        </div>
    </footer>
<!--Script for Slideshow!-->
<script>
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>
     <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/jquery.fittext.js"></script>
    <script src="../js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/creative.js"></script>

</body>
</html>