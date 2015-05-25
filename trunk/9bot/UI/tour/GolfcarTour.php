<?php 
	require_once './header.php';
?>
    <script>
        var pageIdentifier  =   'Tour';
        $(function(){
			startGolfSlides();
        });
        function startGolfSlides(){
			setInterval(function(){
				activeImg	=	$('.golfCarSlider').find('img.visibleImg');
				nextImg	=	$(activeImg).next('img');
				if(nextImg.length == 0)
					nextImg	=	$('.golfCarSlider').find('img')[0];	
				activeImg.removeClass('visibleImg');
				$(nextImg).addClass('visibleImg');
			},5000);
        }
    </script>
    <style>
.tileGolf {
  width: 20%;
  background-color: mediumturquoise;
  float:left;
  text-align: center;
  float:left;	
  padding: 50px;
  margin: 20px;
  box-shadow: 10px 5px 10px #999;
  cursor:pointer;
  min-height:80px;
  transition:all 0.5s;
  color:#fff;
  font-size:20px;
  
}
.tileGolf:hover {
  box-shadow: 5px 2px 5px #bbb;
}
.tileGolf:hover + .golfTourDescription {
  box-shadow: 10px 5px 10px #999;
  border-left: 5px solid mediumturquoise;
  background:#666;
  color:#fff;
}
.golfCarSlider img{
}
.golfTourDescription:hover{
  box-shadow: 10px 5px 10px #999;
  border-left: 5px solid mediumturquoise;
  background:#666;
  color:#fff;
}
.golfTourDescription {
  float: left;
  width: 50%;
  min-height: 80px;
  padding: 50px;
  margin: 20px;
  background-color: #eee;
}
#golfCarTourTiles{
  margin: 0px auto;
  width: 90%;
}
.visibleImg{
	display: block !important;
}
.textButtonBig{
  color: #fff;
  background:none repeat scroll 0 0 mediumturquoise;
  border: 0 none;
  cursor: pointer;
  display: block;
  font-size: 18px;
  font-weight: bold;
  line-height: 20px;
  padding: 20px;
  text-transform: none;
  transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -webkit-transition: all 0.3s ease 0s;
  width: 100%;
  text-align: center;
  position:absolute;
  z-index:150;
  opacity:0.75;
}
.textButtonBig:hover{
	opacity:1;
  box-shadow: 10px 5px 10px #999;
	
}
.golfCarSlider{
	width:100%;
	overflow:hidden;
}
.golfCarSlider > img{
	display:none;
	width:100%;
	animation:scaleBack 5s infinite ease-in, changeOpacity 5s infinite linear;
	-webkit-animation:scaleBack 5s infinite ease-in, changeOpacity 5s infinite linear;
	-moz-animation:scaleBack 5s infinite ease-in-out;
}
@keyframes scaleBack{
	0%{transform:scale3D(1,1,1);}
	100%{transform:scale3D(1.1,1.1,1.1);opacity:0.3;}
}
@-webkit-keyframes changeOpacity{
	0%{opacity:0.2;}
	15%{opacity:1;}
	50%{opacity:1;}
	85%{opacity:1;}
	100%{opacity:0.2;}
}
@-webkit-keyframes scaleBack{
	0%{transform:scale3D(1,1,1);}
	100%{transform:scale3D(1.2,1.2,1.2);}
}
@-moz-keyframes scaleBack{
	0%{transform:scale3D(1,1,1);opacity:0.5;}
	100%{transform:scale3D(1.1,1.1,1.1);opacity:0.3;}
}




    </style>
	<div class="content">
		<div class='golfCarSlider'>
			<button class='textButtonBig' onclick="location.href='#golfCarTourTiles'">Choose your favorite GOLFCAR TOUR</button>
			<img src='../../images/tours/golfcar/1.jpg' class='visibleImg'/>
			<img src='../../images/tours/golfcar/2.jpg'/>
			<img src='../../images/tours/golfcar/3.jpg'/>
			<img src='../../images/tours/golfcar/4.jpg'/>
			<img src='../../images/tours/golfcar/5.jpg'/>
			<img src='../../images/tours/golfcar/6.jpg'/>
			<img src='../../images/tours/golfcar/7.jpg'/>
		</div>
		<div id='golfCarTourTiles'>
			<div class='tileGolf'>
				Basic Rome tour the highlights of the city
			</div>
			<div class='golfTourDescription'>
				You’ll see Rome's main attractions, plus some hidden gems. In four hours we'll take you to the Colosseum (for an external view), the Trevi Fountain, the Pantheon, Piazza Navona and the Spanish Steps. You’ll visit all the star sights of Rome.
			</div>
			<div class='tileGolf'>
				Ancient Rome tour the Roman Empire			
			</div>
			<div class='golfTourDescription'>
				The Ancient Rome tour covers the area of Piazza Venezia, the Roman Forum, Circus Maximus, the Palatine Hill and the Colosseum. 			
			</div>
			<div class='tileGolf'>
				Discover Rome tour the hidden gems
			</div>
			<div class='golfTourDescription'>
				If you're already familiar with Rome's main highlights, this is the tour for you! You'll see that Rome isn’t just a tourist attraction, but a real city where people live their lives as they do in any other city. 
			</div>
			<div class='tileGolf'>
				Jewish Heritage the Jewish Ghetto of Rome
			</div>
			<div class='golfTourDescription'>
				We’ll reach the Jewish Ghetto via the quaint old streets of Rome, driving through Trastevere and across the thousands-year-old bridge to Tiber Island.
				If you want to visit the Synagogue and Jewish Museum, we can drop you off there at the end of the tour, or meet you there after you've finished your visit.
			</div>
			<div class='tileGolf'>
				Baroque Rome tour tucked away masterpieces
			</div>
			<div class='golfTourDescription'>
				As you’ll see, Rome is undoubtedly a Baroque city full of incredible masterpieces. 
				At the end of the tour we can drop you off wherever you like in central Rome or at the Vatican, to continue touring on your own. 
			</div>
			<div class='tileGolf'>
				Angels & Demons follow in Robert Langdon's footsteps...
			</div>
			<div class='golfTourDescription'>
				We start from Piazza del Popolo to see the church of Santa Maria del Popolo before moving on to see all the main locations of Angels and Demons. 
			</div>
			<div class='tileGolf'>
				Full-day tours Rome's highlights and more
			</div>
			<div class='golfTourDescription'>
				If this is your first visit to Rome, we suggest you take our "basic Rome" tour, which covers the city’s main sites and more in a day!
			</div>
			<div class='tileGolf'>
				6-hour tour a lot of Rome, but not too much ...
			</div>
			<div class='golfTourDescription'>
				In six hours you can see all the main attractions of central Rome and stretch your tour out to include the Old Appian Way and the Catacombs, for example. Or you can spend all your time in the city, seeing more of the tucked away, less famous sites.
			</div>
			<div class='tileGolf'>
				Rome by night enchanting atmosphere
			</div>
			<div class='golfTourDescription'>
				Come out with us tonight! 
				Rome is spectacular at night. Just imagine climbing the Capitoline Hill and seeing Michelangelo's square bathed in its almost mystical atmosphere before viewing the panorama of the Roman Forum from the top of the hill.
			</div>
		</div>
	</div>
<?php 
	require_once './footer.php';
?>
