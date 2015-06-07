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
    <title>Consip</title>
    <link type="text/css" rel="stylesheet" href='../../css/Consip.css' />
    <script src="../../../Common/js/jquery-ui.min.js" type="text/javascript"></script>
    <script>
        $(function(){
            $('.tabs').tabs({
              event: "mouseover"
            });
        });
    </script>
    <script src="../../js/Consip.js" type="text/javascript"></script>
	<div class="content" style="height:80%">
        <div class="pageHeading">
            Le amministrazioni pubbliche potranno trovare i prodotti Ninebot all’interno del catalogo elettronico CONSIP nella sezione “Veicoli elettrici”, sottosezione “Biciclette elettriche a pedalata assistita”.
        </div>
        <div class="tabs">
            <ul>
                <li><a href="#Ninebot_E">Ninebot E</a></li>
                <li><a href="#Ninebot_Police">Ninebot Police</a></li>
                <li><a href="#Miscellaneous">Miscellaneous</a></li>
            </ul>
            <div id="Ninebot_E" style="float:left !important;">
            </div>
            <div id="Ninebot_Police" style="float:left !important;">
            </div>
            <div id="Miscellaneous" style="float:left !important;">
            </div>
        </div>
	</div>
<?php
	require_once './footer.php';
?>