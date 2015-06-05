<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Common/css/figCaptionOnHover.css" />
    <link rel="stylesheet" type="text/css" href="../Common/css/cssForJssorSliders.css" />
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" type="text/css" href="css/moreHome.css" />
    <link rel="stylesheet" type="text/css" href="../Common/css/regionWithFlags.css" />
    <?php require_once 'require.php';?>
	<script src="../Common/js/jssor.slider.mini.js" type="text/javascript"></script>
    <script src="js/homePageAnimation.js" type="text/javascript"></script>
	<script>
        $(function(){
			HomePageSlideShow(false, 'homePageImageSlider');
		});
    </script>        
</head>
<body>
    <div class="wrapper">
        <div class="header" style="background: none;">
            <div class="logo">
                <img class="logoImg" src="images/icons/ninebot.png" alt="NINEBOT"/>
            </div>
            <div class="selectRegion">
                <div class="lang">
                    <span class="choose">Choose Region</span>
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
                <div id="homePageImageSlider" class="jssorSlidesDimensions" style="position: relative; top: 0px; left: 0px; margin:auto; overflow: hidden;">
                    <!-- Loading Screen --> 
                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block; background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;"> 
                        </div> 
                        <div style="position: absolute; display: block; background: url(../Common/images/loading.gif) no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;">
                        </div> 
                    </div> 
                    <!-- Slides Container -->
                    <div u="slides" class="jssorSlidesDimensions" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px;">
                        <div>
                            <img u="image" src="images/slideAnimation/main_bg.png" />
                            <img u="caption" t="*" t2="*" d="-10" src="images/homePageAnimationImages/ninebotE4.png" width="30%" style="position:absolute;left:30%;top:10px;" />
						</div>
                        <div>
                            <img u="image" src="images/homePageAnimationImages/ninebotOne1.png" />
						</div>
                        <div>
                            <img u="image" src="images/homePageAnimationImages/ninebotOne2.png" />
						</div>
                        <div>
                            <img u="image" src="images/homePageAnimationImages/ninebotOne3.png" />
						</div>
                        <div>
                            <img u="image" src="images/homePageAnimationImages/ninebotE3.png" />
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
                            <h2>NINEBOT STORES</h2>
                        </div>
                    </div>
                    <a href="UI/Ninebot&more/contact.php">&nbsp;</a>
                </div>
            </div>
            
            <!--News Items-->
            <div class="contentNewsItems">
            	<h3>News</h3>
            	<div class="newsItem">
                    <div class="newsFig hvr-float-shadow">
                       	<img src="images/newsAndEvents/1025.jpg" alt="Ninebot E" style="max-width:100%;max-height:300px;">
                    </div>
                	<div class="newsHeadline"><h3>Nuova proposta 9botitalia per noleggio stagionale, 1 Ninebot E a soli € 200,00 al mese</h3></div>
                    <div class="newsDescription qouteSpan">
                      <p>Visto il notevole successo del noleggio stagionale per <span id="nic" style="display:none"></span>6 mesi, New Moving Coop propone ai suoi partner la possibilità di noleggiare i Ninebot Elite anche con formule di 5, 4 e 3 mesi (da giugno ad ottobre), senza la possibilità di riscatto a fine locazione.</p>
                      <p>Chiedi maggiori informazioni nel Ninebot Official Store a te più vicino o contatta il nostro servizio clienti: <a href="mailto:ninebot.servizioclienti@gmail.com" target="_blank">ninebot.servizioclienti@gmail.com</a> o <a href="tel:3929034924" target="_blank">3929034924</a></p>
                    </div>
                </div>
            	<div class="newsItem">
                    <div class="newsFig hvr-float-shadow">
                       	<img src="images/newsAndEvents/1038.jpg" alt="Bizzeffe e" style="max-width:100%;max-height:300px;">
                    </div>
                	<div class="newsHeadline"><h3>Accordo tra Bizzeffe e 9botitalia: Per le agenzie bizzeffe sconto su Ninebot E</h3></div>
                    <div class="newsDescription qouteSpan">
                      <div>E' stato siglato un importante accordo tra:</div>
                      <div><strong>New </strong><strong><span lang="EN-US">Moving</span></strong><strong> coop</strong> distributore esclusivo dei prodotti <strong>Ninebot</strong> (con il marchio<strong> 9botitalia)</strong></div>
                      <div> e </div>
                      <div><strong>"Bizzeffe</strong>" il nuovo Net-work che raccoglie più di 100 agenzie di viaggio e alcuni tra i più importanti Buyers internazionali</div>
                      <div><br>
                      </div>
                      <div>Tutte le agenzie di viaggio che aderiscono a<strong> Bizzeffe</strong> potranno comprare o noleggiare con lo sconto del 5% i prodotti <strong>9botitalia</strong> e per il turismo accessibile </div>
                      <div><strong>Nino R</strong><strong><span lang="EN-US">obotics</span></strong>.</div>
                      <div><br>
                      </div>
                      <div>Vedi anche:</div>
                      <div><a href="http://www.bizzeffe.it/9bot/" target="_blank">http://www.bizzeffe.it/9bot/</a></div>
                      <div></div>
                      <div><a href="http://ow.ly/NhXpK" target="_blank">http://ow.ly/NhXpK</a></div>
                      <div><br>
                      </div>
                      <div><strong>9botitalia</strong> e<strong> Bizzeffe</strong> parteciperanno insieme ad una serie di eventi tra i più importanti nell'ambito del turismo e del turismo accessibile ad iniziare dal 4 giugno con la giornata romana di <img alt="Inline image 1" height="24" src="images/icons/expo.png" width="95"> 2015 all'ARA PACIS.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyrights">
                ©SPANTECHS | © 2014 Ninebot Italia | Tutti i diritti riservati
            </div>
        </div>
    </div>
    <script src="js/commonRequire.js" type="text/javascript"></script>
</body>
</html>
