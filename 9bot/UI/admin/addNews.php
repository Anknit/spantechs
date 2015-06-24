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
	$NewsData	=	DB_Query($inputGetNewsData, 'ASSOC');
?>
<html>
<head>
    <link rel="stylesheet" href="../../../Common/css/jquery-te-1.4.0.css" />
    <link rel="stylesheet" href="../../../Common/css/hover.css" />
    <link rel="stylesheet" href="../../../Common/css/buttonTab.css" />
    <style>
        .jqte_editor{
            min-height: 150px;
        }
        .jqte{
            margin: 10 2px ;
        }
        .SubmitButtonPosition{
            float: right;
        }
        #AttachmentDiv{
            float: left;
            margin-left: 50px;
            margin-top: 0px;
        }
    </style>
	<script type="text/javascript" src="../../../Common/js/jquery.min.js"></script>
	<script type="text/javascript" src="../../../Common/js/commonFunctions.js"></script>
    <script type="text/javascript" src="../../../Common/js/jquery-te-1.4.0.js"></script>
    <script>
		$(function(){
			$("#newsHeadline").jqte();
			$("#newsDetails").jqte();
		});
		$(function(){
			$('input#addNews').on('click', '', function(){
				newsType	=	$('input[name="newsType"]:checked').val();
				newsHeadline=	$('#newsHeadline').closest('.jqte').find('.jqte_editor').html();
				newsDetails	=	$('#newsDetails').closest('.jqte').find('.jqte_editor').html();
				newsHome	=	$('#showOnHomePage').is(':checked') ? 1: 0;
				var formData = new FormData();
				var fileElement	=	$('input[type=file]')[0].files[0];
				var storeImage	=	0;
				if(fileElement != undefined && fileElement != null && fileElement != '')
					storeImage	=	1;
				
				formData.append('file[]', fileElement);
				submitNews(newsType, newsHeadline, newsDetails, newsHome, formData, storeImage);
			});
		});
		function submitNews(newsType, newsHeadline, newsDetails, newsHome, data, storeImage){
			var url		=	'../../actions/addNewsDataByAdmin.php?newsType='+newsType+'&newsHeadline='+newsHeadline+'&newsDetails='+newsDetails+'&newsHome='+newsHome+'&storeImage='+storeImage;
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
    </script>
</head>
<body>
	<a class="greyTabButton hvr-float-shadow RightFloat normalButton" href="logout.php">Logout</a>
	<?php
        if($NewsData != false && $NewsData != 0 && count($NewsData) > 0 && !empty($NewsData)){
	?>		
    <table>
    	<thead>
        	<tr>
                <th width="5%">&nbsp;</th>
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
                            	<td><input type="checkbox" name="selectNews" value="<?php echo $rowData['ID']; ?>" /></td>
                            	<td><textarea rows="2" cols="30"><?php echo $rowData['NewsTitle']; ?></textarea></td>
                            	<td>
								<?php if($rowData['NewsImagePath'] == 1){?>
                                	<img src='../images/newsAndEvents/<?php echo $rowData['ID'];?>' />
                                <?php }?>
                                     &nbsp;&nbsp; Select Image: &nbsp;&nbsp;
                                     <input name="newsFig" id="newsFig" type="file" accept="image/gif, image/jpg, image/jpeg, image/bmp, image/png" max="1" />                                   
									 &nbsp;&nbsp; Remove Image: &nbsp;&nbsp;<img src="../../../Common/images/delete.png" />
                                </td>
                            	<td><textarea><?php echo $rowData['NewsDetails']; ?></textarea></td>
                            	<td><?php echo $rowData['DateOfAddition']; ?></td>
                            	<td><input type="button" name="saveNewsChanges" value="Save" />&nbsp;&nbsp;<img src="../../../Common/images/delete.png" /></td>
                            </tr>
                        <?php
					}
					?>
        </tbody>
    </table>
    <?php
		}
	?>
	<label for="newsFig">Select an image: &nbsp;&nbsp;</label><input name="newsFig" id="newsFig" type="file" accept="image/gif, image/jpg, image/jpeg, image/bmp, image/png" max="1" />
    <br />
    <br />
    <b>News Type: </b>&nbsp;&nbsp;&nbsp;
	Ninebot& more&nbsp;<input type="radio" name="newsType" value="1" checked />&nbsp;&nbsp;
	Tours&nbsp;<input type="radio" name="newsType" value="2" />     
     <br />
     <br />
    Check, if this news is to be shown on home page&nbsp;&nbsp;&nbsp;<input type="checkbox" id="showOnHomePage" />
     <br />
     <br />
	<label for="newsHeadline">Headline</label><textarea id="newsHeadline" name="newsHeadline"></textarea>
    <label for="newsDetails">Details</label><textarea id="newsDetails" name="newsDetails"></textarea>
    <input type="button" id="addNews" value="Save" />
</body>
</html>