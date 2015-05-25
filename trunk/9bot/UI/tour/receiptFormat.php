<?php
	/*
		This file describes the Reciept format
	*/
	error_reporting(0);
?>
<style>
	.fontFormat{
		font-size:18px;
		font-weight:600;
		color:blue;
	}
	.smallBlueFontFormat{
		font-size:12px;
		color:blue;
	}
	.dataFontFormat{
		font-size:16px;
		color:#000;;
	}
</style>
<div style="width:80%;margin:auto;left:0;right:0;min-width:500px">
	<span style="margin-left:2%;">
    	<img src="../../images/icons/ninebot.png" />
    </span>
    <div style="width:100%;">
    	<div class="fontFormat" style="width:100%;margin:auto;left:0;right:0;text-align:center">Date:  <span class="dataFontFormat"><?php echo date("Y-m-d").' UTC';?></span></div>
        <br />
        <br />
        <br />
    	<div class="fontFormat" style="text-align:left;">To:  <u><span class="dataFontFormat"><?php echo $dataArray['bookingUserName'];?></span></u></div>
    	<div class="fontFormat" style="text-align:left;">Email:  <u><span class="dataFontFormat"><?php echo $dataArray['bookingUserEmail'];?></span></u></div>
    	<div class="fontFormat" style="text-align:left;">Phone:  <u><span class="dataFontFormat"><?php echo $dataArray['bookingUserPhone'];?></span></u></div>
        <br />
        <br />
        <br />
    	<div class="fontFormat" style="text-align:left;float:left">Receipt Number:  <span class="dataFontFormat"><?php echo $dataArray['recieptNumber'];?></span></div>
        <div>
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
                	<td><?php echo $dataArray['amountPaid'];?></th>
                </tr>
            </table>
        </div>
    	<div class="fontFormat" style="text-align:left;float:left;margin-top:100px;">
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