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
						<iframe src='http://www.youtube.com/embed/I_y2LOy-JLE' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/b5LvxOA_fY4' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/zAXRrCiphrA' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/8izbWCUvg9g' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/YTCc9mJyvpM' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/ztgebRfeYwQ' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/GTiYMPjqXzg' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/uzAqaccO47s' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/FtgZMB9SN1o' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/1hgD7Urkvp0' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/eIodswrTq0g' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/kDUJ9OX9Y5g' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/7_5tR8YdiLE' allowfullscreen>
						</iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/dKvdnTo_qIY' allowfullscreen></iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/6cGsR4aoGNE' allowfullscreen></iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/3g8wEPq0s2s' allowfullscreen></iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/aAZAzHMzClc' allowfullscreen></iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/Vv7QMfiIwWs' allowfullscreen></iframe>
					</div>
					<div>
						<iframe src='http://www.youtube.com/embed/_zn8SmrOMZ8' allowfullscreen></iframe>
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
