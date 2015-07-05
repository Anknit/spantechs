<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/
?>
<?php
	require_once 'verifyUser.php';
	if(!checkIfUserIsLoggedIn())
		redirectTo('Home');

	require_once '../../Db.php';
	$inputGetResellersData	=		array(
		'Table'		=>	'resellersinfo',
		'Fields'	=>	'*',
		'order'		=>	'PriorityOrder ASC'
	);
	$ResellersData	=	DB_Read($inputGetResellersData, 'ASSOC');
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
    <style>
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 30px; }
        #sortable li span { position: absolute; margin-left: -1.3em; }
        *{box-sizing: content-box;}
        li{text-align:left;}
    </style>
	<script type="text/javascript" src="../../../Common/js/jquery.min.js"></script>
	<script type="text/javascript" src="../../../Common/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../../../Common/js/commonFunctions.js"></script>
    <script>
		$(function(){
			$( "#sortable" ).sortable();
            $( "#sortable" ).disableSelection();
		});
		function reOrderReseller(){
			var elemsReseler    =   $('[resellerID]');
            var IdOrder =   '';
            var PriorityOrder   =   '';
            for(var i = 0; i< elemsReseler.length; i++){
                if(IdOrder != "")
                    IdOrder+= ',';
                if(PriorityOrder != "")
                    PriorityOrder+= ',';
                
                IdOrder += $(elemsReseler[i]).attr('resellerID');
                PriorityOrder += i;
            }
			submitOrder(IdOrder, PriorityOrder);
		}
        
		function submitOrder(IdOrder, PriorityOrder){
			var url		=	'../../actions/savePriorityOrders.php?dataType=Contacts&IdOrder='+IdOrder+'&PriorityOrder='+PriorityOrder;
			var	Method	=	'POST';
			var	OnSuccess	=	function(response){
				if(response	==	1){
					alert('Contacts saved successfully');
					location.reload(true);
				}
				else if(response	==	0){
					alert('Failed to save priority order');
				}
			};
			var async	=	true;
			callRemoteLink(url, Method, OnSuccess, async, '');
		}
    </script>
</head>
<body>
    <?php 
        require_once 'menu.php';
        if($ResellersData != false && $ResellersData != 0 && count($ResellersData) > 0 && !empty($ResellersData)){
	?>
    <div style="float:left;width:100%; height:100px; margin:auto; text-align:center">
      <div style="width:90%; margin: 1% 5%; text-align:left; font-weight:700">
       In order to reorder the resellers, just drag and drop the resellers list below so as to reorder the resellers items. The one at the top has highest priority, and will be shown at the top in respective page to end users. Once the reordering is done press the save button.
       </div>
        <ul id="sortable" style="width:90%; margin: 2% 5%">
         <?php
            for($i= 0 ; $i< count($ResellersData); $i++){
                $rowData	=	$ResellersData[$i];
                ?>
                   <li resellerID="<?php echo $rowData['ID']; ?>" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo urldecode($rowData['Name']); ?></li>
                <?php
            }
        ?>
        </ul>
        <button type="button" class="btn btn-primary" onclick="reOrderReseller();">Save order</button>
    </div>
    <?php
		}
	?>
</body>
</html>