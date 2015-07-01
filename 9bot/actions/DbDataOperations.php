<?php
/*
* Author: Aditya
* date: 1-July-2015
* PHP Document : This defines different classes relating to data of different tables. The methods are mostly public, and the methods are called through out
  the application to serve data, the data set could be unique or varying depending upon clauses
*
*/
?>
<?php

class contactData{
	
	/*
		param $Json. Can be true or false, depending on which the output will be json or assoc array. Default is false so that an assoc array is returned
		returns false, or the associative array of resellers information
	*/
	public function getResellersInfo($clause = '', $order = '', $Json = false){
		$output	=	false;
		$GetContactInfoInput	=	array(
			'Table'		=>	'resellersinfo',
			'Fields'	=>	'*',
			'clause'	=>	$clause,
			'order'		=>	$order
		);

		$ContactInfo		=	DB_Read($GetContactInfoInput, 'ASSOC', $Json);
		if($ContactInfo != '0' && $ContactInfo !== false){
			$output	=	$ContactInfo;
		}
		return $output;
	}
	
};

?>