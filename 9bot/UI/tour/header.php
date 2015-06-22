<?php ?> 
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Tours</title>
    <link rel="icon" href="../../images/favicon.ico" type="image/ico" >
    <script src="../../../Common/js/jquery.min.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href='../../css/layout.css' />
    <link type="text/css" rel="stylesheet" href='../../css/slider.css' />
    <link type="text/css" rel="stylesheet" href='../../css/floatingdiv.css' />
    <link type="text/css" rel="stylesheet" href='../../css/tileNav.css' />
    <link type="text/css" rel="stylesheet" href='../../css/tourhome.css' />
    <link type="text/css" rel="stylesheet" href="../../../Common/css/hover.css" />
    <link type="text/css" rel="stylesheet" href="../../../Common/css/buttonTab.css" />
    <link type="text/css" rel="stylesheet" href='../../../Common/Cupertino/jquery-ui.min.css' />
    <link type="text/css" rel="stylesheet" href="../../../Common/css/cssForJssorSliders.css" />
    <script src="../../../Common/js/jssor.slider.mini.js" type="text/javascript"></script>
    <script src="../../js/homePageAnimation.js" type="text/javascript"></script>
</head>
<body>
    <div class="wrapper">
        <div class="header">
                <div class="logo">
                        <a href='http://www.9botitalia.com'><img class="logoImg" src="../../images/icons/ninebot.png" alt="NINEBOT"/></a>
                </div>
                <div class="menu">
                        <ul class="topMenu">
                                <li class="headerMenuItems" identifier="Home"><a href="index.php">Home</a></li>
                                <li class="headerMenuItems" identifier="Tour" onclick="pageIdentifier = 'Tour'; setSelectionOnHeaderMenu();">
                                        <a href="#" onclick='if($("#tourCatalogue").length>0)$("body").animate({scrollTop:$("#tourCatalogue")[0].scrollHeight},1000);else{location.href="./index.php#tourCatalogue";}'>Tour</a>
                                        <ul class="submenu">
                                                <li class="subMenuItems"><a href="NinebotTour.php">Ninebot Tours</a></li>
                                                <li class="subMenuItems"><a href="GolfcarTour.php">Golfcar Tours</a></li>
                                                <li class="subMenuItems"><a href="BikeTour.php">Bike Tours</a></li>
                                                <li class="subMenuItems"><a href="VespaTour.php">Vespa Tours</a></li>
                                                <li class="subMenuItems"><a href="CataniaTour.php">Catania Tours</a></li>
                                                <li class="subMenuItems"><a href="JoggingTour.php">Jogging Tours</a></li>
                                        </ul>
                                </li>
                                <li class="headerMenuItems" identifier="Gallery"><a href="gallery.php">Gallery</a></li>
                                <li class="headerMenuItems" identifier="Event"><a href="events.php">Event</a></li>
                                <li class="headerMenuItems" identifier="Contact"><a href="#Contact_us">Contact Us</a></li>
                        </ul>
                </div>
        </div>
