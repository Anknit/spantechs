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
	extract($_GET);
	$output	=	0;
	$DeleteNewsInfoInput	=	array(
		'Table'		=>	'newslogging',
		'clause'	=>	'ID = '.$newsID
	);
	$NewsInfo		=	DB_Delete($DeleteNewsInfoInput);
	if($NewsInfo == true){
		unlink('../images/newsAndEvents/'.$newsID.'.png');
		$output	=	1;
	}
	
	echo $output;
?>