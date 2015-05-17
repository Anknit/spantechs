/*
* Author: Aditya
* date: 08-Aug-2014
* JavaScript Document
*
*/
// 
	
addShadowToNode	=	function(node){
	$(node).addClass('selectViaShadow');
};

removeShadowFromNodes	=	function(nodesList){
	$(nodesList).removeClass('selectViaShadow');
};
