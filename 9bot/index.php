<?php
	session_start();
	if(isset($_SESSION['IntroDone']) && $_SESSION['IntroDone'] == 1){
		header('Location: Home.php');
		die();
	}

	ob_start();
?>
<!DOCTYPE html>
<html>
	<head>
        <meta name="google-site-verification" content="OOZNMzRxT7UxXFgwQucOjamDXOYnm-zoqu0NSl0pd-4" />
        <meta name="description" content="ninebot è la soluzione intelligente per la mobilità del futuro. Elettrico e non inquinante, leggero e smontabile, trasportabile in macchina e nel gavone di una barca. Ninebot One Dal giovane manager al rapper, per girare in allegria e godere dell'ambiente che ci circonda, saltando con rapide evoluzioni il traffico e le barriere di città ormai troppo congestionate. Nini Robotics è la soluzione accessibile per tutti, anche per chi si trovava sino a ieri bloccato ed impedito da barriere architettoniche: scale o ascensori troppo stretti" />
        <meta name="keywords" content="9botitalia,9bot italia,ninebot italy,ninebot italia,ninebot">
        <meta name="author" content="Aditya Gupta @ http://www.aapastech.com">
		<link rel="stylesheet" type="text/css" href="../Common/css/sequenceLetters.css" />
		<link rel="stylesheet" type="text/css" href="css/Home_textShow.css" />
		<?php require_once 'require.php';?>
	</head>
	<body>
    <div class="wrapper" style="height:100% !important;">
        <div class="content" style="height:100% !important; ">
            <div class="os-phrases" id="os-phrases">
                <h2>New Moving NUOVO</h2>
                <h2>Partner Ninebot Inc.</h2>
                <h2>Distributore ninebot</h2>
                <h2>e nino robotics</h2>
            </div>
            <a href="#" class="hvr-float-shadow greyTabButton" id="skipToMainContent">SKIP TO MAIN CONTENT</a>
		</div>
		<script src="../Common/js/modernizr.custom.js"></script>
		<script src="../Common/js/jquery.lettering.js"></script>
		<script>
            $(document).ready(function() {
                if(IsbrowserIE()){
                    skipToMainContent();	
                }
                
                calculatedTimeoutForTextSlideShow   =   5040 * $('#os-phrases').find('h2').length;
                $("#os-phrases > h2").lettering('words').children("span").lettering().children("span").lettering();
                showHomePageTimer	=	setTimeout(skipToMainContent, calculatedTimeoutForTextSlideShow);
                $('#skipToMainContent').on('click', skipToMainContent);
            });
            function skipToMainContent(){
                postAnimationAction();
                window.location.href	=	'Home.php';	
            }
            postAnimationAction =   function(){
				requestObject	=	new Object();
				requestObject.actionScriptURL	=	'setSessionParameters.php?IntroDone=1';
				requestObject.sendMethod	=	'POST';
				send_remoteCall(requestObject);
                return true;
            };
            clientWidth =   document.body.clientWidth;
            if(clientWidth <640){
                skipToMainContent();
            }
        </script>
	</body>
</html>
<?php
	ob_flush();
?>