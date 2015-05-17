<?php 
	require_once './header.php';
?>
    <script>
        var pageIdentifier  =   'Home';
    </script>
	<div class="content">
		<div class="nuovotoplogo"></div>
		<div class="slider">
			<div class="nav" id="nav_left">
				<img class='nav_arrow' src="../../images/icons/left.png" alt="prev" onclick="slideImg(2);"/>
			</div>
			<div class="nav" id="nav_right">
				<img class='nav_arrow' src="../../images/icons/right.png" alt="next" onclick="slideImg(1);"/>
			</div>
			<img src="" id="contactSlider" style="box-shadow: 3px 3px 3px #666;height:100%;"/>
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
