<?php
	require_once 'verifyUser.php';
	if(checkIfUserIsLoggedIn())
		redirectTo('adminInterface');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Secret login screen</title>
    <link rel="stylesheet" href="../../css/login.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h1>Welcome</h1>
            <form name="Login" class="form" method="POST" action="verifyUser.php">
                <input type="text" name="Username" placeholder="Username">
                <input type="password" name="Password" placeholder="Password">
                <button type="submit" name="loginSubmit" id="login-button">Login</button>
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
				alert('The credentials you entered are incorrect.');
			}
		});
	</script>
</body>
</html>
