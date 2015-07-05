<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/
?>
<?php
	require_once './header.php';
?>
    <title>Ninebot E</title>
    <link type="text/css" rel="stylesheet" href="../../../Common/css/cssForJssorSliders.css" />
    <link type="text/css" rel="stylesheet" href="../../../Common/css/productCatalogue.css" />
    <script src="../../../Common/js/jssor.slider.mini.js" type="text/javascript"></script>
    <script src="../../js/homePageAnimation.js" type="text/javascript"></script>
    <script src="../../js/productCatalogue.js" type="text/javascript"></script>
    <script>
        function getProductData(){
            var data = [
                {
                    name: 'Straordinario veicolo',
                    description: 'Ninebot è un nuovo e straordinario veicolo. Si guida e controlla con l\'equilibrio del corpo, basta inclinarsi in avanti e indietro. Il Ninebot rileva la posizione del vostro corpo e rimane in equilibrio grazie al sistema di autobilanciamento.<br />Con il collegamento Bluetooth si può gestire Ninebot in remoto e fare la diagnosi intelligente di eventuali problemi. Il Ninebot-E, compresa la barra funzionamento, pesa solo 23.5Kg e può essere dotato di una batteria ad alta capacità 670Wh, che estende la sua autonomia sino a 30-45 Km.',
                    imagesUrl: [
                        '../../images/prodottiImages/ninebotEAmazingTransportation.png',
                        '../../images/prodottiImages/nineBotEAmazing.png'
                    ]
                },
                {
                    name: 'Ninebot in autovettura',
                    description: 'NIl manubrio del Ninebot può essere facilmente rimosso e grazie al peso, di 20Kg senza l’ingombro della barra, il Ninebot può essere facilmente messo nel bagagliaio della maggior parte delle auto e portato ovunque.',
                    imagesUrl: [
                        '../../images/prodottiImages/nineBotECompanion.png'
                    ]
                },
                {
                    name: 'Con Ninebot niente più ingorghi e lunghe ricerche di parcheggio',
                    description: 'Il Ninebot è la scelta migliore per brevi distanze. Con una velocità massima di 20 km/h e con una grande resistenza agli urti. I pneumatici Michelin da 16 pollici permettono di passare senza problemi sulla maggior parte dei dossi e bunker. Inoltre, il costo elettrico per 1 Km è solo di 1 centesimo. Il vantaggio più importante è che con il vostro Ninebot raggiungerete la vostra destinazione mentre i vostri amici automobilisti passeranno il loro tempo in un ingorgo o alla ricerca di un parcheggio.',
                    imagesUrl: [
                        '../../images/prodottiImages/nineBotENoTraffic.png'
                    ]
                },
                {
                    name: 'Eleganza e qualità',
                    description: 'Il telecomando del Ninebot è di colore bianco porcellana con rifiniture argento. Elegante e raffinato nel proprio contenitore. I suoi quattro pulsanti vi permettono di gestire tutte le funzioni. Ogni Ninebot è equipaggiato con 2 chiavi, una di riserva.',
                    imagesUrl: [
                        '../../images/prodottiImages/nineBotEEleganceAndQuality.png'
                    ]
                },
                {
                    name: 'Imballaggio rinforzato',
                    description: 'L’Imballaggio di Ninebot ha superato le prove più dure. E’ stato studiato per resistere a cadute dall\'altezza di 1,5 m, con diverse angolazioni Dimensioni dell\'imballaggio: L620 × W440 × H470 Dimensioni dell’imballaggio del manubrio: L1140 × W140 × H95',
                    imagesUrl: [
                        '../../images/prodottiImages/nineBotEReinforce.png'
                    ]
                },
            ];
            
            return data;
        }
    </script>
	<div class="content"></div>
<?php 
    require_once '../../../Common/php/productCatalogueUI.php';
    require_once './footer.php';
?>