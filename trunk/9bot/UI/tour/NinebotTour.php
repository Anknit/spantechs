<?php
	require_once './header.php';
?>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<link href="../../css/moreHome.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../../../Common/css/hover.css" />
<style>
	table.innerTable tr:nth-child(odd){
/*		background-color:#ddd;		*/
	}
	
    td:nth-child(even).borderBottom{
        border-bottom: 1px solid #000;
    }
    
    .textAlignCenter{
        text-align:center;
    }
    
    .textAlignLeft{
        text-align:left;
    }
    
    .padded{
        padding: 0 10px;
    }
    
    .xxThumbImage{
        width:300px;
        height:auto;
    }
    
    .boldHeading{
        font-weight:700;
		font-size: 22px;
    }
    
    .blueFont{
		margin-top:20px;
        /*color:#2C5BE3;*/
    }
    
    .greyTabButton{
        padding:10px 12px;
        background-color:#ccc;
        color:#111;
		cursor:auto;
		border-radius:1px;
    }
	
	table, tr, td{
		padding:5px;
	}
	
	.qouteSpan{
/*		border-left:none !important;
*/	}
</style>
<script>
    var pageIdentifier  =   'Tour';
</script>
<div class="content">
    <table id="containerTable" class="textAlignCenter" align="center" width="100%" border="1" bordercolor="#ccc" cellspacing="5" cellpadding="5">
        <tr>
            <th width="400px">Departure Points</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <td width="400px">
            	<span class="greyTabButton hvr-float-shadow">TORRE ARGENTINA</span>
                <br />
                <br />
                Vicolo Nicola De Cesarini, 4 – 00186 Rome
            </td>
            <td>
                <table width="95%" align="center">
                    <tr>
                        <td width="250px" class="borderBottom" align="left"><img class="xxThumbImage" src="../../images/tours/img/1.png" /></td>
                        <td class="borderBottom qouteSpan">
                            <div class="boldHeading">Ancient Rome - Colosseum - Capitoline Hill</div>
                            <div class="blueFont textAlignLeft padded">From the Colosseum to the Capitol in this amazing promenade along the roads of the Roman Empire, among circuses and temples as well as gardens and sunlit terraces.</div>
                            <div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="1">Book Now</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="borderBottom" align="left"><img class="xxThumbImage" src="../../images/tours/img/2.png" /></td>
                        <td class="borderBottom">
                            <div class="boldHeading">The city of the pope kings</div>
                            <div class="blueFont textAlignLeft padded">From beautiful Baroque and Renaissance Navona Square and the mighty Pantheon to majestic St. Peter's and the Vatican.</div>
                            <div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="2">Book Now</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="borderBottom" align="left"><img class="xxThumbImage" src="../../images/tours/img/3.png" /></td>
                        <td class="borderBottom">
                            <div class="boldHeading">Ghetto, Tiber island and Trastevere</div>
                            <div class="blueFont textAlignLeft padded">The old streets of the Jewish Ghetto will give you a pretty good idea of what the Ghetto was like hundreds of years ago.<br />We then cross the thousand-year bridge on to Tiber Island from where we glide on through Trastevere.</div>
                            <div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="3">Book Now</div>
                        </td>
                    </tr>
                    <tr>
                        <td align="left"><img class="xxThumbImage" src="../../images/tours/img/4.png" /></td>
                        <td>
                            <div class="boldHeading">Moonlight tour of Rome</div>
                            <div class="blueFont textAlignLeft padded">Come out with us tonight!<br />The most beautiful and spectacular squares and fountains of Rome by night. </div>
                            <div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="4">Book Now</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    
        <tr>
            <td width="400px">
            	<span class="greyTabButton hvr-float-shadow">PINCIO – VILLA BORGHESE</span>
                <br />
                <br />
                Pincio terrace
            </td>
            <td>
                <table width="95%" align="center">
                    <tr>
                        <td width="250px" class="borderBottom" align="left"><img class="xxThumbImage" src="../../images/tours/img/5.jpg" /></td>
                        <td class="borderBottom">
                            <div class="boldHeading">Villa Borghese</div>
                            <div class="blueFont textAlignLeft padded">The most important villa of Rome with its lake (30 min. boat tour) and amazing views from the Pincio terrace across the city.</div>
                            <div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="5">Book Now</div>
                        </td>
                    </tr>
                    <tr>
                        <td align="left"><img class="xxThumbImage" src="../../images/tours/img/6.jpg" /></td>
                        <td>
                            <div class="boldHeading">Best of Rome’s villas, terraces and fountains</div>
                            <div class="blueFont textAlignLeft padded">The wonderful villas, terraces and fountains of Rome (including the Spanish Steps, the Trevi Fountain, etc.).</div>
                            <div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="6">Book Now</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    
        <tr>
            <td width="400px">
            	<span class="greyTabButton hvr-float-shadow">TRASTEVERE</span>
                <br />
                <br />
                Via di San Calisto, 9 – 00153 Rome
            </td>
            <td>
                <table width="95%" align="center">
                    <tr>
                        <td width="250px" class="borderBottom" align="left"><img class="xxThumbImage" src="../../images/tours/img/7.jpg" /></td>
                        <td class="borderBottom">
                            <div class="boldHeading">Trastevere and Janiculum</div>
                            <div class="blueFont textAlignLeft padded">Trastevere is a delightful historic neighbourhood full of charm and history reflected  in its narrow cobbled streets lined by medieval houses.<br />The Janiculum provides one of the best locations for a scenic view of Rome' s innumerable domes and bell towers.</div>
                            <div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="7">Book Now</div>
                        </td>
                    </tr>
                    <tr>
                        <td align="left"><img class="xxThumbImage" src="../../images/tours/img/8.jpg" /></td>
                        <td>
                            <div class="boldHeading">Trastevere</div>
                            <div class="blueFont textAlignLeft padded">Rome’s most characterful neighbourhood. The labyrinth of little alleys and hidden treasures from ancient, mediaeval and Renaissance Rome is not to be missed!</div>
                            <div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="8">Book Now</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    
        <tr>
            <td width="400px">
            	<span class="greyTabButton hvr-float-shadow">CIRCUS MAXIMUS</span>
                <br />
                <br />
                Via dei Cerchi, 75 - 00186 Rome
            </td>
            <td>
                <table width="95%" align="center">
                    <tr>
                        <td width="250px" align="left"><img class="xxThumbImage" src="../../images/tours/img/9.jpg" /></td>
                        <td>
                            <div class="boldHeading">Appian Way, catacombs and the tomb of Cecilia Metella</div>
                            <div class="blueFont textAlignLeft padded">An unforgettable tour in the beautiful countryside surrounding Rome. The Appian Way was one of the earliest and strategically most important Roman roads of the ancient republic.<br />It is lined with tombs and catacombs, including the famous Crypt of the Popes.</div>
                            <div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="9">Book Now</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    
        <tr>
            <td width="400px">
            	<span class="greyTabButton hvr-float-shadow">SAINT PETER</span>
                <br />
                <br />
                Via Vespasiano, 11 - 00192 Rome
            </td>
            <td>
                <table width="95%" align="center">
                    <tr>
                        <td width="250px" align="left"><img class="xxThumbImage" src="../../images/tours/img/10.jpg" /></td>
                        <td>
                            <div class="boldHeading">Vatican and the most beautiful squares.</div>
                            <div class="blueFont textAlignLeft padded"></div>
                            <div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="10">Book Now</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    
        <tr>
            <td width="400px">
            	<span class="greyTabButton hvr-float-shadow">TERMINI</span>
                <br />
                <br />
                At BOX "Tickets Termini", Rome
            </td>
            <td>
                <table width="95%" align="center">
                    <tr>
                        <td width="250px" align="left"><img class="xxThumbImage" src="../../images/tours/img/11.jpg" /></td>
                        <td>
                            <div class="boldHeading">Dolce vita tour.</div>
                            <div class="blueFont textAlignLeft padded"></div>
                            <div class="normalButton RightFloat hvr-shutter-out-horizontal" tour_id="11">Book Now</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    
    </table>
    
    <?php require_once 'bookingModelUI.php'; ?>
</div>
<script>
$(function(){
	$('.xxThumbImage').wrap('<a></a>');
	$('#containerTable').find('table').addClass('innerTable');
	$('.xxThumbImage').closest('a').addClass('hvr-bubble-float-right');
	$('.blueFont').closest('td').not('.qouteSpan').addClass('qouteSpan');
});
</script>
<?php 
	require_once 'footer.php';
?>
