<?php
	/*
		This file describes the Reciept format
	*/
	error_reporting(0);
?>
<meta charset="utf-8" />
<style>
	.fontFormat{
		font-size:18px;
		font-weight:600;
		color:#333;
	}
	.smallBlueFontFormat{
		font-size:12px;
		color:#333;
	}
	.dataFontFormat{
		font-size:16px;
		color:#333;;
	}
	td, th{
		padding:15px 5px;
	}
	.receiptInfoHead {
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  margin: 15px 5px;
  text-decoration: underline;
}
</style>
<div style="width:70%;margin:auto;left:0;right:0;min-width:500px">
	<span style="margin-left:2%;">
    	<img src="http://9botitalia.com/9bot/images/icons/ninebot.png" style='width:150px;'/>
    </span>
    <div style="width:100%;">
    	<div class="receiptInfoHead">Tour Booking Payment Receipt</div>
    	<div class="fontFormat" style="text-align:left">Date:  <span class="dataFontFormat"><?php echo date("Y-m-d").' UTC';?></span></div>
    	<div class="fontFormat" style="text-align:left;">To:  <u><span class="dataFontFormat"><?php echo $dataArray['bookingUserName'];?></span></u></div>
    	<div class="fontFormat" style="text-align:left;">Email:  <u><span class="dataFontFormat"><?php echo $dataArray['bookingUserEmail'];?></span></u></div>
    	<div class="fontFormat" style="text-align:left;">Phone:  <u><span class="dataFontFormat"><?php echo $dataArray['bookingUserPhone'];?></span></u></div>
    	<div class="fontFormat" style="text-align:center;margin:15px auto; width:50%;">Receipt Number:  <span class="dataFontFormat"><?php echo $dataArray['recieptNumber'];?></span></div>
        <div style="  height: 40%; overflow: auto;">
        	<table width="100%" border="1px solid" bordercolor="#ccc" cellpadding="0" cellspacing="0">
            	<tr>
                	<th>Tour details</th>
                	<th>Person</th>
                	<th>Price</th>
                	<th>Total</th>
                </tr>
            	<tr height="100px;">
                	<td align="center"><?php echo $dataArray['selectedPackageDescription'];?></th>
                	<td align="center"><?php echo $dataArray['personCount'];?></th>
                	<td align="center"><?php echo $dataArray['amountPaid'];?></th>
                	<td align="center"><?php echo $dataArray['amountPaid'];?></th>
                </tr>
            	<tr>
                	<td colspan="3" align="right">Grand Total:&nbsp;&nbsp; </th>
                	<td style="font-weight:bold"><?php echo $dataArray['amountPaid'];?></th>
                </tr>
            </table>
        </div>
    	<div class="fontFormat" style="text-align:left;float:left;">
        	<b>NEW MOVING SOCIETA' COOPERATIVA</b><br />
            <span class="smallBlueFontFormat">
                Sede Legale: Via dei Fienaroli 6/A – CAP. 00153 - ROMA(RM) - Sede Operativa: Via di San Calisto 9 - ROMA<br />
                P.IVA e C.F. 12158301007 - Numero R.E.A. 1355048 del 11/12/12<br />
                tel. 06 58 17 585; + 39 392 903 49274 ninebot.servizioclienti@gmail.com<br />
            </span>
        </div>
        <hr width="100%;" />
    </div>
</div>