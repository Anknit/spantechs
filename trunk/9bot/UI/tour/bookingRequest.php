<?php
	require_once '../../../Common/php/OperateDB/DbMgrInterface.php';
	$bookedDate	=	array();
	$tour	=	$_GET['tid'];
	$tourBookingInfo	=	DB_Read(array(
		'Table'=>'bookinginfo',
		'Fields'=>'bookingDate, personCount',
		'clause'=>'tourId = '.$tour
	),'ASSOC','');
	for($i=0;$i<count($tourBookingInfo);$i++){
		if($bookedDate[$tourBookingInfo[$i]['bookingDate']] == null )
			$bookedDate[$tourBookingInfo[$i]['bookingDate']]	= 0;
		$bookedDate[$tourBookingInfo[$i]['bookingDate']]	+=	(int)$tourBookingInfo[$i]['personCount'];
	}
	echo json_encode($bookedDate);
?>