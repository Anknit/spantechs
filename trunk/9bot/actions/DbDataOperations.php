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
		param $argsList is an array with keys 'clause, 'order', 'json'. Default is false so that an assoc array is returned
		returns false, or the associative array of resellers information
	*/
	public function getResellersInfo($argsList){
        $output	=	false;
		$GetContactInfoInput	=	array(
			'Table'		=>	'resellersinfo',
			'Fields'	=>	'*',
			'clause'	=>	$argsList['clause'],
			'order'		=>	$argsList['order']
		);

		$ContactInfo		=	DB_Read($GetContactInfoInput, 'ASSOC', $argsList['json']);
		if($ContactInfo != '0' && $ContactInfo !== false){
			$output	=	$ContactInfo;
		}
		return $output;
	}
	
	/*
		param $Json. Can be true or false, depending on which the output will be json or assoc array. Default is false so that an assoc array is returned
		returns false, or the associative array of resellers information
	*/
	public function addEditResellersInfo($argsList){
        $output	=	false;
        
        $fields =   array();
        if($_REQUEST['oper'] != 'del'){
            $fields =   array(
                'Name'   =>  $_REQUEST['Name'],
                'Address'=>  $_REQUEST['Address'],
                'Email'  =>  $_REQUEST['Email'],
                'Website'=>  $_REQUEST['Website'],
                'Phone'  =>  $_REQUEST['Phone']
            );
        }
 		$UpdateContactInfoInput	=	array(
			'Table'		=>	'resellersinfo',
			'Fields'	=>	$fields
		);
        if($_REQUEST['oper'] != 'add')
            $UpdateContactInfoInput['clause'] = ' ID = '.$_REQUEST['ID'];
        
        if($_REQUEST['oper'] == 'edit'){
            $ContactInfo		=	DB_Update($UpdateContactInfoInput);
        }
        elseif($_REQUEST['oper'] == 'add'){
            $ContactInfo		=	DB_Insert($UpdateContactInfoInput);
        }
        elseif($_REQUEST['oper'] == 'del'){
            $ContactInfo		=	DB_Delete($UpdateContactInfoInput);
        }
        if($ContactInfo != '0' && $ContactInfo !== false){
			$output	=	$ContactInfo;
		}
		return $output;
	}
	
};

?>