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
	if(!checkIfUserIsLoggedIn())    // if user is logged in then redirect to home page
		redirectTo('Home');


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>change password</title>
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
</head>
<body>
    <?php 
        require_once 'menu.php';
    ?>
    <div class="wrapper">
        <div class="container">
            <h1>Ssssshhhhh... change your secret password</h1>
            <form name="changePassword" class="form" method="POST" action="verifyUser.php">
                <input type="text" name="Username" placeholder="Username">
                <input type="password" name="Password" placeholder="Password">
                <button type="submit" name="changePassword" id="login-button">Change password</button>
            </form>
        </div>
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <?php
	$errMsg	=	0;
	if(isset($_GET) && isset($_GET['errMsg'])){
		extract($_GET);
	}
	?>
    <input type="hidden" name="errMsg" id="errMsg" value="<?php echo $errMsg;?>" />
    <script src='../../../Common/js/jquery.min.js'></script>
    <script src="../../js/login.js"></script>
    <script>
		$(function(){
			if($('#errMsg').val() == 1){
				alert('You are not a registered user of our portal.');
			}
		});
	</script>
</body>
</html>
