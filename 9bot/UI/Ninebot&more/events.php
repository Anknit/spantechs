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
	<div class="content" style="margin-bottom:0">
    <link rel="stylesheet" type="text/css" href="../../css/news.css" />
    <?php
		$home = false;
        $images =   '../../images/';
        require_once '../news.php';
    ?>
	</div>
<?php 
	require_once './footer.php';
?>
