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
			'NewsTitle'		=>	$newsHeadline,
			'NewsDetails'	=>	$newsDetails,
			'showOnHomePage'=>	$newsHome,
		),
	);
	if(isset($newsId) && $newsId != ''){
		$AddNewsInfoInput['clause']	=	'ID = '.$newsId;
		if($storeImage != 0){
			$AddNewsInfoInput['Fields']['NewsImagePath']	=	$storeImage;
		}
		$NewsInfo		=	DB_Update($AddNewsInfoInput);
	}
	else {
		$AddNewsInfoInput['Fields']['NewsType']			=	$newsType;
		$AddNewsInfoInput['Fields']['DateOfAddition']	=	'now()';
		if($storeImage != 0){
			$AddNewsInfoInput['Fields']['NewsImagePath']	=	$storeImage;
		}
		$NewsInfo		=	DB_Insert($AddNewsInfoInput);
	}

	if($NewsInfo != 0 && $NewsInfo !== false){
		if(isset($newsId) && $newsId != ''){
			$NewsInfo	=	$newsId;
		}
		$imageFileName	=	$NewsInfo.'.png';
		if($storeImage != '' && $storeImage != 0){
			//move image to directory path with $imageFileName
			if(  isset($_FILES['file']['tmp_name'])   &&   $_FILES['file']['tmp_name']!=""  ){
				move_uploaded_file($_FILES['file']['tmp_name'][0] , "../images/newsAndEvents/".$imageFileName);
			}
		}
		elseif($storeImage != '' && $storeImage == 2){
			unlink("../images/newsAndEvents/".$imageFileName);
		}
		$output	=	1;
	}
	
	echo $output;
?>