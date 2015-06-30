<?php 
	require_once 'header.php';
?>
<link href="../../css/gallery.css" rel="stylesheet" type="text/css" />
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="initial-scale=1, minimum-scale=1, target-densityDpi=device-dpi">
    <script>
        var pageIdentifier  =   'Gallery';
    </script>
	<div class="content">
		<div class="galleryContentContainer">
			<div class='headContain'>
				<div class='galleryHead activeHead' data-show='imagesContainer'>
					<h2>Photos</h2>
				</div>
				<div class='galleryHead' data-show='videosContainer'>
					<h2>Videos</h2>
				</div>
			</div>
			<div style='display:table'>
			<div class="typeContainer activeContainer" id="imagesContainer">
				<div>
					<div>
						<img src='./../../images/tours/1.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/2.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/3.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/4.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/5.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/6.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/7.jpg'>
					</div><!--
					<div>
						<img src='./../../images/tours/1.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/3.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/4.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/1.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/1.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/5.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/6.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/1.jpg'>
					</div>
					<div>
						<img src='./../../images/tours/1.jpg'>
					</div>
				--></div>
			</div>
			<div class="typeContainer" id="videosContainer">
				<div>
					<div>
						<object data='http://www.youtube.com/embed/I_y2LOy-JLE'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/b5LvxOA_fY4'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/zAXRrCiphrA'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/8izbWCUvg9g'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/YTCc9mJyvpM'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/ztgebRfeYwQ'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/GTiYMPjqXzg'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/uzAqaccO47s'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/FtgZMB9SN1o'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/1hgD7Urkvp0'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/eIodswrTq0g'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/kDUJ9OX9Y5g'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/7_5tR8YdiLE'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/dKvdnTo_qIY'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/6cGsR4aoGNE'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/3g8wEPq0s2s'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/aAZAzHMzClc'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/Vv7QMfiIwWs'></object>
					</div>
					<div>
						<object data='http://www.youtube.com/embed/_zn8SmrOMZ8'></object>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class='modalWindow'>
		<div id='imgModalContainer'>
			<div class='imgConHead'>
				<div class='prevBut' onclick="showPrevImage();">
					Prev
				</div>
				<div class='nextBut' onclick="showNextImage();">
					Next
				</div>
				<div class='close' onclick="$('.modalWindow').css('display','none');">
					Close
				</div>
			</div>
			<div class='imgConBody'>
			</div>
			<div class='imgConFoot'>
			</div>
		</div>
	</div>
<script type="text/javascript" src='./../../js/gallery.js'></script>
<?php 
	require_once 'footer.php';
?>
