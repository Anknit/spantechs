<?php 
	require_once './header.php';
?>
    <script>
        var pageIdentifier  =   'Tour';
    </script>
	<div class="content">
        <div align='center'>
            <hr style="margin-left: 0px;opacity: 0.5;color: #eee;" />
            <div>
                <p>
                    <u>
                        <b>Payment Confirmation</b>
                    </u>
                </p>
            </div>
            <span>
                Your payment details are verified successfully.
                <br /> Press Confirm to proceed with this payment <br /> OR <br />
                Press Cancel to abort this transaction
            </span>
            <form action='makePayment.php' METHOD='POST'>
                 <input type='submit' style='margin-top:15px' name='payment_Confirm' value="Confirm"  border='0' align='top'/>
                 <input type='submit' name='payment_Cancel' value="Cancel"  border='0' align='top'/>
            </form>
        </div>
	</div>
<?php 
	require_once './footer.php';
?>
