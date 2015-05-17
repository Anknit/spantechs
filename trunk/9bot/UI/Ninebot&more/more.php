<?php require_once 'header.php'; ?>
<link href="../../css/moreHome.css" rel="stylesheet" />
<link href="../../css/cubeAnimation.css" rel="stylesheet" />
<title>Home</title>
<div class="content">
	<div id="container">
		<div class='cubeWrap'>
			<div class="contentCube">
				<div class="face top side1"></div>
				<div class="face front side2">
					<div class='imageContent' style='background:url(../../images/ninebot_more/3.png)'>
						<div class='textContent'>
							<div class='text_top text_dark'>Ninebot E</div>
						</div>
					</div>
				</div>
				<div class="face right side3">
					<div class='imageContent' style='background:url(../../images/ninebot_more/cube/1.png)'>
						<div class='textContent'>
							<div class='text_light' style='width:50%;text-align:center'>Controllo e Diagnostica</div>
							<div class='text_light' style='width:50%;text-align:center'>con applicazione smartphone</div>
							<div class='text_light' style='width:40%;float:right;margin-top:135px'>Collegamento tramite Bluetooth</div>
						</div>
					</div>
				</div>
				<div class="face back side4">
					<div class='imageContent' style='background:url(../../images/ninebot_more/cube/6.png)'>
					</div>
				</div>
				<div class="face left side5">
					<div class='textContent'>
						<div class='cubeH'>HIGH PERFORMANCE</div>
						<div class='cubeT'>20 KM/H, 30 KM AUTONOMIA</div>
						<div class='cubeH'>ELEGANTE</div>
						<div class='cubeT'>Il Robot per la tua vita quotidiana</div>
						<div class='cubeH'>VIVI SENZA BARRIERE</div>
						<div class='cubeT'>La vera libertà su 2 ruote</div>
						<div class='cubeH'>OTTIMO SERVIZIO</div>
						<div class='cubeT'>22 Punti Servizio in Italia</div>
					</div>
				</div>
				<div class="face down side6"></div>
			</div>
		</div>
		<div class='cubeWrap'>
			<div class="contentCube">
				<div class="face top side1"></div>
				<div class="face front side2">
					<div class='imageContent' style='background:url(../../images/ninebot_more/cube/3.png)' >
						<div class='textContent'>
							<div class='text_dark' style='margin:20px auto;'>IL NUOVO NINEBOT</div>
						</div>
					</div>
				</div>
				<div class="face right side3">
					<div class='imageContent' style='background:url(../../images/ninebot_more/cube/4.png)' />
						<div class='textContent' style='color:#fff;'>
							<div style='margin-top:50px;margin-left:-100px;'>
								<div>NUOVO </div>
								<div>A Mani Libere</div>
								<div>ECOLOGICO</div>
								<div>Vivi l'ambiente con rispetto</div>
							</div>
						</div>
					</div>
				</div>
				<div class="face back side4">
					<div class='imageContent' style='background:url(../../images/ninebot_more/cube/5.png)' />
						<div class='textContent'>
							<div class='text_light' style='margin:10px 150px 0px 0px;'>NINEBOT C</div>
						</div>
					</div>
				</div>
				<div class="face left side5">
					<div class='imageContent' style='background:url(../../images/ninebot_more/cube/2.png)' />
						<div class='textContent' style='color:#000;'>
							<div style='margin-top:50px;margin-left:-200px;'>
								<div>Ninebot ONE</div>
								<div>Prova con noi</div>
								<div>La vera rivoluzione</div>
								<div>nella Mobilità</div>
							</div>
						</div>
					</div>
				</div>
				<div class="face down side6"></div>
			</div>
		</div>
	</div>
	<script>
		var cubeNum	=	0;
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
	</script>
	<div class="centeredContent bottomBorderedContent paddedContent">
    	<div class="centeredInternalContent" style="width:80%;">
        	<div style="width:80%; margin:auto">
                <h1 style="width:80%; margin:auto">
                    <span class="blueColouredContent">Il futuro</span> è adesso
                </h1>
                <div class="qouteSpan" style="width:100%; margin:auto; border:none">
                	<p><b>Ninebot</b> è un nuovo mezzo di trasporto e la perfetta combinazione di design. Per saperne di più!</p>
                </div>
	            <div style="margin:auto;">
	                <input type="button" value="CLICCA QUI" style="cursor:pointer;width:187px; height:58px; color:#638E1A; background-color:#BDE075; font-size:16px; font-weight:600; margin-top:15px;" onclick="location.href = 'NinebotE.php';" />
	            </div>
            </div>
        </div>
    </div>
	<div class="centeredContent" style="padding:30px;">
        <ul style="list-style-type:none; overflow:hidden; display:inline-flex; padding-bottom:15px; padding-right:40px;">
            <li class="blueContentBox">
                <h3 class="darkColourHeading">Ambiente</h3>
                <span class="boxContent">
                    Nessuna emissione di CO2. Puoi parcheggiare il Ninebot in casa, evitando costosi garage e parcheggi
                </span>
            </li>
            <li class="blueContentBox">
                <h3 class="darkColourHeading">Design</h3>
                <span class="boxContent">
                    Linea elegante e pulita<br />
                    Disponibile in diversi colori .
                </span>
            </li>
            <li class="blueContentBox">
                <h3 class="darkColourHeading">Sicurezza</h3>
                <span class="boxContent">
                    Sistemi ridondanti. Allarmi e segnalazione puntuale di eventuali problemi.
                </span>
            </li>
        </ul>
    </div>
    <div class="centeredContent">
        <div style="margin: 20px auto; width: 80%;">
            <img src="../../images/icons/ninebot.png" alt="NINEBOT" />
            <h2 style="font-style: italic; font-family: cursive; color:#05B9BD">
                Come funziona il Ninebot?
            </h2>
            <div class="qouteSpan">
                <p>Il funzionamento dei Ninebot è intuitivo e semplice allo stesso tempo. Inoltre, il Ninebot può essere personalizzato utilizzando l'applicazione smartphone, così l'esperienza di guida è benessere ottimizzato.</p>
            </div>
        </div>
        <br />
        <hr align="center" style="width:75%;  border: 1px dotted #666;">
        <hr align="center" style="width:75%;  border: 1px dotted #666;">
        <br />
        <ul style="list-style-type:none; overflow:hidden; display:inline-flex">
            <li class="whiteContentBox">
                <span>
                    Ninebot è un robot autobilanciamente, un mezzo di trasporto nuovo e facile da usare
                </span>
            </li>
            <li class="whiteContentBox">
                <span>
                    Ninebot segue con grande precisione i movimenti del tuo corpo. La tecnologica del pendolo  invertito consente un’istintiva conduzione del mezzo
                </span>
            </li>
            <li class="whiteContentBox">
                <span>
                    <a>Facile trasporto</a>
                    Pesa solo 23 kg, 20 senza manubrio e con le sue ridotte dimensioni entra nel gavone di una barca e, addirittura, nella porta di un treno ad alta velocità può entrare naturalmente anche in un ascensore o una scala mobile.
                </span>
            </li>
        </ul>
    </div>
    
	<div style="padding:30px;height: 200px;">
    	<div style="width:80%;margin:auto">
        	<h2 style="font-style: italic; font-family: cursive; color:#05B9BD;; width:80%; text-align:center">
               Anche interessa Ninebot ? Contattarci in qualsiasi momento !
            </h2>
            <div class="qouteSpan" style="width:70%; float:left">
	            <p>
	            	Siamo aperti a tutti i tipi di richieste e siamo felici di entrare in contatto personale con voi .
	            </p>
            </div>
	    	<div style="float:right;">
	            <a href="contact.php"><input type="button" value="CONTATTO" style="width:187px; height:58px; color:#638E1A; background-color:#BDE075; font-size:16px; font-weight:600; cursor:pointer" /></a>
	        </div>
        </div>
    </div>
    
	<div style="width:100%;background-color:#05B9BD; padding:10px; color:#fff; text-align:center; font-style: italic; font-family: monospace;">
        <h2>
            “Non sempre essere i primi significa essere i migliori...!”
        </h2>
    </div>
</div>
<?php require_once 'footer.php';?>   