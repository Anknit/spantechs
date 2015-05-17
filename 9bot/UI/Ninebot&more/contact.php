<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/
?>
<?php
	require_once './header.php';
?>
	<title>Contact Us</title>
    <link href="../../css/contact.css" type="text/css" rel="stylesheet" />
    <link href="../../css/layout.css" type="text/css" rel="stylesheet" />
    <link href="../../css/style.css" type="text/css" rel="stylesheet" >
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="../../js/contact.js"></script>
		<div class="content">
			<div class="headOfficeContact">
				<div class="contactDetail">
					<div class="headtext" align="center" id="sellerAdd">
						<h3 style="text-decoration: underline; font-style: normal;">Sede Centrale</h3>
						<span>New Moving Società Cooperativa</span>
						<br />
						<span> Via di San Calisto 9 Roma, 00153 RM</span>
						<br />
						<img src="../../images/icons/phone.png" alt="contactNumber" /><span> +39 3929034927</span>
						<br />
						<img src="../../images/icons/mail.png" alt="contactNumber" /><span>Ninebot.servizioclienti@gmail.com</span>
					</div>
				</div>
			</div>
			<div style="margin: 1% 5%;width: 90%;float: left;">
				<div class="map" style="width:100%">
					<div id="allLocMap" style="width:100%;height:100%;"></div>
				</div>
			</div>
			<div class="locHeading" align="center"><h1>Nostri Negozi</h1></div>
			<div class="locationsInfo" id="containerAllLocations">
			</div>
		</div>
<?php
	require_once './footer.php';
?>