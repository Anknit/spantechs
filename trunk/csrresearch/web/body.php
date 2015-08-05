<?php
if(isset($_GET)){
	if(isset($_GET['objectives'])){
		include_once 'objectives.html';
	}
	else if(isset($_GET['pillars'])){
		include_once 'pillars.html';
	}
	else if(isset($_GET['economicalpillar'])){
		include_once 'economicalpillar.html';
	}
	else if(isset($_GET['socialpillar'])){
		include_once 'socialpillar.html';
	}
	else if(isset($_GET['environmentalpillar'])){
		include_once 'environmentalpillar.html';
	}
	else if(isset($_GET['governing'])){
		include_once 'governing.html';
	}
	else if(isset($_GET['gallery'])){
		include_once 'gallery.html';
	}
	else if(isset($_GET['sponsorship'])){
		include_once 'sponsorship.html';
	}
	else if(isset($_GET['resourcepersons'])){
		include_once 'resourcepersons.html';
	}
	else if(isset($_GET['contactus'])){
		include_once 'contactus.html';
	}
	else {
		include_once 'index1.html';
	}
}
else {
	include_once 'index1.html';
}
?>