<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="TCPC Martus United Website">
    <meta name="keywords" content="TCPC Martus United Website, TCPC, Martus United, Martus">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Paul Kwon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Martus United | About Us</title>
    
    <!--Tab Logo-->
    <link rel="icon" type="image/png" href="../img/mu_logo.png"/>
    
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!--Navigation/Footer CSS-->
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">

    <style>
        .title
        {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .martus
        {
            font-size: 17px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .picture
        {
            max-width: 70%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .indent
        {
            text-indent: 50px;
            margin-top: 15px;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
<?php include_once("../analyticstracking.php") ?>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div id="background"class="container-fluid">
            <a class = "navbar-brand"href="/">
                <img src="../img/mu_logo.png" alt="MU Logo Nav" class ="nav_logo" height = "120px"
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
                    <li><a href="/">HOME</a></li>
                    <li class="active"><a href="../views/tcpc_aboutus.php">ABOUT US<span class="sr-only">(current)</span></a></li>
                    <li><a href="../views/tcpc_staff.php">STAFF</a></li>
                    <li><a href="../views/tcpc_resources.php">RESOURCES</a></li>
                    <li><a href="../views/tcpc_events.php">EVENTS</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content container">
        <h2 class="title">Tacoma Central Presbyterian Church MARTUS United Youth Ministry</h2>
    
        <h4 style="text-decoration: underline; text-align: center"> Witnesses Gathered to Proclaim the Resurrected Christ</h4>
        
        <img src="../img/summer_retreat.jpg" class="picture">

        <p style="letter-spacing: 1px;">
            Definition of MARTUS: Deeper through <span class="martus"> Meditation </span>, warmer through <span class="martus"> Adoration</span>, broader through <span class="martus"> Reading</span>, courage through <span class="martus"> Testifying</span>, stronger through <span class="martus">Unity</span>, and obedient through <span class="martus">Serving </span> others.
        </p>

        <div class="indent">
            <p> <span class="martus">M</span>editation through Prayer </p>
            <p> <span class="martus">A</span>dorers of God through praise/worship </p>
            <p> <span class="martus">R</span>eaders of God's word</p>
            <p> <span class="martus">T</span>estifiers of His Gospel </p>
            <p> <span class="martus">U</span>nity of God's people through fellowship </p>
            <p> <span class="martus">S</span>erving out God's will and purpose by going out and making disciples </p>
        </div>

        <p style="letter-spacing: 1px;">Martus United wants to:</p>
        <div class="hi">
            <ul>
                <li style="letter-spacing: 1px; margin-left: 65px; line-height: 200%">Equip students with the necessary tools of Discipleship (daily interaction with God through reading the word and prayer) </li>
                <li style="letter-spacing: 1px; margin-left: 65px; line-height: 200%">Help students to mature and strengthen their bonds with their family</li>
                <li style="letter-spacing: 1px; margin-left: 65px; line-height: 200%">Create a sense of community through small groups and worship gatherings</li>
                <li style="letter-spacing: 1px; margin-left: 65px; line-height: 200%">Express their love for God through Worship (praise, art, etc)</li>
                <li style="letter-spacing: 1px; margin-left: 65px; line-height: 200%">Go out into the community and be the hands and feet of God by spreading His word and serving those in need</li>
            </ul>
        </div>
    </div>
    
     <!--Footer of the Page-->
    <footer class="footer">
        <div class="container">
            <p>@2017 TCPC Martus United Youth Group | 8001 Pine St S, Lakewood, WA 98499 | <a href="mailto:tcpcmuyg@gmail.com" class = "email"> Email </a> | Instagram | Facebook</p>
        </div>
    </footer>
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