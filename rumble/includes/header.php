<?php include 'config.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>

    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <script src="https://kit.fontawesome.com/a2b06d002f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>


    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-3.0.0.js"></script>
    <link rel="stylesheet" href="css/rumble_blueberry.css">
    <style>
          * {
            margin: 0;
            border: 0;
            padding: 0;
        }

        .blueberry {
            max-width: 940px;
        }

        
    </style>

</head>

<body>
    <div id="wrapper">
        <header>

                <a href="index.php" title="Rumble Interiors">
                    <img src="images/rumble.jpg" title="Logo" alt="logo"></a>

            <ul id="social">

                <li><a href="https://www.facebook.com/profile.php?id=693268084366966&ref=br_rs"><img
                            src="images/fb.jpeg" alt="facebook" title="Visit our Facebook page"></a></li>

                <li><a href="https://www.instagram.com/rumbleinteriors/"><img src="images/ig.jpeg" alt="instagram"
                            title="Visit our Instagram page"></a></li>

                <li><a href="https://www.pinterest.com/rumbleinteriors/?eq=rumble%20in&etslf=14357"><img
                            src="images/pin.jpeg" title="Visit our Pinterest Page"></a></li>
            </ul>

            <nav id="cssmenu"> 
                <ul>
                    <li><a href="index.php" title="Rumble Homepage">Home</a></li>
                    <li><a href="about.php" title="About Rumble Interiors">About</a></li>
                    <li><a href="gallery.php" title="Visit our Gallery">Gallery</a></li>
                    <li><a href="consultation.php" title="Our Services">Services</a></li>
                    <li><a href="form.php" title="Book your Consultation">Book Now</a></li>
                </ul>
            </nav>
            
            <h2 class="pageID">Hello, and welcome to Rumble Interior's <?=$PageID?> page</h2>