<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/
?>
<?php

	require_once 'verifyUser.php';
	loggOutUser();
	session_destroy();
	die();
?>