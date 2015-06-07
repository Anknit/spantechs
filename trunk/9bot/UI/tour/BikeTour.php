<?php 
	require_once './header.php';
?>
	<link href="../../css/style.css" rel="stylesheet" type="text/css"/>
    <script>
        var pageIdentifier  =   'Tour';
        $(function ($) {
            HomePageSlideShow(false, 'testSlider', false);
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
    .VespaTourDetail div {
      margin: auto;
      width: 80%;
      font-family: cursive;
      text-align: center;
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
            <div u="slides" class="jssorSlidesDimensions" style="cursor: move; position: absolute;">
                <div>
                    <img u="image" src="../../images/tours/bike/1.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/bike/2.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/bike/3.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/bike/4.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/bike/5.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/bike/6.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/bike/7.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/bike/8.png" />
                </div>
                <div>
                    <img u="image" src="../../images/tours/bike/9.png" />
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
					Monuments and belvederes
					</h3>
					<div class='briefVespa'>
						Please wear comfortable clothing and sneakers. It sometimes rains in autumn, winter and spring, but Romeâ€™s temperate climate lets you ride your Vespa without problems. We suggest you bring a raincoat with you. Backpacks for your personal belongings are also available.
					</div>
					<div class='tourPoints'>
						<ul>
							<li>Start Point: Trastevere</li>
							<li>Tiber Island</li>
							<li>Aventine Hill</li>
							<li>Circus Maximus</li>
							<li>Colosseum</li>
							<li>imperial forums</li>
							<li>Capitoline Hill</li>
							<li>Trajan’s Forum</li>
							<li>Trevi Fountain</li>
							<li>top of the Spanish Steps (Trinità dei Monti)</li>
							<li>Pincio</li>
							<li>Piazza del Popolo</li>
							<li>Via Ripetta and French Church of San Luigi</li>
							<li>Piazza Navona</li>
							<li>Castel Sant'Angelo</li>
							<li>Saint Peter's</li>
							<li>Gianicolo</li>
							<li>End Point: Trastevere</li>
						</ul>
					</div>
				</div>
				<div class='VespaTourDetail'>
					<div>Deals for families and groups of at least 5 people. </div>
					<ul>
						<li>
							€ 45.00 per person including taxes 
						</li>
						<li>
							Helmet and single-use hygiene cap provided
						</li>
						<li>
							Starting from Trastevere
						</li>
						<li>
							Difficulty: medium - simple
						</li>
						<li>
							Duration: 3/4 hours
						</li>
						<li>
							Distance: 20 km
						</li>
					</ul>
				</div>
				<div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="12">Book Now</div>
			</div>
			<div class='VespaTourItem'>
				<div class='vespaTourName'>
					<h3>
					The heart of the City 
					</h3>
					<div class='briefVespa'>
						Please wear comfortable clothing and sneakers. It sometimes rains in autumn, winter and spring, but Romeâ€™s temperate climate lets you ride your Vespa without problems. We suggest you bring a raincoat with you. Backpacks for your personal belongings are also available.
					</div>
					<div class='tourPoints'>
						<ul>
							<li>Start Point: Trastevere</li>
							<li>Santa Cecilia Church</li>
							<li>Tiber Island</li>
							<li>Ghetto</li>
							<li>Piazza Farnese</li>
							<li>Piazza Campo de' Fiori</li>
							<li>Sant'Angelo Bridge</li>
							<li>Piazza Navona</li>
							<li>Pantheon</li>
							<li>Church of Saint Ignatius</li>
							<li>Piazza di Pietra</li>
							<li>Piazza di Spagna</li>
							<li>Via Margutta</li>
							<li>Piazza del Popolo</li>
							<li>Church of Santa Maria della Pace</li>
							<li>Via Giulia</li>
							<li>Ponte Sisto</li>
							<li>Finish Point: Trastevere</li>
						</ul>
					</div>
				</div>
				<div class='VespaTourDetail'>
					<div>Deals for families and groups of at least 5 people. </div>
					<ul>
						<li>
							€ 45.00 per person including taxes 
						</li>
						<li>
							Helmet and single-use hygiene cap provided
						</li>
						<li>
							Starting from Trastevere
						</li>
						<li>
							Difficulty: very simple
						</li>
						<li>
							Duration: 3/4 hours
						</li>
						<li>
							Distance: 20 km
						</li>
					</ul>
				</div>
				<div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="13">Book Now</div>
			</div>
			<div class='VespaTourItem'>
				<div class='vespaTourName'>
					<h3>
					The Appian Way
					</h3>
					<div class='briefVespa'>
						Please wear comfortable clothing and sneakers. It sometimes rains in autumn, winter and spring, but Romeâ€™s temperate climate lets you ride your Vespa without problems. We suggest you bring a raincoat with you. Backpacks for your personal belongings are also available.
					</div>
					<div class='tourPoints'>
						<ul>
							<li>Start Point: Trastevere</li>
							<li>Tiber Island</li>
							<li>Circus Maximus</li>
							<li>archaeological walk through the Caracalla Baths</li>
							<li>Porta San Sebastiano</li>
							<li>catacombs of San Callisto</li>
							<li>Cecilia Metella’s mausoleum</li>
							<li>Temple of Jove (Tempio di Giove)</li>
							<li>Villa of the Quintili</li>
							<li>park of the aqueducts (Parco degli acquedotti)</li>
							<li>Felice Aqueduct (Acquedotto Felice)</li>
							<li>Caffarella Park</li>
							<li>via Latina</li>
							<li>End Point: Trastevere</li>
						</ul>
					</div>
				</div>
				<div class='VespaTourDetail'>
					<div>Deals for families and groups of at least 5 people. </div>
					<ul>
						<li>
							€ 45.00 per person including taxes 
						</li>
						<li>
							Helmet and single-use hygiene cap provided
						</li>
						<li>
							Starting from Trastevere
						</li>
						<li>
							Difficulty: medium - simple
						</li>
						<li>
							Duration: 3/4 hours
						</li>
						<li>
							Distance: 20 km
						</li>
					</ul>
				</div>
				<div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="14">Book Now</div>
			</div>
			<div class='VespaTourItem'>
				<div class='vespaTourName'>
					<h3>
					Mountain bike tour
					</h3>
					<div class='briefVespa'>
						Including transfer from Rome, use of bikes and equipment, and lunch in a characteristic restaurant. A good level of fitness is required.
					</div>
					<div class='tourPoints'>
						<ul>
							<li>Start Point: transfer by car from Rome to Frascati, maximum 6 people</li>
							<li>Villa Aldobrandini</li>
							<li>Tuscolo</li>
							<li>End Point: Rome</li>
						</ul>
					</div>
				</div>
				<div class='VespaTourDetail'>
					<div>Deals for families and groups of 2 to 6 people. </div>
					<ul>
						<li>
							€ 90.00 per person including taxes 
						</li>
						<li>
							Helmet and single-use hygiene cap provided
						</li>
						<li>
							Starting from Frascati
						</li>
						<li>
							Difficulty: hard
						</li>
						<li>
							Level of fitness required: good
						</li>
						<li>
							Duration: 4 hours
						</li>
						<li>
							Distance more than 20 km
						</li>
					</ul>
				</div>
				<div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="15">Book Now</div>
			</div>
			<div class='VespaTourItem'>
				<div class='vespaTourName'>
					<h3>
					Bike tour and lunch in the characteristic restaurant L'antico Moro
					</h3>
					<div class='briefVespa'>
						Discover Rome with taste!
					</div>
					<div class='tourPoints'>
						<ul>
							<li>Start Point: Trastevere</li>
							<li>Ghetto</li>
							<li>the Mouth of Truth (Bocca della verità)</li>
							<li>Via di San Teodoro and the orange garden (Giardino degli aranci)</li>
							<li>Colosseum</li>
							<li>imperial forums</li>
							<li>Capitoline Hill</li>
							<li>Trajan’s Forum</li>
							<li>Piazza Venezia</li>
							<li>Piazza di Spagna</li>
							<li>Pincio</li>
							<li>Piazza del Popolo</li>
							<li>Via Ripetta and the French Church of San Luigi</li>
							<li>Via dei Coronari and Castel Sant' Angelo</li>
							<li>Saint Peter’s</li>
							<li>Tiber Island</li>
							<li>End Point: Trastevere</li>
						</ul>
					</div>
				</div>
				<div class='VespaTourDetail'>
					<div>Lunch Menu</div>
					<br/>
					<div>Italian appetizer with bruschetta, pasta Amatriciana (mezzamaniche “half sleeves” pasta with tomato and bacon sauce), saltimbocca Trasteverina, mixed salad, dessert, 1/2 litre of water, 1/4 litre of wine, coffee.</div>
					<ul>
						<li>
							€ 60.00 per person all included
						</li>
					</ul>
				</div>
				<div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="16">Book Now</div>
			</div>
			<div class='VespaTourItem'>
				<div class='vespaTourName'>
					<h3>
					The Big Beautiful bike tour
					</h3>
					<div class='briefVespa'>
						Please wear comfortable clothing and sneakers. It sometimes rains in autumn, winter and spring, but Romeâ€™s temperate climate lets you ride your Vespa without problems. We suggest you bring a raincoat with you. Backpacks for your personal belongings are also available.
					</div>
					<div class='tourPoints'>
						<ul>
							<li>Start Point: Ponte Sisto</li>
							<li>Via Garibaldi</li>
							<li>Church of San Pietro in Montorio</li>
							<li>Gianicolo Fountain (Mostra dell'acqua Paola)</li>
							<li>Gianicolo</li>
							<li>Via del Governo vecchio</li>
							<li>Piazza San Pantaleo</li>
							<li>Piazza Navona</li>
							<li>Pantheon</li>
							<li>Piazza di Pietra</li>
							<li>Via del Corso</li>
							<li>Trevi Fountain</li>
							<li>Quirinale</li>
							<li>Via Panisperna</li>
							<li>Via dei Serpenti</li>
							<li>Colosseum</li>
							<li>via di San Gregorio</li>
							<li>Circus Maximus</li>
							<li>Aventine Hill</li>
							<li>Caracalla Baths</li>
							<li>Appian Way</li>
							<li>Catacombs of San Callisto</li>
							<li>End Point: park of the aqueducts (Parco degli acquedotti)</li>
						</ul>
					</div>
				</div>
				<div class='VespaTourDetail'>
					<div>Deals for families and groups of at least 5 people. </div>
					<ul>
						<li>
							€ 80.00 per person including taxes 
						</li>
						<li>
							Helmet and single-use hygiene cap provided
						</li>
						<li>
							Starting from Ponte Sisto
						</li>
						<li>
							Difficulty: medium - hard
						</li>
						<li>
							Duration: about 6 hours
						</li>
						<li>
							Distance: 30 km
						</li>
						<li>
							Picnic included at Casale della Vaccareccia with delicious local fresh cheese.
						</li>
					</ul>
				</div>
				<div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="17">Book Now</div>
			</div>
		</div>
		<?php require_once 'bookingModelUI.php'; ?>
	</div>
<?php 
	require_once './footer.php';
?>
