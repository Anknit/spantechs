/*
* Author: Aditya
* date: 08-Aug-2014
* JavaScript Document
*
*/
// 

var map;
var map2;
var j=0;
var marker	=	[];
var ankit = '';
var locMapMark;
var locMapWindow;
var locMap;
var allLocationString = '';

function getContactsData(){
	var url		=	'../../actions/dataInterface.php?action=get&data=contactData';
	var	Method	=	'POST';
	var	OnSuccess	=	function(response){
		if(response	!=	0){
			console.log('start generating contacts shops');
			response	=	JSON.parse(response);
			renderShopsInfo(response);
		}
	};
	var async	=	true;
	callRemoteLink(url, Method, OnSuccess, async);
}

function renderShopsInfo(data){
	for(i=0;i<data.length;i++){
		shopName=	decodeURI(data[i].Name);
		address	=	decodeURI(data[i].Address);
		Email	=	decodeURI(data[i].Email);
		Phone	=	decodeURI(data[i].Phone);
		website	=	decodeURI(data[i].Website);
	  	allLocationString += '<div class="locationInfoContainer">';
		
		if(shopName != '' && shopName != undefined && shopName != null && shopName != 'null') {
			allLocationString += '<div class="headingTripInfo">'+shopName+'</div>';
			
			if(address != '' && address != undefined && address != null && address != 'null')
				allLocationString += '<div class="DesciptionTripInfo">'+address+'</div>';
			if(Email != '' && Email != undefined && Email != null && Email != 'null')
				allLocationString += '<div class="DurationTripInfo">'+Email+'<br />';
			if(Phone != '' && Phone != undefined && Phone != null && Phone != 'null')
				allLocationString += Phone+'</div>';
			if(website != '' && website != undefined && website != null && website != 'null')
				allLocationString += '<div class="DurationTripInfo"><a href="http://'+website+'" target="_blank">'+website+'</a></div>';
		}
		
		allLocationString += '</div>'
	}
  	var allLocContainer	=	document.getElementById('containerAllLocations');
  	allLocContainer.innerHTML	=	allLocationString;	
	var salesAdd	=	document.getElementById('sellerAdd');
	salesAdd.className += ' sellerAdd1';
	var contactDiv	=	document.getElementsByClassName('contactDetail');
	contactDiv[0].style.backgroundPosition = "0% 0%";
}


var shopNameArr	=	["New Moving Società Cooperativa","Energeco s.r.l.","Only Multimedia","E-Wheels","Super Ground","Alpi Graie srl","Maxi Sport snc","Style by Stefano Valloncini","Berica Motors","Faber Soft","Travel for fun","Magic Video","Emobility","Mc Motors Srl","Eye, Eye, Sir! Snc","ON LINE","Cicli Salieri","Sicily Rent Segway","Zanichelli Paolo","DOMUSROBOTICA","è-Motion","Garda Yachting Charter"];
var addArray	=	["Via di San Calisto 9 Roma 00153 RM","Vicolo di Dragone,1, Roma, 00126 RM","Via Carducci,14, Merano, 39012 BZ","Via Chambery,139, Aosta, 11100 AO","Via Dionigi Bussola,4, Milano, 20143 MI","Via Vajont,69, Rivoli, 10098 TO","Via Vittorio Veneto,9, 24060 Rogno,BG","Via Sole delle Alpi,48, 25030 TORBIATO DI ADRO, BS","Via Tagliamento,6, Schio, 36016 VI","Piazzale Giacomo Matteotti,21, Fabriano, 60044 AN","Via Montenuovo Licola Patria,90, 80078 Pozzuoli, NA","Via Edoardo Alagna,62, Marsala, 91025 TP","Matera, Basilicata","Viale della Repubblica,37, 73100 Lecce, LE","Via Salvo D'Acquisto,15, Colombare Di Sirmione, 25019 BS","Corso Garibaldi 248, Napoli, 8041 NA","Via Reggio Emilia,6/C/D/E, Bologna, 40139 BO","Via Vittorio Emanuele,203,95124 Catania CT","Via Val d'Enza, 35, 42049 - Sant'Ilario d'Enza (RE)","di Vannini Giuseppe Via Liguria 5, 42028 Poviglio RE","Via Camozzi 11/c 25125 Brescia","Lungolago Zanardelli 33 25087 Toscolano Maderno"];
var emailArr	=	["Ninebot.servizioclienti@gmail.com","info@energeko.it","info@onlymultimedia.it","info@ewheelsaosta.it","produzione@superground.it","info@alpigraie.com","poletti.paolo1@gmail.com","info@styleliving.it","ame2712@alice.it","amministrazione@fabersoft.it","info@puteoliforfun.it","magicvideomarsala@yahoo.it","bellisariocarlucci@libero.it","servizioclienti@kialecce.it","info@eyeeyesir.com","vincenzosorrentinoonline@gmail.com","ciclisalieri@gmail.com","sicilyrentsegway@hotmail.it","zanichelli_paolo@virgilio.it","info@vanninigiuseppe.it","info@emotion-rentalcar.com","info@gyc.it"];
var websiteArr	=	["","www.energeko.it/","www.onlymultimedia.it/","www.ewheelsaosta.it/","","","","www.styleliving.it/","","www.fabersoft.it/","","www.magicvideomarsala.it","","www.kialecce.it/index.aspx","","www.onlinesorrentino.it/","","www.sicilyrentsegway.it/","","www.domusrobotica.it/", "", ""];
var phoneArr	=	["39 29 034 927 ","06 89169378; 346 3896433","04 732 10 553","01 65361022; 347 9024039","340 732 1131; 028 907 0527","","035 96 76 10","030 73 56 325","044 458 2529","073 26 29 295, 073 22 86 121","081 196 69 008","092 39 56 962","328 43 27 215","083 23 32 351","347 47 82 344","081 21 10 858; 081 76 44 872","051 45 39 64","09 52272430; 09 55876150; 344 0681727","0522 672571","3482308317"," 030/7777911; 333/3741073","0365/548347; 333/3741073"];


