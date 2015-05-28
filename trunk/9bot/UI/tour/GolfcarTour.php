<?php 
	require_once './header.php';
?>
	<link href="../../css/style.css" rel="stylesheet" type="text/css"/>
    <script>
        var pageIdentifier  =   'Tour';
        $(function(){
			startGolfSlides();
			$('.wrapper').append("<div id='pricingGolfCarTour'><span>For tour booking details and pricing information</span><button onclick='showModalInfo()'>Click Here</button></div>");
			
        });
        function showModalInfo (){
        	document.getElementsByClassName('modalWindow')[0].style.display="block";
        }
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
  padding: 25px;
  margin: 20px;
  box-shadow: 10px 5px 10px #999;
  cursor:pointer;
  min-height:80px;
  transition:all 0.5s;
  -webkit-transition:all 0.5s;
  -moz-transition:all 0.5s;
  color:#fff;
  font-size:20px;
  
}
.tourContainer:hover .tileGolf{
  box-shadow: 5px 2px 5px #bbb;
}
.golfCarSlider img{
}
.tourContainer:hover .golfTourDescription{
  box-shadow: 10px 5px 10px #999;
  border-left: 5px solid mediumturquoise;
  background:#666;
  color:#fff;
}
#pricingGolfCarTour{
	display:block;
	width:100%;
	position:fixed;
	bottom:0px;
	background:#fff;
	box-shadow:6px 2px 2px #ccc;
	text-align:center;
	font-size:20px;
	font-weight:bold;
	color:#666;
	float:left;
	padding:25px 0px;
	margin-top:80px;
	z-index:1;
}
#pricingGolfCarTour > button{
  color: #fff;
  background: none repeat scroll 0 0 mediumturquoise;
  border: 0 none;
  cursor: pointer;
  display: inline-block;
  font-size: 18px;
  font-weight: bold;
  line-height: 20px;
  margin-left: 15px;
  padding: 5px;
}
.header:hover ~#pricingGolfCarTour{
	display:none;
}
.golfTourDescription {
  float: right;
  width: 60%;
  min-height: 80px;
  padding: 25px;
  margin: 20px;
  background-color: #eee;
}
#golfCarTourTiles{
  margin: 0px auto;
  width: 100%;
  float:left;
  margin-bottom: 150px;
}
.tourContainer{
	width:98%;
	padding:1%;
	float:left;
}
.visibleImg{
	display: block !important;
}

/*
Page specific css only applies to golfcar tour page do not include in common css
*/

