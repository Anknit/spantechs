/*
* Author: Aditya
* date: 08-Aug-2014
* JavaScript Document
*
*/

/*
	This script is to be used with its css file.
	
	Before introducing this script to a webpage, define the mandatory variables
		pathToActionDir, {This should include action folder followed by forward slash also. This is required because the path is relative to url of the web page Default is in respect to home page}
		PageType, {1: Home, 2: ninbot&more, 3: tour}
		DivSectionSelector, {This is the jquery selector of area where news is to be shown e.g. default '#contentNewsItems'}
		pathToNewsImageDir, {This should include newsAndEvents folder followed by forward slash also. This is required because the path is relative to url of the web page Default is in respect to home page}
*/
$(function(){
	var generateNews	=	new Object();
	
	generateNews	=	{
		pathToActionDir		:	'./actions/',
		PageType			:	'1',
		DivSectionSelector	:	'.contentNewsItems',
		pathToNewsImageDir	:	'./images/newsAndEvents/',
		
		getNewsData:function(){
			var url		=	this.pathToActionDir+'getNewsData.php?Page='+this.PageType;
			var	Method	=	'POST';
			var	OnSuccess	=	function(response){
				if(response	!=	0){
					console.log('start generating news sections');
					response	=	JSON.parse(response);
					generateNews.getSectionAndAppendData(response);
				}
			};
			var async	=	true;
			callRemoteLink(url, Method, OnSuccess, async);
		},
		
		appendNewsHeading: function(ParentContainer){
			ParentContainer.append($('<h3>News</h3>'));
			return true;
		},
		
		generateNewsSection:function(ParentContainer, dataElement){
			NewsItem	=	$('<div></div>').addClass('newsItem');
			NewsFig		=	$('<div></div>').addClass('newsFig hvr-float-shadow');
			if(dataElement[0] != '' && dataElement[0] != null && dataElement[0] != undefined) {
				ImageForNews=	$('<img />').attr('src', this.pathToNewsImageDir+dataElement[0]).css('max-width','100%').css('max-height', '300px');
				NewsFig.append(ImageForNews);
			}
			NewsTitle	=	$('<div class="newsHeadline"><h3>'+decodeURI(dataElement[1])+'</h3></div>');
			NewsDetails	=	$('<div class="newsDescription qouteSpan"><p>'+decodeURI(dataElement[2])+'</p></div>');
			NewsItem.append(NewsFig);
			NewsItem.append(NewsTitle);
			NewsItem.append(NewsDetails);
			ParentContainer.append(NewsItem);
			
			return true;
		},
	
		getSectionAndAppendData:function(Data){
			if(Object.keys(Data).length > 0 && this.DivSectionSelector != ''){
				ParentContainer	=	$(this.DivSectionSelector);
				this.appendNewsHeading(ParentContainer);
				for(var i = 0; i< Data.length; i++)
					this.generateNewsSection(ParentContainer, Data[i]);
			}
		},
		
		init:function(PageType, DivSectionSelector){
			if(PageType != null && PageType != undefined && PageType != ''){
				this.PageType = PageType;
			}
			if(DivSectionSelector != null && DivSectionSelector != undefined && DivSectionSelector != ''){
				this.DivSectionSelector	=	DivSectionSelector;
			}
			if(pathToNewsImageDir != null && pathToNewsImageDir != undefined && pathToNewsImageDir != ''){
				this.pathToNewsImageDir	=	pathToNewsImageDir;
			}
			if(pathToActionDir != null && pathToActionDir != undefined && pathToActionDir != ''){
				this.pathToActionDir	=	pathToActionDir;
			}
			this.getNewsData();  
		}
	};
	generateNews.init(PageType, DivSectionSelector);
});
