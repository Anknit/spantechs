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
	require_once __DIR__.'./../../Common/php/commonfunctions.php';
	require_once __DIR__.'/DbDataOperations.php';
	extract($_REQUEST);
    $output = 0;    //Improper request
    function getMethodName($data, $action){
        $ListOfMethods  =   array();
        $ListOfMethods['contactData']   =   array('get' => 'getResellersInfo', 'edit'   =>  'addEditResellersInfo');
        
        return $ListOfMethods[$data][$action];
    }

    function getArgumentsList($method){
        switch($method){
            case 'getResellersInfo':
                return array('clause'=>'', 'order'=>'', 'json'=> true);
            break;
            case 'addEditResellersInfo':
                return array();
            break;
        }
    }


    if(isset($data) && isset($action)){
        $method =   getMethodName($data, $action);
        if(!empty($method)) {
            $output	=	getInfoFrom($data,$method, getArgumentsList($method));
            if(!$output)
                $output = 0;
        }
    }
	echo $output;
?>