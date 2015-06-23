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
	$GetNewsInfoInput	=	array(
		'Table'		=>	'newslogging',
		'Fields'	=>	'*',
	);
	switch($Page){
		case 1:	//Home
			$GetNewsInfoInput['clause']	=	'showOnHomePage = 1';
			$GetNewsInfoInput['order']	=	'ID DESC';
		break;
		case 2:	//Ninebot&more
			$GetNewsInfoInput['clause']	=	'NewsType = '.NineBotNews;
			$GetNewsInfoInput['order']	=	'ID DESC';
		break;
		case 3:	//Tour
			$GetNewsInfoInput['clause']	=	'NewsType = '.TourNews;
			$GetNewsInfoInput['order']	=	'ID DESC';
		break;
	}
	$NewsInfo		=	DB_Read($GetNewsInfoInput, 'ASSOC');
	if($NewsInfo != 0 && $NewsInfo !== false){
		$NewsDataArray	=	array();
		for($i = 0; $i < count($NewsInfo); $i++){
			$rowData		=	$NewsInfo[$i];
			$HeadLine		=	utf8_encode(file_get_contents('../NewsHeadLine/'.$rowData['ID'].'.txt'));
			$Details		=	utf8_encode(file_get_contents('../NewsDescriptions/'.$rowData['ID'].'.txt'));
			//From every rowdata get the imagePath, NewsHeadline, and NewsDetails
			$NewsDataArray[]	=	array($rowData['ID'].'.png', $HeadLine, $Details);
		}
		$output	=	json_encode($NewsDataArray);
	}
	
	echo $output;
?>