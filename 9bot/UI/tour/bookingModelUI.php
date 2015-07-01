<script src="../../../Common/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../js/tourpage.js" type="text/javascript"></script>    
    <div class="modalWindow">
       <div id="packageInfoDiv">
        <a onclick="cancelBooking()" title="Close" class="modalCloseButton">X</a>
        	<div class='modalHeader'>Booking Info</div>
            <table id='planTourDetails'>
                <tr>
                    <td title="Please select a tour plan">
                        <select name="packageSelect" id="packageSelect" class="bookingSelectBox" form="payPalPurchaseForm">
                            <option value="0">Select Package</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding: 0.2em ;width:75%;margin:auto;"><span style="float: left;">Enter number of People</span><input type="number" name="PersonCount" id="PersonCount" class="bookingSelectBox" min="1" max="7" placeholder="Tour Members" title="Tour Members" form="payPalPurchaseForm" onKeyUp="checkNum(this); if(this.value > 7){this.value = 7;}"/></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding: 0.2em ;width:75%;margin:auto;" title="Please select the date for which you want to book tour"><span style="float: left;">Select date</span><input type="text" name="selectedDateForTour" id="selectedDateForTour" class="datepicker" placeholder="MM/DD/YYYY" form="payPalPurchaseForm" /></div>
                    </td>
                </tr>
                <tr>
                    <td><div style="padding: 0.2em;width:75%;margin:auto;"><span style="float:left;">Total price</span><span class="totalPackagePrice"></span></div></td>
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
                    <td title="Please enter your name">
                        <input type="text" name="bookingUserName" id="bookingUserName" placeholder="Your Name" class="bookingSelectBox" form="payPalPurchaseForm" />
                    </td>
                </tr>
                <tr>
                    <td title="Please enter your email id">
                        <input type="email" name="bookingUserEmail" id="bookingUserEmail" placeholder="Email address" class="bookingSelectBox" form="payPalPurchaseForm" />
                    </td>
                </tr>
                <tr>
                    <td title="Please enter your telephone number">
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
                                <form id="payPalPurchaseForm" action='../../../Common/php/PaypalModule/PaypalCheckoutFile.php' METHOD='POST'>
                                    <input type="hidden" name="selectedPackageDescription" id="selectedPackageDescription" />
                                    <input type="hidden" name="paypal_payment_amount" id="paypal_payment_amount" />
                                    <img id="paypalImage" src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-left:100px;opacity:0.5; cursor:pointer" onclick="paypalCheckOutConfirm()" />
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
       </div>
    </div>
