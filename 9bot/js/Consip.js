/*
* Author: Aditya
* date: 08-Aug-2014
* JavaScript Document
*
*/
// 

$(function(){
	galleryNode	=	$('.GalleyForLinkToProduct');
	imgDirectoryPath	=	'../../images/productCatalogue/';

	productsInfo		=	[
		{
			productName			: 'NINEBOT E base',
			productDescription	: 'Ninebot può essere utilizzato come trasporto personale per percorsi di breve e media distanza. Essendo facilmente smontabile e molto leggero (23 kg) può essere comodamente caricato nel portabagagli dell’auto o essere trasportato con imbracature di servizio.',
			productPrice		: '€3904',
			productImage		: '1.png',
		}, 
		
		{
			productName			: 'con manico corto',
			productDescription	: 'Il manico corto può essere facilmente sostituito al manubrio standard e consente all’operatore di avere le mani libere anche durante gli spostamenti.',
			productPrice		: '€100',
			productImage		: '2.png',
		},
		
		{
			productName			: 'con tabella frontale',
			productDescription	: 'La tabella frontale viene montata su Ninebot con un supporto plastico di facile applicazione.',
			productPrice		: '€100',
			productImage		: '3.png',
		},
		
		{
			productName			: 'panello frontale con scritta luminosa, dinamica e programmabile da PC',
			productDescription	: 'La scritta luminosa, con una batteria ricaricabile al litio o alimentato via USB dal Ninebot, consente di programmare e trasmettere fino a 5 differenti messaggi ed avvisi dinamici. <br />Dimensione: 338x62x15 mm <br />Display: 326x44 mm <br />Effetti: 5 (Scroll da destra a sinistra, Snow, Flash, Hold, Hold con cerchi) <br />Controllo della luminosità: 4 livelli (25%, 50%, 75%, 100%) <br />Caratteri testuali: 1500; grafici: sì <br />Programmazione: tramite PC',
			productPrice		: '€300',
			productImage		: '4.png',
		},
		
		{
			productName			: 'NINEBOT E POLICE',
			productDescription	: 'Ninebot attrezzato per l’utilizzo di sorveglianza. <br />La piattaforma è corredata con 2 rack di sostegno su cui sono montate 2 capaci borse in pvc per contenere documenti o strumenti . Nella barra del manubrio la presa Usb con una uscita da 5 volt consente di collegare apparati di telecomunicazione o informatici. <br />Su richiesta possono essere fornite in sostituzione di una o di entrambe le borse contenitori per il supporto e la ricarica con alimentazione per apparati elettronici e di pronto intervento.',
			productPrice		: '€4500',
			productImage		: '5.png',
		},
		
		{
			productName			: 'con videocamera a memoria interna',
			productDescription	: 'demo description',
			productPrice		: '€600',
			productImage		: '6.png',
		}
	];
	
	for(i =0; i < productsInfo.length; i++){
		productItem	=	productsInfo[i];
		productImage		=	productItem.productImage;
		NodeCreated			=	$('<img />').attr('src', imgDirectoryPath+productImage).addClass('itemDisplayInGallery').attr('dataIndex', i);
		NodeCreated.appendTo(galleryNode);
	}
	
	galleryImagesList	=	galleryNode.find('img');
	
	galleryImagesList.click(function(){
		dataIndex	=	$(this).attr('dataIndex');
		removeShadowFromNodes(galleryImagesList);
		addShadowToNode(this);
		productItem	=	productsInfo[dataIndex];
		ProductDisplayedNode	=	$('.productDisplay');
		ProductDisplayedNode.find('.catalogRightPanel').css('background', 'url('+$(this).attr('src')+')');
//			ProductDisplayedNode.find('img').attr('src', $(this).attr('src'));
		ProductDisplayedNode.find('.productName').html(productItem.productName);
		ProductDisplayedNode.find('.productDescription').html(productItem.productDescription);
		ProductDisplayedNode.find('.productPrice').html(productItem.productPrice);
	});
	
	$(galleryNode.find('img')[0]).click();
});
