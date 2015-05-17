var linkToDir ;
var imgCounter = 1;
var animateImgFunction;
$(function(){
	tilesAnimation();
	$('#home_page_tile').find('li.hoverAnimate').each(function(){
		$(this).on('mouseover',function(){
            generateSlideItemContent(this);
            $('.homePageImageDiv').css('display', 'none');
            $('#newsEventsBanner').css('display', 'none');
		});
		$(this).on('mouseout',function(){
            destroySlideItemContent(this);
            $('.homePageImageDiv').css('display', 'block');
            $('#newsEventsBanner').css('display', 'block');
		});
	});
});
var j=0;
var tilesAnimation	=	function(){
	var tileCount;
	var homePageTiles	=	$('#home_page_tile').find('li');
	for(tileCount=0;tileCount<homePageTiles.length;tileCount++){
		setTimeout(function(){
			$(homePageTiles[j]).css('margin-left','0');
			$(homePageTiles[j]).css('width','20%');
			$(homePageTiles).css('transform','rotateY(88deg)');
			j++;
		},tileCount*100);
	}
	setTimeout(function(){
		$(homePageTiles).css('transform','rotateY(0deg)');
	},1000);
};