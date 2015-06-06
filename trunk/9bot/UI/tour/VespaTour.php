<?php 
	require_once './header.php';
?>
	<link href="../../css/style.css" rel="stylesheet" type="text/css"/>
    <script>
        var pageIdentifier  =   'Tour';
        $(function ($) {
            HomePageSlideShow(false, 'testSlider');
        });
    </script>
    <style>
        .VespaTourItem {
          padding: 20px;
          border: 1px solid #ccc;
          width: 80%;
          margin: 20px auto;
          box-shadow: 6px 4px 10px #666;
          display: table;
          transition:all 0.5s;
        }
        .VespaTourItem:hover {
          border-width: 5px;
          box-shadow: rgb(170, 170, 170) 6px 1px 20px;
        }
        .vespaTourName {
          float: left;
          width: 100%;
          /* box-sizing: content-box; */
          /* padding: 0px 15px; */
        }
        .vespaTourName h3 {
          text-align: center;
          color: #05B9BD;
          text-transform: uppercase;
          font-size: 25px;
          margin: 5px 0px;
        }
        .tourPoints {
          padding: 5px 10px;
        }
        .VespaTourDetail {
          float: left;
          width: 100%;
        }
        .VespaTourDetail ul {
          list-style-type: none;
          margin-left: 10px;
        }
        .VespaTourDetail li {
          padding: 5px 10px;
          transition:margin 1s;
          margin-top:15px;
          font-style:italic;
        }
        .VespaTourDetail li:hover {
          margin-left: 15px;
          border-left: 3px solid rgb(102, 205, 170);
          background-color: rgb(102, 102, 102);
          color: rgb(255, 255, 255);
        }
        .tourPoints li {
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 15px;
          padding: 5px;
          cursor: pointer;
          transition: all 0.5s;
          margin:5px 20px 0px 5px;
          box-shadow: 2px 1px 2px #aaa;
        }
        .tourPoints li:hover {
          box-shadow: 6px 2px 4px #aaa;
          background:#666 !important;
          color:#fff;
        }
        .tourPoints li::after {
          content: '\21D2';
          margin-left: 10px;
          position: absolute;
          font-size: 24px;
          margin-top: -5px;
          color:#000 !important;
        }
        .tourPoints li:last-child::after {
            content: '';
        }
        .tourPoints li:first-child{
            background:lightgreen;
        }
        .tourPoints li:last-child{
            background:lightgreen;
        }
        .briefVespa {
          padding: 15px;
          margin: 15px auto;
          width: 80%;
          font-style: italic;
          font-size: 18px;
        }
    </style>
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
                    <img u="image" src="../../images/tours/vespa/1.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/vespa/2.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/vespa/3.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/vespa/4.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/vespa/5.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/vespa/6.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/vespa/7.png" />
                </div>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora20l" style="top: 243px; left: 8px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora20r" style="top: 243px; right: 8px;">
                </span>
            </div>
        </div>
		<div class='tourContent'>
			<div class='VespaTourItem'>
				<div class='vespaTourName'>
					<h3>
					The essence of Rome
					</h3>
					<div class='briefVespa'>
						This Vespa tour is also available from sunset to lighting-up time, March to October. Timetables may vary according to the season.
						<br/>
						Please wear comfortable clothing and sneakers. It sometimes rains in autumn, winter and spring, but Rome’s temperate climate lets you ride your Vespa without problems. We suggest you bring a raincoat with you. Backpacks for your personal belongings are also available.
					</div>
					<div class='tourPoints'>
						<ul>
							<li>Start Point: Trastevere</li>
							<li>Via di San Teodoro</li>
							<li>Circus Maximus</li>
							<li>Colosseum</li>
							<li>Oppian Hill (Colle Oppio)</li>
							<li>imperial forums</li>
							<li>Piazza Venezia</li>
							<li>Quirinale</li>
							<li>Trevi Fountain</li>
							<li>Via del Corso</li>
							<li>Via del Tritone</li>
							<li>Via Veneto</li>
							<li>Piazza di Spagna</li>
							<li>Pincio</li>
							<li>Ara Pacis</li>
							<li>Corso Rinascimento</li>
							<li>Pantheon</li>
							<li>Campo de Fiori</li>
							<li>Piazza Navona</li>
							<li>Corso Vittorio</li>
							<li>Ponte Sant'Angelo</li>
							<li>Gianicolo</li>
							<li>End Point: Trastevere</li>
						</ul>
					</div>
				</div>
				<div class='VespaTourDetail'>
					<ul>
						<li>
							€ 149.00 per person, including taxes 
						</li>
						<li>
							Helmet and single-use hygiene cap provided
						</li>
						<li>
							Starting from Trastevere
						</li>
						<li>
							Duration: 4 hours
						</li>
						<li>
							Morning tour: 10:30 - 14:30
						</li>
						<li>
							Afternoon tour: 15:30 - 19:30
						</li>
						<li>
							Distance: more than 20 km.
						</li>
					</ul>
				</div>
				<div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="18">Book Now</div>
			</div>
			<div class='VespaTourItem'>
				<div class='vespaTourName'>
					<h3>
					Castle tour
					</h3>
					<div class='tourPoints'>
						<ul>
							<li>Start Point: Trastevere</li>
							<li>Frascati (Tuscolo)</li>
							<li>Lake Nemi</li>
							<li>Castel Gandolfo (the Pope’s summer residence)</li>
							<li>return to meeting point</li>
							<li>Lunch in a characteristic restaurant.</li> 
						</ul>
					</div>
				</div>
				<div class='VespaTourDetail'>
					<ul>
						<li>
							€ 220.00 per person including taxes 
						</li>
						<li>
							Helmet and single-use hygiene cap provided
						</li>
						<li>
							Starting from Trastevere
						</li>
						<li>
							Duration: 4 hours
						</li>
						<li>
							Pick up from hotel or restaurant
						</li>
						<li>
							Official Rome guide or audio guide
						</li>
						<li>
							Stop for coffee or pizza
						</li>
						<li>
							Personalized tours available from 60.00 euros per person	
						</li>
					</ul>
				</div>
				<div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="19">Book Now</div>
			</div>
		</div>
		<?php require_once 'bookingModelUI.php'; ?>
	</div>
<?php 
	require_once './footer.php';
?>
