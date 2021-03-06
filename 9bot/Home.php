<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Common/css/figCaptionOnHover.css" />
    <link rel="stylesheet" type="text/css" href="../Common/css/cssForJssorSliders.css" />
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" type="text/css" href="css/moreHome.css" />
    <link rel="stylesheet" type="text/css" href="../Common/css/regionWithFlags.css" />
    <link rel="stylesheet" type="text/css" href="css/news.css" />

    <?php require_once 'require.php';?>
	<script src="../Common/js/jssor.slider.mini.js" type="text/javascript"></script>
    <script src="js/homePageAnimation.js" type="text/javascript"></script>
	<script>
        $(function(){
			HomePageSlideShow(false, 'homePageImageSlider', false);
		});
		var pathToActionDir	=	'./actions/';
		var PageType	=	1;
		var DivSectionSelector	=	'.contentNewsItems';
		var pathToNewsImageDir	=	'./images/newsAndEvents/';
    </script>        
    <script src="js/CreateNews.js" type="text/javascript"></script>
</head>
<body>
    <div class="wrapper">
        <div class="header" style="background: none;">
            <div class="logo">
                <img class="logoImg" src="images/icons/ninebot.png" alt="NINEBOT"/>
            </div>
            <div class="selectRegion">
                <div class="lang">
                    <span class="choose">Il Mondo</span>
                    <div class="region">
                        <a href="http://www.ninebot.cn" target="_blank" class="region1">CHN</a>
                        <a href="http://www.segway.com/" target="_blank" class="america">Segway</a>
                        <a href="http://www.ninebotme.com" target="_blank" class="region-alianqiu">UAE</a>
                        <a href="http://www.ninebot.ro" target="_blank" class="region-luomaniya">ROU</a>
                        <a href="http://www.ecopro.asia" target="_blank" class="region-malaixiya">MAL</a>
                        <a href="http://ninebotus.com/" target="_blank" class="america">USA</a>
                        <a href="http://www.9botitalia.com" target="_blank" class="region24">ITA</a>
                        <a href="http://starfleet.co.kr/html/" target="_blank" class="region3">KOR</a>
                        <a href="http://www.ninebot.no" target="_blank" class="region4">NOR</a>
                        <a href="http://www.ninebot-belgium.com" target="_blank" class="region16">BEL</a>
                        <a href="http://www.ninebot-spain.com/" target="_blank" class="region9">ESP</a>
                        <a href="http://www.ninebot.ca" target="_blank" class="region10">CAN</a>
                        <a href="http://www.ninebot-france.com" target="_blank" class="region6">FRA</a>
                        <a href="http://www.stay-mobile.ch/" target="_blank" class="region11">CHE</a>
                        <a href="http://www.ninebot.at" target="_blank" class="region7">AUT</a>
                        <a href="http://www.ninebot.hu" target="_blank" class="region8">HUN</a>
                        <a href="http://www.ninebot.com.au/" target="_blank" class="region12">AUS</a>
                        <a href="http://www.ninebot.co.za/" target="_blank" class="region13">ZAF</a>
                        <a href="http://www.ninebot.asia/" target="_blank" class="region14">SGP</a>
                        <a href="http://www.cartsnwheels.com/" target="_blank" class="region15">KSA</a>
                        <a href="http://www.ninebot.lu/" target="_blank" class="region17">LUX</a>
                        <a href="http://www.ninebot.cz/" target="_blank" class="region18">CZE</a>
                        <a href="http://www.ninebot.jp/" target="_blank" class="region19">JPN</a>
                        <a href="http://www.ninebotthailand.com/" target="_blank" class="region20">TH</a>
                        <a href="http://www.ninebotnederland.nl/" target="_blank" class="region21">NLD</a>
                        <a href="http://www.9bot.pl/" target="_blank" class="region22">POL</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <!--Slide show in below container-->
            <div class="contentSlideShow">
                <div id="homePageImageSlider" class="jssorSlidesDimensions">
                    <!-- Loading Screen --> 
                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block; background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;"> 
                        </div> 
                        <div style="position: absolute; display: block; background: url(../Common/images/loading.gif) no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;">
                        </div> 
                    </div> 
                    <!-- Slides Container -->
                    <div u="slides" class="jssorSlidesDimensions" style="cursor: move; position: absolute;">
                        <div>
                            <img u="image" src="images/homePageAnimationImages/1.png" />
						</div>
                        <div>
                            <img u="image" src="images/homePageAnimationImages/2.png" />
						</div>
                        <div>
                            <img u="image" src="images/homePageAnimationImages/3.png" />
						</div>
                        <div>
                            <img u="image" src="images/homePageAnimationImages/4.png" />
						</div>
                        <div>
                            <img u="image" src="images/homePageAnimationImages/5.png" />
						</div>
                        <div>
                            <img u="image" src="images/homePageAnimationImages/6.png" />
						</div>
                        <div>
                            <img u="image" src="images/homePageAnimationImages/7.png" />
						</div>
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora20l" style="top: 243px; left: 8px;"></span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora20r" style="top: 243px; right: 8px;"></span>
					</div>
				</div>
            </div>
            
            
            <!--Menu Icons in below container-->
            <div class="contentMenuIcons">
                <div class="captionOnHoverContainer">
                    <img src="images/homePageIcons/ninebotMore.png" />
                    <div>
                        <div class="captionCentered">
                            <h2>NINEBOT & MORE</h2>
                        </div>
                    </div>
                    <a href="UI/Ninebot&more/more.php">&nbsp;</a>
               </div>
                <div class="captionOnHoverContainer">
                    <img src="images/homePageIcons/toursIcon.png" />
                    <div>
                        <div class="captionCentered">
                            <h2>TOURS</h2>
                        </div>
                    </div>
                    <a href="http://www.ninebottours.it/9bot/UI/tour/index.php">&nbsp;</a>
                </div>
                <div class="captionOnHoverContainer">
                    <img src="images/homePageIcons/ninebotOne.png" />
                    <div>
                        <div class="captionCentered">
                            <h2>NINEBOT ONE</h2>
                        </div>
                    </div>
                    <a href="UI/Ninebot&more/NinebotOne.php">&nbsp;</a>
                </div>
                <div class="captionOnHoverContainer">
                    <img src="images/homePageIcons/ninebotMoreStores.png" />
                    <div>
                        <div class="captionCentered">
                            <h2>RIVENDITORI</h2>
                        </div>
                    </div>
                    <a href="UI/Ninebot&more/contact.php">&nbsp;</a>
                </div>
                <div class="captionOnHoverContainer">
                    <img src="images/homePageIcons/ninoRobotics.png" />
                    <div>
                        <div class="captionCentered">
                            <h2>NINO ROBOTICS</h2>
                        </div>
                    </div>
                    <a href="UI/Ninebot&more/ninoRobotics.php">&nbsp;</a>
                </div>
            </div>
            <div class="contentNewsItems"></div>
<!--            <a class="moreNewsLink" href="UI/Ninebot&more/events.php">more...</a>
-->        </div>
        <div class="footer">
            <div class="copyrights">
                ©9bot Italia. Tutti i diritti riservati &nbsp;&nbsp; Powered by <a href="http://www.aapastech.com">Aapastech</a>
            </div>
        </div>
    </div>
</body>
</html>
