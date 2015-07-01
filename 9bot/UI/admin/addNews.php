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
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../../../Common/css/jquery-te-1.4.0.css" />
    <link rel="stylesheet" href="../../../Common/css/hover.css" />
    <link rel="stylesheet" href="../../../Common/css/buttonTab.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
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
				newsHeadline=	encodeURI($('#newsHeadline').closest('.jqte').find('.jqte_editor').html());
				newsDetails	=	encodeURI($('#newsDetails').closest('.jqte').find('.jqte_editor').html());
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
<body style="text-align:center;">
    <?php 
        require_once 'menu.php';
    ?>
    <div style="float:left;text-align:center; width:100%; height:100px;">
        <span class="greyTabButton normalButton" style="margin:auto;float:left;color:white; width:95%; margin:10px">Add news</span>
        <br />
        <br />
        <br />
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
    </div>
</body>
</html>