var latArr		=	[41.889302,41.7780143,46.6702013,45.7328327,45.4459066,45.0778304,45.8632463,45.60668,45.712513,43.3376895,40.8568027,37.7968517,40.6462752,40.35624,45.4714394,40.8329601,43.4578503,44.4764117,44.837420,37.5465892,44.753951];
var longArr		=	[12.471160,12.337268799999947,11.15830649999998,7.3055193000000145,9.158476500000006,7.55692010000007,10.145670800000062,9.99842000000001,11.478812999999946,12.908371299999999,14.072057800000039,12.43606120000004,16.617398800000046,18.153099999999995,10.6048859,14.242393300000003,11.90603150000004,11.391147400000023,10.534818,15.098916300000042,10.447152];	
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(42.677697307288774,12.568136862499854),
    zoom:6,
    scrollwheel:false,
    //mapTypeId:google.maps.MapTypeId.TERRAIN
  };
  var map2Prop = {
    center:new google.maps.LatLng(41.89141031584846,12.470773561901852),
    zoom:15,
   // mapTypeId:google.maps.MapTypeId.TERRAIN
  };

  map=new google.maps.Map(document.getElementById("allLocMap"),mapProp);
/*  map2=new google.maps.Map(document.getElementById("sellerMap"),map2Prop);
  var marker2 = new google.maps.Marker({
      position: new google.maps.LatLng(41.8893018,12.47115980000001)
  });
  marker2.setMap(map2);
  var infowindow2 = new google.maps.InfoWindow({
	  content:"Via di San Calisto <br/>9 Roma, 00153 RM<br/><a href='#'>Ninebot.servizioclienti@gmail.com</a><br />06 581 75 85"
	  });
  infowindow2.open(map2,marker2);
*/  google.maps.event.addListenerOnce(map, 'idle', function() {
  	for(i=0;i<addArray.length;i++){
		codeAddress(i);
  	}
  });
  
}

function codeAddress(locNum) {
	marker[locNum] = new google.maps.Marker({
		position: new google.maps.LatLng(latArr[locNum],longArr[locNum]),
		icon:'../../images/icons/9botInternationalIcon.png'
	});
	marker[locNum].setMap(map);
	 var infowindow = new google.maps.InfoWindow({
	  content:addArray[locNum]+"<br/><a href='#'>"+emailArr[locNum]+"</a>"+"<br />"+phoneArr[locNum]
	  });
	 google.maps.event.addListener(marker[locNum], 'click', function() {
		 document.getElementsByClassName('gm-style-iw')[0].nextSibling.click();
	  infowindow.open(map,marker[locNum]);
	 });
	 if(locNum == 0){
		 infowindow.open(map,marker[0]);
	 }
/*	locMapProp = {
		    center:new google.maps.LatLng(latArr[locNum],longArr[locNum]),
		    zoom:16,
		    mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
	
	 var locMap=new google.maps.Map(document.getElementById("LocMap"+locNum),locMapProp);
	 locMapMark = new google.maps.Marker({
		      position: new google.maps.LatLng(latArr[locNum],longArr[locNum])
		  });
	 locMapMark.setMap(locMap);
*/}
google.maps.event.addDomListener(window, 'load', initialize);

window.onload = function(){
	getContactsData();
}
