<?php
	require_once './header.php';
?>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
    <script>
        var pageIdentifier  =   'Tour';
    </script>
	<div class="content">
		<div class="tileNavigation">
            <ul id="menu_tour_tile" style="padding:0; float:left; width:100%;margin-top:0px;list-style:none;">
                <li linkto="trip_1" class="tileItem" title="If you don’t know how to use a Ninebot, you can learn in a few minutes in one of the world’s most important historic sites, a few hundred metres from where Brutus, Cassius and the other conspirators murdered Julius Caesar." style="border: #e8e8e8;"><a href="#" class="tileLinks">TORRE ARGENTINA</a></li>
                <li linkto="trip_2" class="tileItem" title="We set off from Rome’s most famous terrace, overlooking the beautiful panorama of the Eternal City."><a href="#" class="tileLinks">PINCIO – VILLA BORGHESE</a></li>
                <li linkto="trip_3" class="tileItem" title="trastevere"><a href="#" class="tileLinks">TRASTEVERE</a></li>
                <li linkto="trip_4" class="tileItem" title="circus maximus"><a href="#" class="tileLinks">CIRCUS MAXIMUS</a></li>
		    </ul>	
		</div>
		<div class="topnavigation1" style="display:none;">
			<ul id="menu_tour" style="padding:0; float:left; width:100%;margin-top:0px">
				<li linkto="trip_1" class="menuItem1" title="If you don’t know how to use a Ninebot, you can learn in a few minutes in one of the world’s most important historic sites, a few hundred metres from where Brutus, Cassius and the other conspirators murdered Julius Caesar." style="border: #e8e8e8;"><a href="#" class="tabbedLinks">TORRE ARGENTINA</a></li>
		    	<li linkto="trip_2" class="menuItem1" title="We set off from Rome’s most famous terrace, overlooking the beautiful panorama of the Eternal City."><a href="#" class="tabbedLinks">PINCIO – VILLA BORGHESE</a></li>
		    	<li linkto="trip_3" class="menuItem1" title="trastevere"><a href="#" class="tabbedLinks">TRASTEVERE</a></li>
		        <li linkto="trip_4" class="menuItem1" title="circus maximus"><a href="#" class="tabbedLinks">CIRCUS MAXIMUS</a></li>
		    </ul>	
		</div> 
 		<div style="width:100%;float:left;">
            <div class="overflowcontent ContentBelowMenu">
                 <div id="trip_1" class="ContainerTripInfo">
                    <div class="floatContainerDiv">
                        <div class="headingFloatDiv">Ancient Rome - Colosseum - Capitoline Hill</div>
                        <div class="imageFloatDiv"><img src="../../images/tours/img/1.png"></img></div>
                        <div class="footerFloatDiv">From the Colosseum to the Capitol in this amazing promenade along the roads of the Roman Empire, among circuses and temples as well as gardens and sunlit terraces.</div>
                        <div class="tourBookContainer"><input type="button" value="Book Now" onclick="showPackage(this)" tour_id='1' />
                        <div class="footerFloatDiv"><b>Duration</b>: 3 hours</div>
                        <div class="footerFloatDiv"><b>Price</b>: 85,00€*</div>
                        </div>
                     </div>
                    <div class="floatContainerDiv">
                        <div class="headingFloatDiv">The city of the pope kings</div>
                        <div class="imageFloatDiv"><img src="../../images/tours/img/2.png"></img></div>
                        <div class="footerFloatDiv">From beautiful Baroque and Renaissance Navona Square and the mighty Pantheon to majestic St. Peter's and the Vatican.</div>
                        <div class="tourBookContainer"><input type="button" value="Book Now" onclick="showPackage(this)" tour_id='2' />
                        <div class="footerFloatDiv"><b>Duration</b>: 3 hours</div>
                        <div class="footerFloatDiv"><b>Price</b>: 85,00€*</div>
                        </div>
                     </div>
                    <div class="floatContainerDiv">
                        <div class="headingFloatDiv">Ghetto, Tiber island and Trastevere</div>
                        <div class="imageFloatDiv"><img src="../../images/tours/img/3.png"></img></div>
                        <div class="footerFloatDiv">The old streets of the Jewish Ghetto will give you a pretty good idea of what the Ghetto was like hundreds of years ago.<br />We then cross the thousand-year bridge on to Tiber Island from where we glide on through Trastevere.</div>
                        <div class="tourBookContainer"><input type="button" value="Book Now" onclick="showPackage(this)" tour_id='3' />
                        <div class="footerFloatDiv"><b>Duration</b>: 2 hours</div>
                        <div class="footerFloatDiv"><b>Price</b>: 5,000€*</div>
                        </div>
                     </div>
                    <div class="floatContainerDiv">
                        <div class="headingFloatDiv">Moonlit tour of Rome</div>
                        <div class="imageFloatDiv"><img src="../../images/tours/img/4.png"></img></div>
                        <div class="footerFloatDiv">Come out with us tonight!<br />The most beautiful and spectacular squares and fountains of Rome by night. </div>
                        <div class="tourBookContainer"><input type="button" value="Book Now" onclick="showPackage(this)" tour_id='4' />
                        <div class="footerFloatDiv"><b>Duration</b>: 3 hours</div>
                        <div class="footerFloatDiv"><b>Price</b>: 85,00€*</div>
                        </div>
                     </div>
                 </div>
                 <div id="trip_2" class="ContainerTripInfo">
                    <div class="floatContainerDiv">
                        <div class="headingFloatDiv">Villa Borghese</div>
                        <div class="imageFloatDiv"><img src="../../images/tours/img/5.jpg"></img></div>
                        <div class="footerFloatDiv">The most important villa of Rome with its lake (30 min. boat tour) and amazing views from the Pincio terrace across the city.</div>
                        <div class="tourBookContainer"><input type="button" value="Book Now" onclick="showPackage(this)" tour_id='5' />
                        <div class="footerFloatDiv"><b>Duration</b>: 3 hours</div>
                        <div class="footerFloatDiv"><b>Price</b>: 60,00€*</div>
                        </div>
                     </div>
                    <div class="floatContainerDiv">
                        <div class="headingFloatDiv">Best of Rome’s villas, terraces and fountains</div>
                        <div class="imageFloatDiv"><img src="../../images/tours/img/6.jpg"></img></div>
                        <div class="footerFloatDiv">The wonderful villas, terraces and fountains of Rome (including the Spanish Steps, the Trevi Fountain, etc.).</div>
                        <div class="tourBookContainer"><input type="button" value="Book Now" onclick="showPackage(this)" tour_id='6' />
                        <div class="footerFloatDiv"><b>Duration</b>: 3 hours</div>
                        <div class="footerFloatDiv"><b>Price</b>: 10,000€*</div>
                        </div>
                     </div>
                 </div>
                 <div id="trip_3" class="ContainerTripInfo">
                    <div class="floatContainerDiv">
                        <div class="headingFloatDiv">Trastevere and Janiculum</div>
                        <div class="imageFloatDiv"><img src="../../images/tours/img/7.jpg"></img></div>
                        <div class="footerFloatDiv">Trastevere is a delightful historic neighbourhood full of charm and history reflected  in its narrow cobbled streets lined by medieval houses.<br />The Janiculum provides one of the best locations for a scenic view of Rome' s innumerable domes and bell towers.</div>
                        <div class="tourBookContainer"><input type="button" value="Book Now" onclick="showPackage(this)" tour_id='7' />
                        <div class="footerFloatDiv"><b>Duration</b>: 1 hour</div>
                        <div class="footerFloatDiv"><b>Price</b>: 30,00€*</div>
                        </div>
                     </div>
                    <div class="floatContainerDiv">
                        <div class="headingFloatDiv">Trastevere</div>
                        <div class="imageFloatDiv"><img src="../../images/tours/img/8.jpg"></img></div>
                        <div class="footerFloatDiv">Rome’s most characterful neighbourhood. The labyrinth of little alleys and hidden treasures from ancient, mediaeval and Renaissance Rome is not to be missed!</div>
                        <div class="tourBookContainer"><input type="button" value="Book Now" onclick="showPackage(this)" tour_id='8' />
                        <div class="footerFloatDiv"><b>Duration</b>: 2 hours</div>
                        <div class="footerFloatDiv"><b>Price</b>: 5,000€*</div>
                        </div>
                     </div>
                 </div>
                   <div id="trip_4" class="ContainerTripInfo">
                    <div class="floatContainerDiv">
                        <div class="headingFloatDiv">Appian Way, catacombs and the tomb of Cecilia Metella</div>
                        <div class="imageFloatDiv"><img src="../../images/tours/img/9.jpg"></img></div>
                        <div class="footerFloatDiv">An unforgettable tour in the beautiful countryside surrounding Rome. The Appian Way was one of the earliest and strategically most important Roman roads of the ancient republic.<br />It is lined with tombs and catacombs, including the famous Crypt of the Popes.</div>
                        <div class="tourBookContainer"><input type="button" value="Book Now" onclick="showPackage(this)" tour_id='9' />
                        <div class="footerFloatDiv"><b>Duration</b>: 4 hours</div>
                        <div class="footerFloatDiv"><b>Price</b>: 60,00€*</div>
                        </div>
                   </div>
                </div> 
           </div>
           <div class="modalWindow">
               <div id="packageInfoDiv">
                <a href="#" onclick="cancelBooking()" title="Close" class="modalCloseButton">X</a>
                    <table id='planTourDetails'>
                        <tr>
                            <td>
                                <select name="packageSelect" id="packageSelect" class="bookingSelectBox" form="payPalPurchaseForm">
                                    <option value="0">Select Package</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="padding: 0.2em 1em;">Select date &nbsp;&nbsp;<input type="text" name="selectedDateForTour" id="selectedDateForTour" class="datepicker" placeholder="MM/DD/YYYY" form="payPalPurchaseForm" /></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" name="PersonCount" id="PersonCount" class="bookingSelectBox" min="1" max="7" disabled="disabled" placeholder="Tour Members" form="payPalPurchaseForm" onKeyUp="if(this.value > 7){this.value = 7;}"/>
                            </td>
                        </tr>
                        <tr>
                            <td><div style="padding: 0.2em 1em;">Total price<span class="totalPackagePrice"></span></div></td>
                        </tr>
                        <tr>
                            <td>
                                <div style="text-align:center">
                                    <input type="button" value="Book" onclick="confirmBooking()" />
                                    <input type="button" value="Cancel" onclick="cancelBooking()"/>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table id='chekoutWithDetails' style='display:none'>
                        <tr>
                            <td>
                                <input type="text" name="bookingUserName" id="bookingUserName" placeholder="Your Name" class="bookingSelectBox" form="payPalPurchaseForm" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="email" name="bookingUserEmail" id="bookingUserEmail" placeholder="Email address" class="bookingSelectBox" form="payPalPurchaseForm" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="bookingUserPhone" id="bookingUserPhone" class="bookingSelectBox" placeholder="Phone Number" form="payPalPurchaseForm"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="bookingUserConfirm" style='float:left; margin-right:10px;'/>I agree to pay <span class="totalPackagePrice"></span> with Paypal <a style="margin-right:1em; float:right; text-decoration:underline;" href='#' onclick='replanTour()'>Re-plan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="padding: 0.2em 1em;">
                                        <form id="payPalPurchaseForm" action='../../../Common/php/PaypalModule/PaypalCheckoutFile.php?XDEBUG_SESSION_START=ECLIPSE_DBGP&KEY=14272751593961#' METHOD='POST'>
                                            <input type="hidden" name="paypal_payment_amount" id="paypal_payment_amount" />
                                        <!--
                                            <input type="hidden" name="cmd" value="_s-xclick">
                                            <input type="hidden" name="hosted_button_id" value="8UL7JB9FVY3Q2">
                                        -->
                                            <img src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-left:100px;; cursor:pointer" onclick="paypalCheckOutConfirm()" />
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </table>
               </div>
           </div>
       </div>
	</div>
<script src="../../../Common/Cupertino/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../js/tourpage.js" type="text/javascript"></script>    

<?php 
	require_once 'footer.php';
?>
