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
	$AddNewsInfoInput	=	array(
		'Table'		=>	'newslogging',
		'Fields'	=>	array(
			'PriorityOrder'	=>	'0',
			'NewsTitle'		=>	utf8_encode($newsHeadline),
			'NewsDetails'	=>	utf8_encode($newsDetails),
			'NewsType'		=>	$newsType,
			'showOnHomePage'=>	$newsHome,
			'DateOfAddition'=>	'now()',
			'NewsImagePath'	=>	$storeImage
		),
	);
	$NewsInfo		=	DB_Insert($AddNewsInfoInput);
	if($NewsInfo != 0 && $NewsInfo !== false){
		$imageFileName	=	$NewsInfo.'.png';
		//move image to directory path with $imageFileName
		if(  isset($_FILES['file']['tmp_name'])   &&   $_FILES['file']['tmp_name']!=""  ){
			move_uploaded_file($_FILES['file']['tmp_name'][0] , "../images/newsAndEvents/".$imageFileName);
		}
		
		$output	=	1;
	}
	
	echo $output;
?>