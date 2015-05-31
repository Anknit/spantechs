<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../Common/css/pageTransition.css" />
	   	<link rel="stylesheet" type="text/css" href="../Common/css/animations.css" />
		<link rel="stylesheet" type="text/css" href="../Common/css/sequenceLetters.css" />
		<?php require_once 'require.php';?>
		<link rel="stylesheet" type="text/css" href="css/Home_textShow.css" />
		<script type="text/javascript" src="../Common/js/JsFunctionsToLocatePopUpdiv.js"></script>
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
                        homePageStuffLoaded =   0;
						<?php
							if(isset($_SESSION['IntroDone']) && $_SESSION['IntroDone'] == 1){
						?>
							sessionAlreadySet	=	0;
							skipToMainContent();
						<?php 
							}else{
						?>	
                            calculatedTimeoutForTextSlideShow   =   5040 * $('#os-phrases').find('h2').length;
							$("#os-phrases > h2").lettering('words').children("span").lettering().children("span").lettering();
							$('#textSlideShow').css('display', 'block');
                            
							showHomePageTimer	=	setTimeout(skipToMainContent, calculatedTimeoutForTextSlideShow);
                            setTimeout(loadHomePage, 2500);
							$('#skipToMainContent').on('click', skipToMainContent);
						<?php }
						?>
						function loadHomePage(){
                            $( "#homePage" ).load( "Home.php" );
                            homePageStuffLoaded =   1;
                        };
						function skipToMainContent(){
 							loadImage();
                            if(homePageStuffLoaded == 0)
                                loadHomePage();
                            if(!IsValueNull(showHomePageTimer))
								clearTimeout(showHomePageTimer);
							postAnimationAction();
                            deloadImage();
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
                <a href="#" class="hvr-float-shadow greyTabButton" id="skipToMainContent">SKIP TO MAIN CONTENT</a>
            </div>
			<div id="homePage" class="pt-page" style="display:none;">
            </div>
		</div>
		<script src="../Common/js/modernizr.custom.js"></script>
		<script src="../Common/js/jquery.lettering.js"></script>
		<script src="../Common/js/pagetransitions.js"></script>
		<img src="../Common/images/aloader.gif" id="LoadingImage" style="display:none;" />
	</body>
</html>
