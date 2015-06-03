<?php require_once 'header.php'; ?>
<link href="../../css/moreHome.css" rel="stylesheet" />
<link href="../../css/cubeAnimation.css" rel="stylesheet" />
<link href="../../../Common/css/cssForJssorSliders.css" rel="stylesheet" />
<title>9bot italia | Ninebot italia | Ninebot.com - Distributore Ufficiale per l'Italia dei Prodotti Ninebot</title>
<div class="content">
	<div id="container1">
        <style>
			h3.greenButton{
				background-color:#A0CE4E;
				padding:10px 10px;
				color:#fff;
				width:400px;
				height:40px;
				border-radius:2px;
			}
			h3.greenButtonTextInfo{
				font-size:20px;
				color:#fff;
			}
        </style>
        <script src="../../../Common/js/jssor.slider.mini.js" type="text/javascript"></script>
        <script>
            $(function ($) {
                
                //Define an array of transition for captions
                var _CaptionTransitions = [
                    {$Duration:900,$Rotate:1,$Easing:{$Opacity:$JssorEasing$.$EaseLinear,$Rotate:$JssorEasing$.$EaseInQuad},$Opacity:2},
                    {$Duration:900,$Zoom:4,$Rotate:1,$Easing:{$Zoom:$JssorEasing$.$EaseInQuad,$Opacity:$JssorEasing$.$EaseLinear,$Rotate:$JssorEasing$.$EaseInQuad},$Opacity:2,$Round:{$Rotate:0.5}},
                    {$Duration:1200,y:0.5,$Zoom:11,$Rotate:0.2,$Easing:{$Top:$JssorEasing$.$EaseOutCubic,$Zoom:$JssorEasing$.$EaseInCubic},$Opacity:2,$During:{$Top:[0,0.5]}},
                    {$Duration:1200,y:0.6,$Clip:3,$Easing:$JssorEasing$.$EaseInCubic,$Opacity:2},
                    {$Duration:1200,x:0.6,$Zoom:3,$Rotate:-0.3,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Rotate:$JssorEasing$.$EaseInBack},$Opacity:2},
                    {$Duration:1200,x:-0.5,$Zoom:11,$Easing:{$Left:$JssorEasing$.$EaseOutJump,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$Round:{$Zoom:0.5}},
                    
                ];
				_CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            	_CaptionTransitions["T|IB"] = { $Duration: 1200, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
				_CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
                
                //Define an array of slideshow transition code
                var _SlideshowTransitions = [
                    {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Opacity:2},
                    {$Duration:1200,x:1,$Delay:40,$Cols:6,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:{$Left:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$ZIndex:-10,$Brother:{$Duration:1200,x:1,$Delay:40,$Cols:6,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:{$Top:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$ZIndex:-10,$Shift:-100}},
                    {$Duration:1200,y:-1,$Easing:{$Top:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$ZIndex:-10,$Brother:{$Duration:1200,y:-1,$Easing:{$Top:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$ZIndex:-10,$Shift:-100}},
                    {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Opacity:2},
                    {$Duration:1000,y:1,$Easing:$JssorEasing$.$EaseInBounce},
                    {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Opacity:2}
                ];
                var options = {
					$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
					$AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
					$AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
					$PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
	
					$ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
					$SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
					$SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
					$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
					//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
					//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
					$SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
					$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
					$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
					$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
					$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
					$DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                    $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                        $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                        $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                        $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                        $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                    },
                    
                    $CaptionSliderOptions: {     //[Optional] Options which specifies how to animate caption
                        $Class: $JssorCaptionSlider$,   //[Required] Class to create instance to animate caption
                        $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                        $PlayInMode: 1,    //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                        $PlayOutMode: 3   //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                    },

					$ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
						$Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
						$ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
						$AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
						$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
					}
                };
                var jssor_slider1 = new $JssorSlider$('testSlider', options);
            });
        </script>        
    </head>
    <body>
        <div id="testSlider" class="jssorSlidesDimensions" style="position: relative; top: 0px; left: 0px; margin:auto; overflow: hidden;">
            <!-- Loading Screen --> 
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
    
                    background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;"> 
                </div> 
                <div style="position: absolute; display: block; background: url(../../../Common/images/loading.gif) no-repeat center center;
    
                    top: 0px; left: 0px;width: 100%;height:100%;">
                </div> 
            </div> 
            <!-- Slides Container -->
            <div u="slides" class="jssorSlidesDimensions" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px;">
                <!-- Slide 1 Android connectivity -->
                <div>
                    <img u="image" src="../../images/slideAnimation/androidBackGround.jpg" />
                    <div u="caption" t="*" t2="*" style="position: absolute;top: 65px; right: 225px;">
                        <span style="color:#fff">
                            <h2>Controllo e Diagnostica</h2>
                            <h3>con applicazione smartphone</h3>
                        </span>
                    </div>
                    <img u="caption" t="T|IB" t2=B d=400 src="../../images/slideAnimation/iPhone6Hand.png" style="position:absolute;left:75px;top:80px;" />
                    <img u="caption" t="*" d=550 src="../../images/slideAnimation/feature-android.png" style="position:absolute;left:25px;top:50px;" />
                    <img u="caption" t="*" t2="*" d=700 src="../../images/slideAnimation/feature-ios.png" style="position:absolute;left:125px;top:50px;" />
                    <img u="caption" t="*" t2="*" d=1050 src="../../images/slideAnimation/9_white.png" width="150" height="auto" style="position:absolute;right:210px;top:230px;" />
                    <div u="caption" t="*" t2="*" du="900" style="position: absolute;top: 140px; left: 60px; width: 350px;height: 50px;">
                         <span style="color:#fff">
                           per IOS
                            &nbsp;&nbsp;&nbsp;&nbsp;per Android
                         </span>
                    </div>
                    <div u="caption" t="*" t2="*" du="1000" style="position: absolute;top: 410px; right: 380px;">
                        <span style="color:#fff;font-size:30px;">NINEDROID&nbsp;&nbsp;</span>
                    </div>
                     <div u="caption" t="*" t2="*" du="1000" style="position: absolute;bottom: 100px; right: 55px;">
                         <span style="color:#fff;font-size:30px;">Collegamento tramite Bluetooth</span>
                     </div>
                </div>

                <!-- Slide 2 nineBotE features -->
                <div>
                    <img u="image" src="../../images/slideAnimation/ninebotEBackGround.jpg" />
                    <div u="caption" t="*" t2="*" style="position: absolute;top: 50px; right: 155px;">
                        <span style="color:#fff">
							<span style="font-weight: 400; font-family: 'titillium web'; font-size: 60.015625px; color: rgb(160, 206, 78);">
                            	Ninebot E
							</span>
						</span>
                    </div>
                    <img u="caption" t="*" t2=B d=400 src="../../images/slideAnimation/nineBotE.png" style="position:absolute;right:275px;bottom: 100px;" width="300px" height="auto" />
<!--                    <img u="caption" t="RTTL|BR" d=550 src="../../images/slideAnimation/feature-android.png" style="position:absolute;left:25px;top:50px;" />
                    <img u="caption" t="*" t2="*" d=700 src="../../images/slideAnimation/feature-ios.png" style="position:absolute;left:125px;top:50px;" />
                    <img u="caption" t="*" t2="*" d=1050 src="../../images/slideAnimation/9_white.png" width="150" height="auto" style="position:absolute;right:210px;top:230px;" />
-->
                    <div u="caption" t="*" t2="*" du="900" style="position: absolute;top: 140px; left: 60px;">
                         <h3 class="greenButton">
                         	HIGH PERFORMANCE
                         </h3>
                    </div>
                    <div u="caption" t="*" t2="*" du="800" style="position: absolute;top: 180px; left: 60px;">
                         <h3 class="greenButtonTextInfo">
                         	20 KMPH, 30 AUTONOMIA
                         </h3>
                    </div>
                    <div u="caption" t="*" t2="*" du="900" style="position: absolute;top: 220px; left: 60px;">
                         <h3 class="greenButton">
                         	ELEGANTE
                         </h3>
                    </div>
                    <div u="caption" t="*" t2="*" du="800" style="position: absolute;top: 260px; left: 60px;">
                         <h3 class="greenButtonTextInfo">
                         	Il Robot per la tua vita quotidiana
                         </h3>
                    </div>
                    <div u="caption" t="*" t2="*" du="900" style="position: absolute;top: 300px; left: 60px;">
                         <h3 class="greenButton">
                         	VIVI SENZA BARRIERE
                         </h3>
                    </div>
                    <div u="caption" t="*" t2="*" du="800" style="position: absolute;top: 340px; left: 60px;">
                         <h3 class="greenButtonTextInfo">
                         	La vera libertÃ  su 2 ruote
                         </h3>
                    </div>
                    <div u="caption" t="*" t2="*" du="900" style="position: absolute;top: 380px; left: 60px;">
                         <h3 class="greenButton">
                         	OTTIMO SERVIZIO
                         </h3>
                    </div>
                    <div u="caption" t="*" t2="*" du="800" style="position: absolute;top: 420px; left: 60px;">
                         <h3 class="greenButtonTextInfo">
                         	22 Punti Servizio in Italia
                         </h3>
                    </div>
                </div>
				<style>
                    /* jssor slider arrow navigator skin 20 css */
                    /*
                    .jssora20l                  (normal)
                    .jssora20r                  (normal)
                    .jssora20l:hover            (normal mouseover)
                    .jssora20r:hover            (normal mouseover)
                    .jssora20l.jssora20ldn      (mousedown)
                    .jssora20r.jssora20rdn      (mousedown)
                    */
                    .jssora20l, .jssora20r {
                        display: block;
                        position: absolute;
                        /* size of arrow element */
                        width: 55px;
                        height: 55px;
                        cursor: pointer;
                        background: url(../../../Common/images/a20.png) no-repeat;
                        overflow: hidden;
                    }
                    .jssora20l { background-position: -3px -33px; }
                    .jssora20r { background-position: -63px -33px; }
                    .jssora20l:hover { background-position: -123px -33px; }
                    .jssora20r:hover { background-position: -183px -33px; }
                    .jssora20l.jssora20ldn { background-position: -243px -33px; }
                    .jssora20r.jssora20rdn { background-position: -303px -33px; }
                </style>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora20l" style="top: 243px; left: 8px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora20r" style="top: 243px; right: 8px;">
                </span>
            </div>
        </div>
	</div>
	<script>
/*		var cubeNum	=	0;
		$(function(){
			changeCubes();
		});
		var changeCubes	=	function(){
			$('.cubeWrap').css('display','none');
			$('.cubeWrap')[cubeNum].style.display	=	'block';
			setTimeout(function(){
				cubeNum	=	(cubeNum+3)%2;
				changeCubes();	
			},17000);
		};
*/	</script>
	<div class="centeredContent bottomBorderedContent paddedContent" style="float:left; width:100%;">
    	<div class="centeredInternalContent" style="width:100%; float:left">
        	<div class="actionHeadingImgBlock">
                <div class="imgContainer" >
                	<img src="../../images/ninebot_more/6.png" width="60%" />
                </div>
	            <div style="width:50%; float:left; margin:auto; margin-left:2%;">
                    <h1 style="width:80%; margin:auto">
                        <span class="blueColouredContent">Il futuro</span> Ã¨ adesso
                    </h1>
                    <div class="qouteSpan descriptionContainer">
                        <p><b>Ninebot</b> Ã¨ un nuovo mezzo di trasporto e la perfetta combinazione di design. Per saperne di piÃ¹!</p>
                    </div>
	                <a href="NinebotE.php"><input type="button" value="CLICCA QUI" class="hvr-pulse-grow actionButton" /></a>
	            </div>
            </div>
        </div>
    </div>
	<div class="centeredContent bottomBorderedContent paddedContent" style="float:left; width:100%;">
    	<div class="centeredInternalContent" style="width:100%; float:left">
        	<div class="actionHeadingImgBlock">
                <div class="imgContainer">
                	<img src="../../images/slideAnimation/iPhone6Hand.png" width="40%" />
                </div>
	            <div style="width:50%; float:left; margin:auto; margin-left:2%;">
                    <h1 style="width:80%; margin:auto">
                        <span class="blueColouredContent">Come funziona il Ninebot?</span>
                    </h1>
                    <div class="qouteSpan descriptionContainer">
                        <p>Il funzionamento dei Ninebot Ã¨ intuitivo e semplice allo stesso tempo. Inoltre, il Ninebot puÃ² essere personalizzato utilizzando l'applicazione smartphone, cosÃ¬ l'esperienza di guida Ã¨ benessere ottimizzato.</p>
                    </div>
	            </div>
            </div>
        </div>
    </div>
	<div class="centeredContent bottomBorderedContent paddedContent" style="float:left; width:100%;">
        <ul style="list-style-type:none; overflow:hidden; display:inline-flex; padding-bottom:15px; padding-right:40px;">
            <li class="blueContentBox">
                <div class="darkColourHeading">Ambiente</div>
                <div class="iconContainer"><img src="../../images/icons/environment.png" width="30" /></div>
                <div class="boxContent">
                    Nessuna emissione di CO2. Puoi parcheggiare il Ninebot in casa, evitando costosi garage e parcheggi
                </div>
            </li>
            <li class="blueContentBox">
                <div class="darkColourHeading">Design</div>
                <div class="iconContainer"><img src="../../images/icons/design.png" width="30" /></div>
                <div class="boxContent">
                    Linea elegante e pulita<br />
                    Disponibile in diversi colori .
                </div>
            </li>
            <li class="blueContentBox">
                <div class="darkColourHeading">Sicurezza</div>
                <div class="iconContainer"><img src="../../images/icons/security.png" width="30" /></div>
                <div class="boxContent">
                    Sistemi ridondanti. Allarmi e segnalazione puntuale di eventuali problemi.
                </div>
            </li>
        </ul>
    </div>
    <div class="centeredContent bottomBorderedContent">
        <ul style="list-style-type:none; overflow:hidden; display:inline-flex">
            <li class="whiteContentBox">
                <span>
                    Ninebot Ã¨ un robot autobilanciamente, un mezzo di trasporto nuovo e facile da usare
                </span>
            </li>
            <li class="whiteContentBox">
                <span>
                    Ninebot segue con grande precisione i movimenti del tuo corpo. La tecnologica del pendolo  invertito consente unâ€™istintiva conduzione del mezzo
                </span>
            </li>
            <li class="whiteContentBox">
                <span>
                    <a>Facile trasporto</a>
                    Pesa solo 23 kg, 20 senza manubrio e con le sue ridotte dimensioni entra nel gavone di una barca e, addirittura, nella porta di un treno ad alta velocitÃ  puÃ² entrare naturalmente anche in un ascensore o una scala mobile.
                </span>
            </li>
        </ul>
    </div>
    
	<div class="centeredContent bottomBorderedContent paddedContent" style="float:left; width:100%;">
    	<div class="centeredInternalContent" style="width:100%; float:left">
        	<div class="actionHeadingImgBlock">
	            <div style="width:90%; margin:auto; ">
                    <h1 style="width:80%; margin:auto">
                        <span class="blueColouredContent">Anche interessa Ninebot ? Contattarci in qualsiasi momento !</span>
                    </h1>
                    <div class="qouteSpan descriptionContainer" style="text-align:center">
                        <p>Siamo aperti a tutti i tipi di richieste e siamo felici di entrare in contatto personale con voi .</p>
                    </div>
	                <a href="contact.php"><input type="button" class="hvr-pulse-grow actionButton" value="CONTATTO" /></a>
	            </div>
            </div>
        </div>
    </div>
    
	<div class="centeredContent bottomBorderedContent paddedContent" style="float:left; width:100%; padding:0; margin-top:2%;background-color:#fff; color:#999 ">
    	<div class="centeredInternalContent" style="width:100%; float:left">
        	<div class="actionHeadingImgBlock">
                <h1 style="width:100%; margin:auto; height:62px; padding-top:12px">
                    <span><i>â€œNon sempre essere i primi significa essere i migliori...!â€�</i></span>
                </h1>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php';?>