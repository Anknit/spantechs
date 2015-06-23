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
			'NewsTitle'		=>	'DumpedIntoFile',
			'NewsDetails'	=>	'DumpedIntoFile',
			'NewsType'		=>	$newsType,
			'showOnHomePage'=>	$newsHome,
			'DateOfAddition'=>	'now()',
			'NewsImagePath'	=>	'UseIDInstead'
		),
	);
	$NewsInfo		=	DB_Insert($AddNewsInfoInput);
	if($NewsInfo != 0 && $NewsInfo !== false){
		$imageFileName	=	$NewsInfo.'.png';
		//move image to directory path with $imageFileName
		if(  isset($_FILES['file']['tmp_name'])   &&   $_FILES['file']['tmp_name']!=""  ){
			
			move_uploaded_file($_FILES['file']['tmp_name'][0] , "../images/newsAndEvents/".$imageFileName);
			file_put_contents('../NewsHeadLine/'.$NewsInfo.'.txt', $newsHeadline);
			file_put_contents('../NewsDescriptions/'.$NewsInfo.'.txt', $newsDetails);
			
		}
		
		$output	=	1;
	}
	
	echo $output;
?>