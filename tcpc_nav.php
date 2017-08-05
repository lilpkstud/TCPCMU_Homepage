<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
     <!-- Slideshow CSS !-->
    <link rel="stylesheet" type="text/css" href="../css/tcpc_index.css">
    <style>
        .navbar 
        {
            height: 152px;
            background-color: #2C1855; 
        }
        .nav_logo
        {
            height: 120px;
            width: 250px;
            margin-left: 120px;
        }
        .navbar-default .navbar-nav>li>a
        {
            color: white;
        }
        .navbar ul
        {
            margin-top: 150px;
            margin-right: 150px;

        }
        .navbar li 
        {
            color: white;
            left: 50px;
            right: 50px;
            bottom: 85px;
            padding-right: 20px;
        }
        .navbar a 
        {
            color:white;
            font-size: 17px;
        }
        nav.navbar.navbar-default.navbar-fixed-top
        {
            height: 150px;
        }
        nav.navbar.navbar-default.navbar-static-top
        {
            margin-bottom: 0px;
        }
        div.container-fluid.footer
        {
            width: 100%;
            background-color: #2C1855;
            color: white;
        }
        ul.nav.nav-pills 
        {
            margin-left: 150px;
        }
        .container-fluid
        {
            padding-right: 0px;
            padding-left: 0px;
        }
        body
        {
            background-color: #A5A5A5
        }
        .content
        {
            margin-top: 200px;
        }
    </style>
</head>
<body>
   <!--Top Navigation Bar that is fixed to the top-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class = "container-fluid">
            <div class="navbar">
                <a class = "navbar-brand"href="../views/tcpc_index.php">
                    <img src="../img/mu_logo.png" alt="MU Logo Nav" class ="nav_logo">
                </a>
                <ul class = "nav navbar-nav">
                    <li role = "presentation"><a href="../views/tcpc_index.php">HOME</a></li>
                    <li role="presentation"><a href="../views/tcpc_aboutus.php">ABOUT US</a></li>
                    <li role="presentation"><a href="../views/tcpc_staff.php">STAFF</a></li>
                    <li role="presentation"><a href="../views/tcpc_resources.php">RESOURCES</a></li>
                    <li role="presentation"><a href="../views/tcpc_events.php">EVENTS</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class = "content container">
        <div class="slideshow-container">
            <div class="mySlides">
                <div class="numbertext">1 / 4</div>
                <img src="../img/mu_logo.png" style="width:100%">
                <div class="text">Image 1</div>
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 4</div>
                <img src="../img/sanfran/cloud_def.JPG" style="width:100%">
                <div class="text">Image 2</div>
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 4</div>
                <img src="../img/sanfran/cloud_fam.JPG" style="width:100%">
                <div class="text">Image 3</div>
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 4</div>
                <img src="../img/sanfran/cloud_fam2.JPG" style="width:100%">
                <div class="text">Image 4</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span> 
        </div>

        <h3>https://www.w3schools.com/howto/howto_css_fixed_menu.asp</h3>
    <p> Basic Info:
    Pastor/Teacher 
    Service Time </p>

  <p> Retreat Info </p>

  <p> Photos </p>

  <p> Sermon</p>
  <h3>https://www.w3schools.com/howto/howto_css_fixed_menu.asp</h3>
    <p> Basic Info:
    Pastor/Teacher 
    Service Time </p>

  <p> Retreat Info </p>

  <p> Photos </p>

  <p> Sermon</p>
  <h3>https://www.w3schools.com/howto/howto_css_fixed_menu.asp</h3>
    <p> Basic Info:
    Pastor/Teacher 
    Service Time </p>

  <p> Retreat Info </p>

  <p> Photos </p>

  <p> Sermon</p>
  <h3>https://www.w3schools.com/howto/howto_css_fixed_menu.asp</h3>
    <p> Basic Info:
    Pastor/Teacher 
    Service Time </p>

  <p> Retreat Info </p>

  <p> Photos </p>

  <p> Sermon</p>
    </div>

    <!--Footer of the Page-->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid footer">
            <ul class = "nav nav-pills">
                <li>@2017 TCPC Martus United Youth Group | 8001 Pine St S, Lakewood, WA 98499 |</li>
                <li>Email |</li>
                <li>Instagram Icon |</li>
                <li>Facebook Icon</li>
            </ul>
        </div>
    </nav>

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
</body>
</html>