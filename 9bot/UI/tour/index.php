<?php 
	require_once './header.php';
?>
   <style>
       .jssorSlidesDimensions{
           width:1920px;
           height:750px;
       }
   </style>
    <script>
        var pageIdentifier  =   'Home';
        $(function ($) {
            HomePageSlideShow(false, 'testSlider');
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
            <div u="slides" class="jssorSlidesDimensions" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px;">
                <div>
                    <img u="image" src="../../images/tours/1.jpg" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/2.jpg" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/3.jpg" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/5.jpg" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/6.jpg" />
                </div>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora20l" style="top: 243px; left: 8px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora20r" style="top: 243px; right: 8px;">
                </span>
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
