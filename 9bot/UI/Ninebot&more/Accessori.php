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
    <title>Accessori</title>
    <link type="text/css" rel="stylesheet" href="../../../Common/css/cssForJssorSliders.css" />
    <link type="text/css" rel="stylesheet" href="../../../Common/css/productCatalogue.css" />
    <script src="../../../Common/js/jssor.slider.mini.js" type="text/javascript"></script>
    <script src="../../js/homePageAnimation.js" type="text/javascript"></script>
    <script src="../../js/productCatalogue.js" type="text/javascript"></script>
    <script>
        function getProductData(){
            var data = [
                {
                    name: 'Batteria Standard',
                    description: '<span style="font-size:20px">Batteria per Ninebot 55.5V 450Wh.  Autonomia dichiarata: 25-30Km. Tempi di Ricarica: 3-4Ore</span><br /><br />Costo: € 600 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/01/1.png'
                   ]
                },
                {
                    name: 'Batteria Lunga percorrenza',
                    description: '<span style="font-size:20px">Autonomia dichiarata 45-50 km.</span><br /><br />Costo: € 800 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/02/1.png'
                    ]
                },
                {
                    name: 'Barra per guida a mani libere (Handless lever)',
                    description: '<span style="font-size:20px">La barra di guida posizionata tra le ginocchia è montata al posto del manubrio Ninebot, consentendo una piacevole guida a mani libere.</span><br />Ideale per: Riprese video e Fotografia.<br />Costo: € 106 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/03/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/03/2.png',
                        '../../images/prodottiImages/Accessori/Accessori/03/3.png'
                    ]
                },
                {
                    name: 'Barra standard 90 cm',
                    description: '<span style="font-size:20px"></span><br /><br />Costo: € 70 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/04/1.png'
                    ]
                },
                {
                    name: 'Barra lunga 104 cm',
                    description: '<span style="font-size:20px">Consigliata per sostituire la barra standard per utenti di altezza da 1,80 metri a 2,1 metri.</span><br /><br />Costo: € 70 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/05/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/05/2.png'
                    ]
                },
                {
                    name: 'Barra corta 79 cm',
                    description: '<span style="font-size:20px">Consigliata per sostituirla barra standard per utenti di altezza 1,3 metri a 1,8 metri.</span><br /><br />Costo: € 70 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/06/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/06/2.png'
                    ]
                },
                {
                    name: 'Manubrio Ninebot',
                    description: '<span style="font-size:20px"></span><br /><br />Costo: € 100 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/06/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/06/2.png'
                    ]
                },
                {
                    name: 'Barra corta 79 cm',
                    description: '<span style="font-size:20px">Consigliata per sostituirla barra standard per utenti di altezza 1,3 metri a 1,8 metri.</span><br /><br />Costo: € 70 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/07/1.png'
                    ]
                },
                {
                    name: 'Borsa Ninebot',
                    description: '<span style="font-size:20px">La borsa Ninebot originale in colore grigio da collocare al piantone dello sterzo. La presenza di un morsetto consente la sua facile rimozione.</span><br /><br />Costo: € 60 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/08/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/08/2.png',
                        '../../images/prodottiImages/Accessori/Accessori/08/3.png',
                        '../../images/prodottiImages/Accessori/Accessori/08/4.png'
                    ]
                },
                {
                    name: 'Borsa con Speaker Bluetooth',
                    description: 'Costo: € 110 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/09/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/09/2.png',
                        '../../images/prodottiImages/Accessori/Accessori/09/3.png',
                        '../../images/prodottiImages/Accessori/Accessori/09/4.png'
                    ]
                },
                {
                    name: 'Borsa Laterali in PVC',
                    description: 'Costo: € 140 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/10/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/10/2.png',
                        '../../images/prodottiImages/Accessori/Accessori/10/3.png',
                        '../../images/prodottiImages/Accessori/Accessori/10/4.png'
                    ]
                },
                {
                    name: 'Supporto',
                    description: '<span style="font-size:20px">I telaio Cargo sono in grado di ospitare tutti i raccordi per montare borse o altro e Sono la base per un uso multifunzionale del Ninebot E. Le maniglie integrate permettono di sollevare ancor più agevolmente il Ninebot. Sono verniciati a polvere bianca e realizzati in lamiera di alluminio di 4 mm, collegabili al Ninebot mediante 3 viti nei lati interni del parafango. Ogni dotazione comprende 2 supporti.</span><br /><br />Costo: € 150 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/11/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/11/2.png',
                        '../../images/prodottiImages/Accessori/Accessori/11/3.png',
                        '../../images/prodottiImages/Accessori/Accessori/11/4.png'
                    ]
                },
                {
                    name: 'Parafango Bianco',
                    description: '<span style="font-size:20px">Ogni dotazione comprende 2 pezzi</span><br /><br />Costo: € 70 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/12/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/12/2.png'
                     ]
                },
                {
                    name: 'Parafango nero',
                    description: '<span style="font-size:20px">Ogni dotazione comprende 2 pezzi</span><br /><br />Costo: € 70 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/13/1.png'
                     ]
                },
                {
                    name: 'Caricabatteria bianco',
                    description: '<span style="font-size:20px">Alimentatore Ninebot 130W. Tempo di ricarica 3 ore.</span><br /><br />Costo: € 80 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/14/1.png'
                     ]
                },
                {
                    name: 'Caricabatteria nero',
                    description: '<span style="font-size:20px">Alimentatore Ninebot 130W. Tempo di ricarica 3 ore.</span><br /><br />Costo: € 80 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/15/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/15/2.png'
                     ]
                },
                {
                    name: 'Ruota completa Bianca',
                    description: '<span style="font-size:20px">Ruota di Ricambio per Ninebot comprensiva di Cerchio e Copertone</span><br /><br />Costo: € 100 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/16/1.png'
                     ]
                },
                {
                    name: 'Ruota completa Nera',
                    description: '<span style="font-size:20px">Ruota di Ricambio per Ninebot comprensiva di Cerchio e Copertone</span><br /><br />Costo: € 100 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/17/1.png'
                     ]
                },
                {
                    name: 'Cavalletto di Ricambio per Ninebot',
                    description: 'Costo: € 10 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/18/1.png'
                     ]
                },
                {
                    name: 'Impugnatura di Ricambio per Ninebot',
                    description: '<span style="font-size:20px">Ogni dotazione comprende 2 pezzi</span><br /><br />Costo: € 14 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/19/1.png'
                     ]
                },
                {
                    name: 'Telecomando Aggiuntivo per Ninebot',
                    description: 'Costo: € 30 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/20/1.png'
                     ]
                },
                {
                    name: 'Porta Smart Phone',
                    description: 'Costo: € 44 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/21/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/21/2.png',
                        '../../images/prodottiImages/Accessori/Accessori/21/3.png'
                     ]
                },
                {
                    name: 'Pedana completa',
                    description: 'Costo: € 100 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/22/1.png'
                     ]
                },
                {
                    name: 'Porta bottiglia',
                    description: '<span style="font-size:20px">Montato sul manubrio può essere adattato a bottiglie di diverse dimensioni.</span><br /><br />Costo: € 10 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/23/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/23/2.png'
                    ]
                },
                {
                    name: 'Color Kit',
                    description: '<span style="font-size:20px">Completo di guarnizioni in diversi colori.</span><br /><br />Costo: € 50 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/24/1.png'
                    ]
                },
                {
                    name: 'Luce frontale',
                    description: '<span style="font-size:20px">La luce LED su tecnologia SMD, garantisce la massima luminosità e bassissimo consumo energetico.<br />Inserita direttamente nella porta USB nel manubrio. <br />Accensione mediante sfioramento. Regolazione intensità variabile.<br />Specifiche: 1 watt, 5 volt</span><br /><br />Costo: € 15 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/25/1.png'
                    ]
                },
                {
                    name: 'Faro impermeabile',
                    description: '<span style="font-size:20px">Un accessorio necessario per l’uso del Ninebot dopo il tramonto.<br />Potenza 850 lumen. Batteria esterna al litio 40Wh.</span><br /><br />Costo: € 40 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/26/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/26/2.png',
                        '../../images/prodottiImages/Accessori/Accessori/26/3.png'
                    ]
                },
                {
                    name: 'Ninebot chiavetta USB',
                    description: 'Costo: € 15 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/27/1.png',
                        '../../images/prodottiImages/Accessori/Accessori/27/2.png'
                    ]
                },
                {
                    name: 'Coprimozzo ruota decorativi',
                    description: '<span style="font-size:20px">Completo 2 pezzi.</span><br /><br />Costo: € 20 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/28/1.png'
                    ]
                },
                {
                    name: 'Panello fontale in plexiglass',
                    description: 'Costo: € 100 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/29/1.png'
                    ]
                },
                {
                    name: 'Pannello frontale con scritta luminosa, dinamica e programmabile da PC',
                    description: 'Costo: € 170 + IVA',
                    imagesUrl: [
                        '../../images/prodottiImages/Accessori/Accessori/30/1.png'
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