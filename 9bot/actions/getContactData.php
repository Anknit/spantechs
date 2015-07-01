<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/
?>
<?php
	require_once __DIR__.'./../Db.php';
	require_once __DIR__.'./../definitions.php';
	require_once __DIR__.'./../../Common/php/commonfunctions.php';
	require_once __DIR__.'./DbDataOperations.php';
	extract($_GET);
	$output	=	getInfoFrom('contactData', 'getResellersInfo', '', '', true);
	if(!$output)
		$output = 0;
	
	echo $output;
?>