.footer{
	bottom:82px;
}
/*
*
*/


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
  z-index:8;
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
	-moz-animation:scaleBack 5s infinite ease-in, changeOpacity 5s infinite linear;
}
@keyframes changeOpacity{
	0%{opacity:0.2;}
	15%{opacity:1;}
	50%{opacity:1;}
	85%{opacity:1;}
	100%{opacity:0.2;}
}
@-webkit-keyframes changeOpacity{
	0%{opacity:0.2;}
	15%{opacity:1;}
	50%{opacity:1;}
	85%{opacity:1;}
	100%{opacity:0.2;}
}
@-moz-keyframes changeOpacity{
	0%{opacity:0.2;}
	15%{opacity:1;}
	50%{opacity:1;}
	85%{opacity:1;}
	100%{opacity:0.2;}
}
@keyframes scaleBack{
	0%{transform:scale3D(1,1,1);}
	100%{transform:scale3D(1.1,1.1,1.1);opacity:0.3;}
}
@-webkit-keyframes scaleBack{
	0%{transform:scale3D(1,1,1);}
	100%{transform:scale3D(1.2,1.2,1.2);}
}
@-moz-keyframes scaleBack{
	0%{transform:scale3D(1,1,1);opacity:0.5;}
	100%{transform:scale3D(1.1,1.1,1.1);opacity:0.3;}
}
table.golfTourCategory th ,table.golfTourCategory td {
  text-align: center;
  border: 1px solid;
}
.golfTourCategory{
	width:95%;
	margin:auto;
	font-size:13px;
}
.golfbookadd{
  width: 50%;
  margin: 25px auto;
  font-size: 16px;
  text-align: center;
  font-style: italic;
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
			<div class='tourContainer'>
				<div class='tileGolf'>
					Basic Rome tour the highlights of the city
				</div>
				<div class='golfTourDescription'>
					You’ll see Rome's main attractions, plus some hidden gems. In four hours we'll take you to the Colosseum (for an external view), the Trevi Fountain, the Pantheon, Piazza Navona and the Spanish Steps. You’ll visit all the star sights of Rome.
				</div>
			</div>
			<div class='tourContainer'>
				<div class='tileGolf'>
					Ancient Rome tour the Roman Empire			
				</div>
				<div class='golfTourDescription'>
					The Ancient Rome tour covers the area of Piazza Venezia, the Roman Forum, Circus Maximus, the Palatine Hill and the Colosseum. 			
				</div>
			</div>
			<div class='tourContainer'>
				<div class='tileGolf'>
					Discover Rome tour the hidden gems
				</div>
				<div class='golfTourDescription'>
					If you're already familiar with Rome's main highlights, this is the tour for you! You'll see that Rome isn’t just a tourist attraction, but a real city where people live their lives as they do in any other city. 
				</div>
			</div>
			<div class='tourContainer'>
				<div class='tileGolf'>
					Jewish Heritage the Jewish Ghetto of Rome
				</div>
				<div class='golfTourDescription'>
					We’ll reach the Jewish Ghetto via the quaint old streets of Rome, driving through Trastevere and across the thousands-year-old bridge to Tiber Island.
					If you want to visit the Synagogue and Jewish Museum, we can drop you off there at the end of the tour, or meet you there after you've finished your visit.
				</div>
			</div>
			<div class='tourContainer'>
				<div class='tileGolf'>
					Baroque Rome tour tucked away masterpieces
				</div>
				<div class='golfTourDescription'>
					As you’ll see, Rome is undoubtedly a Baroque city full of incredible masterpieces. 
					At the end of the tour we can drop you off wherever you like in central Rome or at the Vatican, to continue touring on your own. 
				</div>
			</div>
			<div class='tourContainer'>
				<div class='tileGolf'>
					Angels & Demons follow in Robert Langdon's footsteps...
				</div>
				<div class='golfTourDescription'>
					We start from Piazza del Popolo to see the church of Santa Maria del Popolo before moving on to see all the main locations of Angels and Demons. 
				</div>
			</div>
			<div class='tourContainer'>
				<div class='tileGolf'>
					Full-day tours Rome's highlights and more
				</div>
				<div class='golfTourDescription'>
					If this is your first visit to Rome, we suggest you take our "basic Rome" tour, which covers the city’s main sites and more in a day!
				</div>
			</div>
			<div class='tourContainer'>
				<div class='tileGolf'>
					6-hour tour a lot of Rome, but not too much ...
				</div>
				<div class='golfTourDescription'>
					In six hours you can see all the main attractions of central Rome and stretch your tour out to include the Old Appian Way and the Catacombs, for example. Or you can spend all your time in the city, seeing more of the tucked away, less famous sites.
				</div>
			</div>
			<div class='tourContainer'>
				<div class='tileGolf'>
					Rome by night enchanting atmosphere
				</div>
				<div class='golfTourDescription'>
					Come out with us tonight! 
					Rome is spectacular at night. Just imagine climbing the Capitoline Hill and seeing Michelangelo's square bathed in its almost mystical atmosphere before viewing the panorama of the Roman Forum from the top of the hill.
				</div>
			</div>
		</div>
	    <div class="modalWindow">
	       <div style="width:80%;height:500px; margin-top:100px;font-size:12px">
	        <a onclick="document.getElementsByClassName('modalWindow')[0].style.display='none';" title="Close" class="modalCloseButton">X</a>
	            <table class='golfTourCategory' cellspacing="0">
	            	<caption style="font-weight:bold;margin:10px;"> <u>Golf Car Tour Categories</u> </caption>
	            	<thead>
	            		<tr>
		            		<th align="center" width="20%">Tour Type</th>
		            		<th align="center" width="20%">Max no of people(per vehicle)</th>
		            		<th align="center" width="15%">Vehicle Type</th>
		            		<th align="center" width="10%">Price (Euros)</th>
		            		<th align="center" width="35%">Additional Charges</th>
		            	</tr>
	            	</thead>
	            	<tbody>
	            		<tr>
	            			<td rowspan="3">Half-day, 4-hour tours of Rome</td>
	            			<td>3</td>
	            			<td>Standard Cart</td>
	            			<td>240</td>
	            			<td rowspan="3">
	            				<ul>
	            					<li>each additional standard cart, 60 euros</li>
	            					<li>each additional driver, 60 euros</li>
	            					<li>Headsets and microphone : 2 Euros per person</li>
	            				</ul>
	            			</td>
	            		</tr>
	            		<tr>
	            			<td>3</td>
	            			<td>Deluxe</td>
	            			<td>270</td>
	            		</tr>
	            		<tr>
	            			<td>7</td>
	            			<td>Limo</td>
	            			<td>340</td>
	            		</tr>
	            		<tr>
	            			<td rowspan="3">6-hour tours of Rome</td>
	            			<td>3</td>
	            			<td>Standard</td>
	            			<td>360</td>
	            			<td rowspan="3">
	            				<ul>
	            					<li>each additional standard cart, 80 euros</li>
	            					<li>each additional driver, 80 euros</li>
	            					<li>Headsets and microphone : 3 Euros per person</li>
	            				</ul>
	            			</td>
	            		</tr>
	            		<tr>
	            			<td>3</td>
	            			<td>Deluxe</td>
	            			<td>390</td>
	            		</tr>
	            		<tr>
	            			<td>7</td>
	            			<td>Limo</td>
	            			<td>450</td>
	            		</tr>
	            		<tr>
	            			<td rowspan="3">3-hour tours of Rome by night</td>
	            			<td>3</td>
	            			<td>Standard</td>
	            			<td>200</td>
	            			<td rowspan="3">
	            				<ul>
	            					<li>each additional standard cart, 40 euros</li>
	            					<li>Headsets and microphone : 2 Euros per person</li>
	            					<li>each additional driver, 50 euros</li>
	            				</ul>
	            			</td>
	            		</tr>
	            		<tr>
	            			<td>3</td>
	            			<td>Deluxe</td>
	            			<td>240</td>
	            		</tr>
	            		<tr>
	            			<td>7</td>
	            			<td>Limo</td>
	            			<td>300</td>
	            		</tr>
	            		<tr>
	            			<td rowspan="3">Full-day, 8-hour tours of Rome</td>
	            			<td>3</td>
	            			<td>Standard</td>
	            			<td>450</td>
	            			<td rowspan="3">
	            				<ul>
	            					<li>each additional standard cart, 100 euros</li>
	            					<li>each additional driver, 100 euros</li>
	            					<li>Headsets and microphone : 3 Euros per person</li>
	            				</ul>
	            			</td>
	            		</tr>
	            		<tr>
	            			<td>3</td>
	            			<td>Deluxe</td>
	            			<td>520</td>
	            		</tr>
	            		<tr>
	            			<td>7</td>
	            			<td>Limo</td>
	            			<td>600</td>
	            		</tr>
	            		<tr>
	            			<td rowspan="2">Round trip transfer from the port</td>
	            			<td>4</td>
	            			<td>Sedan</td>
	            			<td>300</td>
	            			<td rowspan="2">-</td>
	            		</tr>
	            		<tr>
	            			<td>8</td>
	            			<td>Minivan</td>
	            			<td>350</td>
	            		</tr>
	            	</tbody>
	            </table>
	            <div class='golfbookadd'>
	            	<span style=''>For booking call us at +39 39290349274 </span>
	            	<br/>
	            	or
	            	<br/>
	            	<span>mail us @ <u>Ninebot.servizioclienti@gmail.com</u></span>
	            </div>
	       </div>
	    </div>
	</div>
<?php 
	require_once './footer.php';
?>
