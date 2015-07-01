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
	$inputGetNewsData	=		array(
		'Table'		=>	'newslogging',
		'Fields'	=>	'*',
		'order'		=>	'ID DESC'
	);
	$NewsData	=	DB_Read($inputGetNewsData, 'ASSOC');
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../../../Common/css/hover.css" />
    <link rel="stylesheet" href="../../../Common/css/buttonTab.css" />
    <link rel="stylesheet" href="../../../Common/css/jquery-te-1.4.0.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <style>
        .jqte_editor{
            min-height: 50px;
        }
        .jqte{
            margin: 10 2px ;
        }
    </style>
	<script type="text/javascript" src="../../../Common/js/jquery.min.js"></script>
	<script type="text/javascript" src="../../../Common/js/commonFunctions.js"></script>
    <script type="text/javascript" src="../../../Common/js/jquery-te-1.4.0.js"></script>
    <script>
		$(function(){
			$(".convertToMsEditor").jqte();
		});
		function editNews(srcButton, newsID){
			parentRow	=	$(srcButton).closest('tr');
			newsType	=	'';
			newsHeadline=	encodeURI(parentRow.find('.newsTitle').closest('.jqte').find('.jqte_editor').html());
			newsDetails	=	encodeURI(parentRow.find('.newsDetails').closest('.jqte').find('.jqte_editor').html());
			newsHome	=	parentRow.find('input[type="checkbox"]').is(':checked') ? 1: 0;
			
			var formData = new FormData();
			var fileElement	=	parentRow.find('input[type=file]')[0].files[0];
			var storeImage	=	0;
			if(fileElement != undefined && fileElement != null && fileElement != '')
				storeImage	=	1;
			else if(parentRow.find('.newsImage').attr('src') == '')	
				storeImage	=	2;
			
			formData.append('file[]', fileElement);
			submitNews(newsType, newsHeadline, newsDetails, newsHome, formData, storeImage, newsID);
		}
		function submitNews(newsType, newsHeadline, newsDetails, newsHome, data, storeImage, newsId){
			var url		=	'../../actions/addNewsDataByAdmin.php?newsType='+newsType+'&newsHeadline='+newsHeadline+'&newsDetails='+newsDetails+'&newsHome='+newsHome+'&storeImage='+storeImage+'&newsId='+newsId;
			var	Method	=	'POST';
			var	OnSuccess	=	function(response){
				if(response	==	1){
					alert('News saved successfully');
					location.reload(true);
				}
				else if(response	==	0){
					alert('Failed to save news details');
				}
			};
			var async	=	true;
			callRemoteLink(url, Method, OnSuccess, async, data);
		}
		
		function deleteNews(newsID){
			var url		=	'../../actions/deleteNewsDataByAdmin.php?newsID='+newsID;
			var	Method	=	'POST';
			var	OnSuccess	=	function(response){
				if(response	==	1){
					alert('News deleted successfully');
					location.reload(true);
				}
				else if(response	==	0){
					alert('Failed to delete news');
				}
			};
			var async	=	true;
			callRemoteLink(url, Method, OnSuccess, async, '');
		}
		
		function removeImage(srcButton){
			parentRow	=	$(srcButton).closest('tr');
			parentRow.find('.newsImage').attr('src', '');
			parentRow.find('input[type=file]').val('');
		}
    </script>
</head>
<body>
	<div style="float:left;text-align:center; width:100%; height:100px;">
        <span style="margin:auto;">
            <?php 
				require_once 'menu.php';
			?>
        </span>
    </div>
	<?php
        if($NewsData != false && $NewsData != 0 && count($NewsData) > 0 && !empty($NewsData)){
	?>		
    <div style="float:left;width:100%; height:100px;">
        <table border="1px solid" bordercolor="#ccc" cellpadding="0" cellspacing="0" style="margin:2%">
            <thead>
                <tr>
                    <th width="5%">Show on Home page</th>
                    <th width="20%">Headline</th>
                    <th width="10%">Image</th>
                    <th>Description</th>
                    <th width="10%">Date</th>
                    <th width="10%">&nbsp;</th>
                </tr>
            </thead>
            <tbody id="ExistingNewsData">
                <?php
                        for($i= 0 ; $i< count($NewsData); $i++){
                            $rowData	=	$NewsData[$i];
                            ?>
                                <tr>
                                    <td><input type="checkbox" name="selectNews" <?php if($rowData['showOnHomePage']){echo 'checked';} ?> /></td>
                                    <td style="padding:0"><textarea style="width:100%; height:100%" class="convertToMsEditor newsTitle"><?php echo urldecode($rowData['NewsTitle']); ?></textarea></td>
                                    <td>
                                    <?php if($rowData['NewsImagePath'] == 1){?>
                                        <img class="newsImage" width="100" height="50" src='../../images/newsAndEvents/<?php echo $rowData['ID'].'.png';?>' />
                                    <?php }?>
                                         <br />
                                         <input name="newsFig" id="newsFig" type="file" accept="image/gif, image/jpg, image/jpeg, image/bmp, image/png" max="1" style="width:80px" />                                   
                                         <br />&nbsp;&nbsp; Remove Image: &nbsp;&nbsp;<img onClick="removeImage(this);" src="../../../Common/images/delete.png" />
                                    </td>
                                    <td style="padding:0"><textarea style="width:100%; height:100%" class="convertToMsEditor newsDetails"><?php echo urldecode($rowData['NewsDetails']); ?></textarea></td>
                                    <td><?php echo $rowData['DateOfAddition']; ?></td>
                                    <td><input type="button" name="saveNewsChanges" value="Save" onClick="editNews(this, '<?php echo $rowData['ID']; ?>');" />&nbsp;&nbsp;<img src="../../../Common/images/delete.png" onClick="deleteNews(<?php echo $rowData['ID']; ?>);" /></td>
                                </tr>
                            <?php
                        }
                        ?>
            </tbody>
        </table>
    </div>
    <?php
		}
	?>
</body>
</html>