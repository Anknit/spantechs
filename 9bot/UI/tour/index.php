<?php 
	require_once './header.php';
?>
   <style>
       .jssorSlidesDimensions{
           width:1920px;
           height:600px;
       }
   </style>
    <script>
        var pageIdentifier  =   'Home';
        $(function ($) {
            captionSlider   =   false;
            sliderID        =   'testSlider';
            listThumbNail   =   true;
            HomePageSlideShow(captionSlider, sliderID, listThumbNail);
        });
    </script>        
	<div class="content">
        <div id="testSlider" class="jssorSlidesDimensions">
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
            <div u="slides" class="jssorSlidesDimensions" style="cursor: move; position: absolute;">
                <div>
                    <img u="image" src="../../images/tours/1.png" />
                    <div u="thumb">
                        <img class="i" src="../../images/tours/1.png" /><div class="t">Roam in Rome</div>
                        <div class="c">Roam around the Rome by various means</div>
                    </div>
                </div>
                <div>
                    <img u="image" src="../../images/tours/2.png" />
                     <div u="thumb">
                        <img class="i" src="../../images/tours/2.png" />
                        <div class="t">
                            Ninebot tours
                            <a href="NinebotTour.php" class="anchorOnListNavigator">Tour details...</a>
                        </div>
                        <div class="c">
                            Explore Rome while riding Ninebot
                        </div>
                    </div>
               </div>
                <div>
                    <img u="image" src="../../images/tours/5.png" />
                    <div u="thumb">
                        <img class="i" src="../../images/tours/5.png" />
                        <div class="t">
                            Vespa tours
                            <a href="VespaTour.php" class="anchorOnListNavigator">Tour details...</a>
                        </div>
                        <div class="c">
                            Vespa brings comfort to your journey
                        </div>
                    </div>
                </div>
                <div>
                    <img u="image" src="../../images/tours/3.png" />
                    <div u="thumb">
                        <img class="i" src="../../images/tours/3.png" />
                        <div class="t">
                            Golfcar tours
                            <a href="GolfcarTour.php" class="anchorOnListNavigator">Tour details...</a>
                        </div>
                        <div class="c">
                            Sit back relax, and treat your eyes
                        </div>
                    </div>
                </div>
                <div>
                    <img u="image" src="../../images/tours/4.png" />
                    <div u="thumb">
                        <img class="i" src="../../images/tours/4.png" />
                        <div class="t">
                            Bike tours
                            <a href="BikeTour.php" class="anchorOnListNavigator">Tour details...</a>
                        </div>
                        <div class="c">
                            Pushing yourself in travelling brings gratification
                        </div>
                    </div>
                </div>
                <div>
                    <img u="image" src="../../images/tours/7.png" />
                    <div u="thumb">
                        <img class="i" src="../../images/tours/7.png" />
                        <div class="t">
                            Catania tours
                            <a href="CataniaTour.php" class="anchorOnListNavigator">Tour details...</a>
                        </div>
                        <div class="c">
                            Lets segway to catania
                        </div>
                    </div>
                </div>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora20l" style="top: 243px; left: 8px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora20r" style="top: 243px; right: 8px;">
                </span>
            </div>
            <div u="thumbnavigator" class="jssort11" style="right: 10px; margin: 15% 0% 0% 0%;">
                <!-- Thumbnail Item Skin Begin -->
                <div u="slides" style="cursor: default;">
                    <div u="prototype" class="p" style="top: 0; left: 0;">
                        <div u="thumbnailtemplate" class="tp"></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
        </div>
		<div id="tourCatalogue">
			<div class="floatContainerDiv">
	           	<a href="NinebotTour.php">
		           	<div class="headingFloatDiv"><span class="color_nine">Ninebot</span><span class="color_bot">Tours</span></div>
		           	<div class="imageFloatDiv"><img src="../../images/tours/type/Ninebot_Tour.jpg"></img></div>
		           	<div class="footerFloatDiv"><span class="color_9"><b>Book Now !!</b></span></div>
	           	</a>
			</div>
			<div class="floatContainerDiv">
	           	<a href="GolfcarTour.php">
		           	<div class="headingFloatDiv"><span class="color_nine">Golfcar</span><span class="color_bot">Tours</span></div>
		           	<div class="imageFloatDiv"><img src="../../images/tours/type/Golfcar_Tour.jpg"></img></div>
		           	<div class="footerFloatDiv"><span class="color_9"><b>Book Now !!</b></span></div>
				</a>
			</div>
			<div class="floatContainerDiv">
	           	<a href="BikeTour.php">
		           	<div class="headingFloatDiv"><span class="color_nine">Bike</span><span class="color_bot">Tours</span></div>
		           	<div class="imageFloatDiv"><img src="../../images/tours/type/Bike_Tour.jpg"></img></div>
		           	<div class="footerFloatDiv"><span class="color_9"><b>Book Now !!</b></span></div>
				</a>
			</div>
			<div class="floatContainerDiv">
	           	<a href="VespaTour.php">
		           	<div class="headingFloatDiv"><span class="color_nine">Vespa</span><span class="color_bot">Tours</span></div>
		           	<div class="imageFloatDiv"><img src="../../images/tours/type/Vespa_Tour.jpg"></img></div>
		           	<div class="footerFloatDiv"><span class="color_9"><b>Book Now !!</b></span></div>
				</a>
			</div>
			<div class="floatContainerDiv">
	           	<a href="JoggingTour.php">
		           	<div class="headingFloatDiv"><span class="color_nine">Jogging</span><span class="color_bot">Tours</span></div>
		           	<div class="imageFloatDiv"><img src="../../images/tours/type/Jogging_Tour.jpg"></img></div>
		           	<div class="footerFloatDiv"><span class="color_9"><b>Book Now !!</b></span></div>
				</a>
			</div>
			<div class="floatContainerDiv">
	           	<a href="CataniaTour.php">
		           	<div class="headingFloatDiv"><span class="color_nine">Catania</span><span class="color_bot">Tours</span></div>
		           	<div class="imageFloatDiv"><img src="../../images/tours/type/Catania_Tour.jpg"></img></div>
		           	<div class="footerFloatDiv"><span class="color_9"><b>Book Now !!</b></span></div>
				</a>
			</div>
		</div>
	</div>
<?php 
	require_once './footer.php';
?>
