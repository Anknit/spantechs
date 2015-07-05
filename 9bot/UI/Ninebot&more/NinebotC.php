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
    <title>Ninebot C</title>
    <link type="text/css" rel="stylesheet" href="../../../Common/css/cssForJssorSliders.css" />
    <link type="text/css" rel="stylesheet" href="../../../Common/css/productCatalogue.css" />
    <script src="../../../Common/js/jssor.slider.mini.js" type="text/javascript"></script>
    <script src="../../js/homePageAnimation.js" type="text/javascript"></script>
    <script src="../../js/productCatalogue.js" type="text/javascript"></script>
    <script>
        function getProductData(){
            var data = [
                {
                    name: 'Ninebot-C(Comfort)',
                    description: '<span style="font-size:20px">Technologically Advanced and Cost-Effective</span><br /><br /> The Ninebot-C is as technically advanced as the Ninebot-E. It offers the same high performance and safety guarantee at a more competitive price. It’s another option for consumers interested in leveraging the advantages of a personal transportation robot.',
                    imagesUrl: [
                        '../../images/prodottiImages/nineBotCComfort.png'
                    ]
                },
                {
                    name: 'The first and unique equal strength magnesium alloy frame design in self-balancing vehicle industry',
                    description: '<ul><li>Durability and the capacity to carry a significant payload</li><li>A light body frame that weighs only 1.7kg</li><li>Consistent and stable performance</li></ul>',
                    imagesUrl: [
                        '../../images/prodottiImages/nineBotCMagnesiumAlloy.png'
                    ]
                },
                {
                    name: 'Plastic - steel composite material hub and sports car tire design',
                    description: '<ul><li>A strong plastic composite and sports car tire design</li><li>An eco-friendly travel option and extended mileage capability</li><li>Emergency braking feature</li></ul>',
                    imagesUrl: [
                        '../../images/prodottiImages/nineBotCCompositeMaterial.png'
                    ]
                },
                {
                    name: 'High speed motor plus adjustable speed drive',
                    description: '<ul><li>High-speed motor and adjustable speed drive</li><li>Powerful acceleration</li><li>Quick reaction to changing conditions</li></ul>',
                    imagesUrl: [
                        '../../images/prodottiImages/nineBotCSpeedMotorPlusSpeedDrive.png'
                    ]
                },
                {
                    name: 'Hands free, comfortable riding',
                    description: 'The Ninebot-C also features a handless lever as a standard operation bar. Riders can drive with their knees. This hands free option, offers riders more flexibility to enjoy their riding experience. In addition, its more compact footprint makes it even more convenient to store and transport.',
                    imagesUrl: [
                        '../../images/prodottiImages/nineBotCHandsFreeBackground.png'
                    ]
                },
                {
                    name: 'High quality, carefree',
                    description: 'Quality and safety is always the pursuit of Ninebot team. With the material of LEXAN™ VisualFX panlite from SABIC Innovative Plastics, Ninebot is with a perfect appearance and texture. Well, the max speed of Ninebot-C is 16km/h, which ensures the safety when driving with the handless lever.',
                    imagesUrl: [
                        '../../images/prodottiImages/nineBotCQualityCareFree.png'
                    ]
                },
                {
                    name: 'Ninesys ™ 2nd self-balancing control system',
                    description: 'Based on the original military unmanned aerial vehicle (UAV) technology, Ninebot Inc. released the Ninesys 2nd self-balancing control system, which is with up to 10 times power reserve coefficient and better control performance, the quick reaction makes Ninebot-C more stable. Furthermore, Ninebot-C has the Flight Data Recorder (Black Box) function, which can restore the progress of malfunction and accident according to the data. In that case, it will help you manage the safe driving skills and improve the safety performance of Ninebot-C.',
                    imagesUrl: [
                        '../../images/prodottiImages/nineBotCSelfbalancingControlSystem.png'
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