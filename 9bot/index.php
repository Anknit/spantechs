<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<link rel="stylesheet" type="text/css" href="../Common/css/pageTransition.css" />
		<link rel="stylesheet" type="text/css" href="../Common/css/animations.css" />
		<link rel="stylesheet" type="text/css" href="../Common/css/sequenceLetters.css" />
		<?php require_once 'require.php';?>
		<link rel="stylesheet" type="text/css" href="css/Home_textShow.css" />
	</head>
	<body>	
		<div id="pt-main" class="pt-perspective">
			<div class="pt-page">
                <div class="os-phrases" id="os-phrases">
                    <h2>9botitalia.com</h2>
                    <h2>official partner of ninebot.com</h2>
                    <h2>Distributore Ufficiale per</h2>
                    <h2>l'Italia dei Prodotti Ninebot</h2>
                </div>
                <script>
                    $(document).ready(function() {
                        $("#os-phrases > h2").lettering('words').children("span").lettering().children("span").lettering();
						$( "#homePage" ).load( "Home.php" );
                        showHomePageTimer	=	setTimeout(postAnimationAction, 20200);
						$('#skipToMainContent').on('click', function(){
							clearTimeout(showHomePageTimer);
							postAnimationAction();
						});
                    });
                    postAnimationAction =   function(){
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
