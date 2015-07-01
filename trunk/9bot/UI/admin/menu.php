<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/

?>
<?php

$activeLink	=	'class ="active"';
$scriptName	=	trim(basename($_SERVER['PHP_SELF']));
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if($scriptName == 'addNews.php'){echo $activeLink;}?>><a href="addNews.php">Add news</a></li>
        <li <?php if($scriptName == 'editNews.php'){echo $activeLink;}?>><a href="editNews.php">Edit news</a></li>
        <li <?php if($scriptName == 'updateResellers.php'){echo $activeLink;}?>><a href="updateResellers.php">Resellers</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" class="greyTabButton RightFloat normalButton">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>