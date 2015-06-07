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

    Ninebot_E   =   [
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
		}
    ];
    
	Ninebot_Police		=	[
		{
			productName			: 'NINEBOT E POLICE',
			productDescription	: 'Ninebot attrezzato per l’utilizzo di sorveglianza. <br />La piattaforma è corredata con 2 rack di sostegno su cui sono montate 2 capaci borse in pvc per contenere documenti o strumenti . Nella barra del manubrio la presa Usb con una uscita da 5 volt consente di collegare apparati di telecomunicazione o informatici. <br />Su richiesta possono essere fornite in sostituzione di una o di entrambe le borse contenitori per il supporto e la ricarica con alimentazione per apparati elettronici e di pronto intervento.',
			productPrice		: '€4500',
			productImage		: '5.png',
		}
	];
    
    Miscellaneous  =   [
		{
			productName			: 'con videocamera a memoria interna',
			productDescription	: 'demo description',
			productPrice		: '€600',
			productImage		: '6.png',
		}
	];
	
    createAndAppendContainersForItem =   function(TabContainer){
        productItemContainer    =   $('<div class="productItemContainer"></div>');
        productItemImage        =   $('<div class="productItemImage"></div>');
        productItemThumbNailsContainer    =   $('<div class="productItemThumbNailsContainer"></div>');
        productItemTitle        =   $('<div class="productItemTitle"></div>');
        productItemDescription  =   $('<div class="productItemDescription"></div>');
        productItemPrice        =   $('<div class="productItemPrice"></div>');
        productItemContainer.append(productItemImage);
        productItemContainer.append(productItemThumbNailsContainer);
        productItemContainer.append(productItemTitle);
        productItemContainer.append(productItemDescription);
        productItemContainer.append(productItemPrice);
        TabContainer.append(productItemContainer);
        
        return productItemContainer;
    };
    
    updateProductsContainer    =    function(ContainerTab, imgPath, thumbNails, Name, Description, Price){
        TabContainer    =   $('#'+ContainerTab);
        containerProduct=   createAndAppendContainersForItem(TabContainer);
        
        imgNode =   $('<img />').attr('src', imgPath);
        //find the productItemThumbNailsContainer in containerProduct, and append thumbnails
        //$('.productItemthumbNails').append(imgNode);
        containerProduct.find('.productItemImage').append(imgNode);
        containerProduct.find('.productItemTitle').html(Name);
        containerProduct.find('.productItemDescription').html(Description);
        containerProduct.find('.productItemPrice').html(Price);
        
    };
    
    function updateCategoryProducts(ProductsCategory){
        for(j=0; j< ProductsCategory.length; j++){
            proType =   window[ProductsCategory[j]];
            for(i =0; i < proType.length; i++){
                productItem	=	proType[i];

                productImage		=	productItem.productImage;
                imagePath           =   imgDirectoryPath+productImage
                productName         =   productItem.productName;
                productDescription  =   productItem.productDescription;
                productPrice        =   productItem.productPrice;
                thumbNailData   =   '';
                updateProductsContainer(ProductsCategory[j], imagePath, thumbNailData, productName, productDescription, productPrice);
            }
        }
    }
    updateCategoryProducts(['Ninebot_E', 'Ninebot_Police', 'Miscellaneous']);
});
