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
	$GetContactInfoInput	=	array(
		'Table'		=>	'resellersinfo',
		'Fields'	=>	'*'
	);
	$ContactInfo		=	DB_Read($GetContactInfoInput, 'ASSOC', 'JSON');
	if($ContactInfo != '0' && $ContactInfo !== false){
		$output	=	$ContactInfo;
	}
	
	echo $output;
?>