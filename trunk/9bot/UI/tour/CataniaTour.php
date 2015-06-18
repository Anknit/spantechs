<?php 
	require_once './header.php';
?>
    <script>
        var pageIdentifier  =   'Tour';
    </script>
    <link href="./../../css/cataniaTour.css" rel="stylesheet" type="text/css"> 
	<div class="content">
    	<div class="cataniaTopHeader">
        	<div class='cataniaTourThumbContainer'>
            	<div class='cataniaTourThumb'>
                	<a href='#basicCatania'>
            	    	<h2>Segway Basic Tour</h2>
                    </a>
                </div>
            	<div class='cataniaTourThumb'>
                	<a href='#grandCatania'>
        	        	<h2>Segway Grand Tour</h2>
    	               </a>
                </div>
            	<div class='cataniaTourThumb'>
                	<a href='#suggestiveCatania'>
	                	<h2>Segway Suggestive Tour</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class='cataniaTourContent'>
        	<div class="cataniaContainer" id="basicCatania">
               	<img src='./../../images/tours/catania/basic.png' alt='Segway Basic Tour'>
            </div>
        	<div class="cataniaContainer" id="grandCatania">
               	<img src='./../../images/tours/catania/grand.png' alt='Segway Grand Tour'>
            </div>
        	<div class="cataniaContainer" id="suggestiveCatania">
               	<img src='./../../images/tours/catania/suggestive.png' alt='Segway Suggestive Tour'>
            </div>
        </div>
	</div>
<?php 
	require_once './footer.php';
?>
