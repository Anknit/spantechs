<?php ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="../../images/favicon.ico" type="image/ico" >
    <script src="../../../Common/js/jquery.min.js" type="text/javascript"></script>
    <script src="../../../Common/js/setSelectionEffects.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href='../../css/layout.css' />
    <link type="text/css" rel="stylesheet" href='../../../Common/css/selectionEffects.css' />
    <link type="text/css" rel="stylesheet" href="../../../Common/css/hover.css" />
    <link type="text/css" rel="stylesheet" href='../../css/slider.css' />
    <link type="text/css" rel="stylesheet" href='../../css/floatingdiv.css' />
    <link type="text/css" rel="stylesheet" href='../../css/tileNav.css' />
    <link type="text/css" rel="stylesheet" href='../../css/tourhome.css' />
    <link type="text/css" rel="stylesheet" href='../../../Common/Cupertino/jquery-ui.min.css' />
</head>
<body>
    <div class="wrapper">
        <div class="header">
                <div class="logo">
                        <a href='../../index.html'><img class="logoImg" src="../../images/icons/ninebot.png" alt="NINEBOT"/></a>
                </div>
                <div class="menu">
                        <ul class="topMenu">
                                <li class="headerMenuItems" identifier="Home"><a href="more.php">Home</a></li>
                                <li class="headerMenuItems" identifier="Prodotti" onclick="pageIdentifier = 'Prodotti'; setSelectionOnHeaderMenu();">
                                    <a href="NinebotE.php">Prodotti</a>
                                    <ul class="submenu">
                                        <li class="subMenuItems"><a href="NinebotE.php">Ninebot E</a></li>
                                        <li class="subMenuItems"><a href="NinebotC.php">Ninebot C</a></li>
                                        <li class="subMenuItems"><a href="NinebotOne.php">Ninebot One</a></li>
                                        <li class="subMenuItems"><a href="NinebotPolice.php">Ninebot Police</a></li>
                                        <li class="subMenuItems"><a href="AltriEcoProdotti.php">Altri Eco Prodotti</a></li>
                                        <li class="subMenuItems"><a href="Accessori.php">Accessori</a></li>
                                    </ul>
                                </li>
                                <li class="headerMenuItems" identifier="Tour" onclick="pageIdentifier = 'Tour'; setSelectionOnHeaderMenu();">
                                    <a href="http://www.ninebottours.it/9bot/UI/tour/index.php#tourCatalogue">Tour</a>
                                    <ul class="submenu">
                                            <li class="subMenuItems"><a href="http://www.ninebottours.it/9bot/UI/tour/NinebotTour.php">Ninebot Tours</a></li>
                                            <li class="subMenuItems"><a href="http://www.ninebottours.it/9bot/UI/tour/GolfcarTour.php">Golfcar Tours</a></li>
                                            <li class="subMenuItems"><a href="http://www.ninebottours.it/9bot/UI/tour/BikeTour.php">Bike Tours</a></li>
                                            <li class="subMenuItems"><a href="http://www.ninebottours.it/9bot/UI/tour/VespaTour.php">Vespa Tours</a></li>
                                            <li class="subMenuItems"><a href="http://www.ninebottours.it/9bot/UI/tour/JoggingTour.php">Jogging Tours</a></li>
                                            <li class="subMenuItems"><a href="http://www.ninebottours.it/9bot/UI/tour/CataniaTour.php">Catania Tours</a></li>
                                    </ul>
                                </li>
                                <li class="headerMenuItems" identifier="Event"><a href="publicity.php">Pubblicità con Noi</a></li>
                                <li class="headerMenuItems" identifier="Consip"><a href="Consip.php">CONSIP</a></li>
                                <li class="headerMenuItems" identifier="Event"><a href="gallery.php">Galleria</a></li>
                                <li class="headerMenuItems" identifier="Event"><a href="events.php">Eventi/Notizie</a></li>
                                <li class="headerMenuItems" identifier="Contact"><a href="contact.php">Contatto e Negozi</a></li>
                        </ul>
                </div>
        </div>