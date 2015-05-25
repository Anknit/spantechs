var slideImgCounter=0;
var slider;
var sliderTimeoutFunction;
var slideImg = function(dir){
	clearTimeout(sliderTimeoutFunction);
	slider = document.getElementById("contactSlider");
	if(slider != null &&slider != undefined){
		if(dir==1){
			slideImgCounter	=	slideImgCounter+1;
		}
		else if(dir==2){
			slideImgCounter	=	slideImgCounter-1;
		}
		if(slideImgCounter==0){
			slideImgCounter = 7;	
		}
		else if(slideImgCounter==8){
			slideImgCounter = 1;	
		}
		imgSrcStr	=	'../../images/tours/'+slideImgCounter+'.jpg';
		slider.style.opacity = '0.1';
		setTimeout(function(){
			slider.setAttribute('src',imgSrcStr);
			slider.onload = function(){
				slider.style.opacity = '1';
			}
		},1000);
		sliderTimeoutFunction = setTimeout(startSlider,10000);
	}
};
var startSlider	=	function(){
	slideImg(1);
};
$(function(){
	startSlider();
});
