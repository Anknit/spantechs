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
	$TourPackagesInfo	=	DB_Read(
		array(
			'Table'	=>	'tourspackageinfo',
			'Fields'	=>	'*'
		),
		'ASSOC'
	);
	
	$output	=	0;
	
	function DoesIndexExists($id, $lookInto){
		if(array_key_exists($id, $lookInto))
			return true;
		else
			return false;	
	}
	
	if($TourPackagesInfo != 0 && $TourPackagesInfo !== false){
		$TourInfoForBuildingPackages	=	array();
		for($i = 0; $i < count($TourPackagesInfo); $i++){
			$rowData	=	$TourPackagesInfo[$i];
			//From every rowdata get the tourpackage group id, and create an array of those belonging to same id.
			$TourPackageGroupId	=	$rowData['TourPackagegroupID'];
			
			//Check if index is already present in Array, then no need to build new array for tourpackage group
			if(	!DoesIndexExists($TourPackageGroupId, $TourInfoForBuildingPackages) )
				$TourInfoForBuildingPackages[$TourPackageGroupId]	=	array();

			$TourInfoForBuildingPackages[$TourPackageGroupId][$rowData['TourID']]	=	array(
				'packageName'	=>	$rowData['TourPackageName'],
				'packageDuration'	=>	$rowData['Duration'],
				'packagePricePerPerson'	=>	$rowData['TourPricePerPerson'],
				'packageFacilities'	=>	$rowData['TourPackageFacilities'],
				'packageAdditionalPrice'	=>	$rowData['Additional_Price'],
				'packageExclusiveTaxes'	=>	$rowData['ExclusiveTaxes'],          
			);			
		}
		
		$output	=	json_encode($TourInfoForBuildingPackages);
	}
	
	echo $output;
?>