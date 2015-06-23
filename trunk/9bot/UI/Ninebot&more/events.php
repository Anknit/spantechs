<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/
?>
<?php 
	require_once './header.php';
?>
    <link rel="stylesheet" type="text/css" href="../../css/news.css" />
	<script>
		var pathToActionDir	=	'../../actions/';
		var PageType	=	2;
		var DivSectionSelector	=	'.contentNewsItems';
		var pathToNewsImageDir	=	'../../images/newsAndEvents/';
    </script>        
    <script src="../../js/CreateNews.js" type="text/javascript"></script>

	<div class="content" style="margin-bottom:0">
        <div class="contentNewsItems"></div>
	</div>
<?php 
	require_once './footer.php';
?>
