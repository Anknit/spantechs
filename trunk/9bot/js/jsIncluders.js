/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function(){
    if(typeof document.createStyleSheet === 'undefined') {
        document.createStyleSheet = (function() {
            function createStyleSheet(href) {
                if(typeof href !== 'undefined') {
                    var element = document.createElement('link');
                    element.type = 'text/css';
                    element.rel = 'stylesheet';
                    element.href = href;
                }
                else {
                    var element = document.createElement('style');
                    element.type = 'text/css';
                }

                document.getElementsByTagName('head')[0].appendChild(element);
                var sheet = document.styleSheets[document.styleSheets.length - 1];

                if(typeof sheet.addRule === 'undefined')
                    sheet.addRule = addRule;

                if(typeof sheet.removeRule === 'undefined')
                    sheet.removeRule = sheet.deleteRule;

                return sheet;
            }

            function addRule(selectorText, cssText, index) {
                if(typeof index === 'undefined')
                    index = this.cssRules.length;

                this.insertRule(selectorText + ' {' + cssText + '}', index);
            }

            return createStyleSheet;
        })();
    }
});
var loadHeaderAndFooter =   function(){
    $('body').append('<div id="temporaryDivForIncludes">');
    $('#temporaryDivForIncludes').load('header.html .header', moveHeader);
    $('#temporaryDivForIncludes').load('footer.html .footer', moveFooter);
};

var moveHeader  =   function(){
    $('.header').insertBefore($('.content'));
    if(typeof setSelectionOnHeaderMenu != 'undefined') {
        setSelectionOnHeaderMenu();
    }
};

var moveFooter  =   function(){
    $('.footer').insertAfter($('.content'));
    //$('#temporaryDivForIncludes').remove();
};

var LoadHeadCss =   function(){
    var css1    =   ['../ninebotitaliacss/layout.css', '../ninebotitaliacss/slider.css', '../ninebotitaliacss/floatingdiv.css', '../ninebotitaliacss/tileNav.css', 'css/tourhome.css', '../Common/Cupertino/jquery-ui.min.css'];
    for(i = 0; i< css1.length; i++){
        document.createStyleSheet(css1[i]);
    }
};

var loadScripts  =   function(){
    var scriptsTobeIncluded =   ['../Common/js/JsFunctionsToLocatePopUpdiv.js', '../Common/js/commonFunctions.js', 'js/headerMenuSelectors.js', 'js/commonanimate.js', '../Common/Cupertino/jquery-ui.min.js', '../js/slider.js'];
    for(i = 0; i< scriptsTobeIncluded.length; i++){
        $('head').append('<script src="'+scriptsTobeIncluded[i]+'" type="text/javascript"></script>');
    }
};

$(loadHeaderAndFooter);
$(LoadHeadCss);
$(loadScripts);