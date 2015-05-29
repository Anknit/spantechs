<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<link rel="stylesheet" type="text/css" href="../Common/css/pageTransition.css" />
		<link rel="stylesheet" type="text/css" href="../Common/css/animations.css" />
		<link rel="stylesheet" type="text/css" href="../Common/css/sequenceLetters.css" />
		<?php require_once 'require.php';?>
		<link rel="stylesheet" type="text/css" href="css/Home_textShow.css" />
        <meta charset="utf-8">
        <title>ninebot</title>
	</head>
	<body>	
		<div id="pt-main" class="pt-perspective">
			<div id="textSlideShow" class="pt-page" style="display:none;">
                <div class="os-phrases" id="os-phrases">
                    <h2>9botitalia.com</h2>
                    <h2>official partner</h2>
                    <h2>of ninebot.com</h2>
                    <h2>Distributore Ufficiale per</h2>
                    <h2>l'Italia dei Prodotti Ninebot</h2>
                </div>
                <script>
                    $(document).ready(function() {
						if(IsbrowserIE()){
							window.location.href	=	'Home.php';	
						}
						
						setSessionForIntro	=	1;
						showHomePageTimer	=	'';
						$( "#homePage" ).load( "Home.php" );
						<?php
							if(isset($_SESSION['IntroDone']) && $_SESSION['IntroDone'] == 1){
						?>
							sessionAlreadySet	=	0;
							skipToMainContent();
						<?php 
							}else{
						?>		
							$('#textSlideShow').css('display', 'block');
							$("#os-phrases > h2").lettering('words').children("span").lettering().children("span").lettering();
							showHomePageTimer	=	setTimeout(postAnimationAction, 20200);
							$('#skipToMainContent').on('click', skipToMainContent);
						<?php }
						?>
						
						function skipToMainContent(){
							if(!IsValueNull(showHomePageTimer))
								clearTimeout(showHomePageTimer);
							postAnimationAction();
						}
					});
                    postAnimationAction =   function(){
						if(setSessionForIntro == 1){
							requestObject	=	new Object();
							requestObject.actionScriptURL	=	'setSessionParameters.php?IntroDone=1';
							requestObject.sendMethod	=	'POST';
							send_remoteCall(requestObject);
						}
						$('#homePage').css('display', 'block');
                        TurnOnNextPageWithTransition(64);
                    };
                </script>
                <a href="#" class="greyTabButton hvr-float-shadow" id="skipToMainContent">SKIP TO MAIN CONTENT</a>
            </div>
			<div id="homePage" class="pt-page" style="display:none;">
            </div>
		</div>
		<script src="../Common/js/modernizr.custom.js"></script>
		<script src="../Common/js/jquery.lettering.js"></script>
		<script src="../Common/js/pagetransitions.js"></script>
	</body>
</html>
