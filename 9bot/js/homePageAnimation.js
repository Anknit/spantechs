/*
* Author: Aditya
* date: 08-Aug-2014
* JavaScript Document
*
*/
// 
function HomePageSlideShow(caption, sliderID) {
	if(caption != false){
		//Define an array of transition for captions
		var _CaptionTransitions = [
			{$Duration:900,$Rotate:1,$Easing:{$Opacity:$JssorEasing$.$EaseLinear,$Rotate:$JssorEasing$.$EaseInQuad},$Opacity:2},
			{$Duration:900,$Zoom:4,$Rotate:1,$Easing:{$Zoom:$JssorEasing$.$EaseInQuad,$Opacity:$JssorEasing$.$EaseLinear,$Rotate:$JssorEasing$.$EaseInQuad},$Opacity:2,$Round:{$Rotate:0.5}},
			{$Duration:1200,y:0.5,$Zoom:11,$Rotate:0.2,$Easing:{$Top:$JssorEasing$.$EaseOutCubic,$Zoom:$JssorEasing$.$EaseInCubic},$Opacity:2,$During:{$Top:[0,0.5]}},
			{$Duration:1200,y:0.6,$Clip:3,$Easing:$JssorEasing$.$EaseInCubic,$Opacity:2},
			{$Duration:1200,x:0.6,$Zoom:3,$Rotate:-0.3,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Rotate:$JssorEasing$.$EaseInBack},$Opacity:2},
			{$Duration:1200,x:-0.5,$Zoom:11,$Easing:{$Left:$JssorEasing$.$EaseOutJump,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$Round:{$Zoom:0.5}},
			
		];
		_CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
		_CaptionTransitions["T|IB"] = { $Duration: 1200, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
		_CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
	}

	//Define an array of slideshow transition code
	var _SlideshowTransitions = [
		{$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Opacity:2},
		{$Duration:1200,x:1,$Delay:40,$Cols:6,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:{$Left:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$ZIndex:-10,$Brother:{$Duration:1200,x:1,$Delay:40,$Cols:6,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:{$Top:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$ZIndex:-10,$Shift:-100}},
		{$Duration:1200,y:-1,$Easing:{$Top:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$ZIndex:-10,$Brother:{$Duration:1200,y:-1,$Easing:{$Top:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$ZIndex:-10,$Shift:-100}},
		{$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Opacity:2},
		{$Duration:1000,y:1,$Easing:$JssorEasing$.$EaseInBounce},
		{$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Opacity:2}
	];
	var options = {
		$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
		$AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
		$AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
		$PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

		$ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
		$SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
		$SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
		$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
		//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
		//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
		$SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
		$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
		$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
		$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
		$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
		$DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

		$SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
			$Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
			$Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
			$TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
			$ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
		},

		$ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
			$Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
			$ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
			$AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
			$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
		}
	};
		
	if(caption != false){
		options.$CaptionSliderOptions	=	{     //[Optional] Options which specifies how to animate caption
			$Class: $JssorCaptionSlider$,   //[Required] Class to create instance to animate caption
			$CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
			$PlayInMode: 1,    //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
			$PlayOutMode: 3   //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
		}
	}
	
	var jssor_slider1 = new $JssorSlider$(sliderID, options);
	//responsive code begin
	//you can remove responsive code if you don't want the slider scales while window resizes
	function ScaleSlider() {
		var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
		if (parentWidth)
			jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 1920), 300));
		else
			window.setTimeout(ScaleSlider, 30);
	}
	ScaleSlider();

	$(window).bind("load", ScaleSlider);
	$(window).bind("resize", ScaleSlider);
	$(window).bind("orientationchange", ScaleSlider);
}
