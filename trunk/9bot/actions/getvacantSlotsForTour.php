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
	$output	=	0;
	$TourSlotsInfo	=	DB_Read(
		array(
			'Table'	=>	'booking_info',
			'Fields'	=>	'NumberOfPeople',
			'clause'	=>	'DateSelected = "'.$_GET['Date'].'" AND TourID = '.$_GET['TourID']
		),
		'ASSOC'
	);

	$vacantSlots	=	7;
	if($TourSlotsInfo != 0 && $TourSlotsInfo !== false){
		$totalPeople	=	0;
		for($i = 0; $i < count($TourSlotsInfo); $i++){
			$rowData	=	$TourSlotsInfo[$i];
			//From every rowdata get the tourpackage group id, and create an array of those belonging to same id.
			$totalPeople	+=	intval($rowData['NumberOfPeople']);
			
		}
		$vacantSlots	-=	$totalPeople;
		$output	=	$vacantSlots;
	}
	else{
		$output	=	$vacantSlots;
	}
	
	echo $output;
?>