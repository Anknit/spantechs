$(function(){
	$('.galleryHead').on('click',function(){
		$('.activeHead').removeClass('activeHead');
		$(this).addClass('activeHead');
		$('.activeContainer').removeClass('activeContainer');
		$('#'+$(this).attr('data-show')).addClass('activeContainer');
	});
	$('body').on('keydown',function(event){
		if(event.keyCode	==	39){
			showNextImage();
		}
		else if(event.keyCode == 37){
			showPrevImage();
		}
		else{
			return false;
		}
	});
	$('#imagesContainer img').on('click',function(){
		$('.modalWindow').css('display','block');
		$('.imgConBody').html('');
		$('.imgConBody').append('<img src="'+$(this).attr('src')+'" />');
	});
});
var showPrevImage	=	function(){
	var curSrc		=	$('.imgConBody img').attr('src');
	var thumbCur	=	$('#imagesContainer img[src="'+curSrc+'"]').eq(0);
	var newCont		=	thumbCur.parent().prev('div');
	if(newCont.length == 0){return false;}
	var newSrc		=	newCont.find('img').attr('src');
	$('.imgConBody img').attr('src',newSrc);
};
var showNextImage	=	function(){
	var curSrc		=	$('.imgConBody img').attr('src');
	var thumbCur	=	$('#imagesContainer img[src="'+curSrc+'"]').eq(0);
	var newCont		=	thumbCur.parent().next('div');
	if(newCont.length == $('#imagesContainer img').length){return false;}
	var newSrc		=	newCont.find('img').attr('src');
	$('.imgConBody img').attr('src',newSrc);
};