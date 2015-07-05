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
	extract($_REQUEST);
	$output	=	0;
	if(isset($dataType) && $dataType != ''){
        if(isset($IdOrder) && $IdOrder != '' && isset($PriorityOrder) && $PriorityOrder != ''){
            $IdOrder	=	explode(',' , $IdOrder);
            $PriorityOrder	=	explode(',' , $PriorityOrder);
            
            $j = 0;
            for($i = 0; $i< count($IdOrder); $i++){
                if($dataType == 'News'){
                    $out = DB_Update(array(
                        'Table' =>  'newslogging',
                        'Fields'=>array(
                            'PriorityOrder'  =>  $PriorityOrder[$i]
                        ),
                        'clause' => 'ID = '.$IdOrder[$i]
                    ));
                    
                }
                elseif($dataType == 'Contacts'){
                    $out = DB_Update(array(
                        'Table' =>  'resellersinfo',
                        'Fields'=>array(
                            'PriorityOrder'  =>  $PriorityOrder[$i]
                        ),
                        'clause' => 'ID = '.$IdOrder[$i]
                    ));

                }
                
                if($out)
                    $j++;
            }//close for
            if($j == $i)
                $output	=	1;
        }
	}
	
	echo $output;
?>