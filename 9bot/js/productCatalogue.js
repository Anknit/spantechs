$(function(){
    renderProductCatalogue();
});

function renderAccordions(){
    $( "#accordion" )
    .accordion({
        header: "> div > h4",
        heightStyle: "content",
        collapsible: false,
        event: "click hoverintent",
        active: 0
    })
    .sortable({
        axis: "y",
        handle: "h4",
        stop: function( event, ui ) {
          // IE doesn't register the blur when sorting
          // so trigger focusout handlers to remove .ui-state-focus
          ui.item.children( "h4" ).triggerHandler( "focusout" );

          // Refresh accordion to handle new order
          $( this ).accordion( "refresh" );
        }
    });
}

function renderSliders(){
    var id;
    $('.renderingSliderSelector').each(function(){
        id = $(this).attr('id');
        HomePageSlideShow(true, id, false);
    });
}

function createAccordion(){
    var accordion = $('<div id="accordion"></div>');
    return accordion;
}

function fillDataToProductNode(NodeObject, DataObject, itemNumber){
    NodeObject.find('h4').text(DataObject.name);
    NodeObject.find('.textContent > p').html(DataObject.description);
    if(DataObject.imagesUrl.length > 0){
        NodeObject.find('#testSlider').attr('id', 'testSlider'+itemNumber); //change the id to new one with index
        var slideParentNode =   NodeObject.find('[u="slides"]');  //.jssorSlidesDimensions
        for(var i = 0; i< DataObject.imagesUrl.length; i++){
            var imageNode   =   $('<div><img src="'+DataObject.imagesUrl[i]+'" /></div>');
            imageNode.appendTo(slideParentNode);
        }
    }

    return NodeObject;
}

function renderProductCatalogue(){
    var products    =   getProductData();
    if(products.length > 0){
        var accordion = createAccordion();
        accordion.appendTo($('.content'));
        accordion = $('.content').find('#accordion');
        var productItemNode;
        for(var i = 0; i< products.length; i++){
            productItemNode =   $('#demoContent').find('.group').clone();
            productItemNode =   fillDataToProductNode(productItemNode, products[i], i);
            productItemNode.appendTo(accordion);
        }
    }
    renderSliders();
    renderAccordions();
}
