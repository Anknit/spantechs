$(function(){
	animateNuovoLogo();
});

var animateNuovoLogo	=	function(){
	setTimeout(function(){
		var logoDiv	=	document.getElementsByClassName('nuovotoplogo')[0];
		if(logoDiv != null && logoDiv != undefined){
			logoDiv.style.backgroundPosition = "10% 10px";
		}
	},500);
}
