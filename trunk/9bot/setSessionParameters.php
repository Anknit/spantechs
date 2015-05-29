<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/
?>
<?php
	if(isset($_GET) && $_GET['IntroDone'] == 1){
		session_start();
		$_SESSION['IntroDone']	=	1;
		echo 1;
	}
?>