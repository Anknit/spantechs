var IdToBeShown	;
var basePrice;
var perUnitPrice;
var numUnits;
var totalPrice=0;
var tourPackageData	=	{};
var ajaxObject	=	{};
tourPackageData	=	{'1':
						{'101':
								{'info':'Standard Tour - 3 hrs - \u20AC 85.00 ','baseP':0,'perUnit':85}
						},
					'2':
						{'201':
							{'info':'Standard Tour - 3 hrs - \u20AC 85.00 ','baseP':0,'perUnit':85}
						},
					'3':
						{'301':
							{'info':'Standard Tour - 2 hrs - \u20AC 50.00 ','baseP':0,'perUnit':50}
						},
					'4':
						{'401':
							{'info':'Standard Tour - 3 hrs - \u20AC 85.00 ','baseP':0,'perUnit':85},
						 '402':
							{'info':'Tour with Dinner - 3 hrs - \u20AC 100.00 ','baseP':0,'perUnit':100}
						},
					'5':
						{'501':
							{'info':'Standard Tour - 2 hrs - \u20AC 50.00 ','baseP':0,'perUnit':50},
						 '502':
						 	{'info':'Tour with Dinner - 3 hrs - \u20AC 60.00 ','baseP':0,'perUnit':60}
						},
					'6':
						{'601':
							{'info':'Standard Tour - 3 hrs - \u20AC 85.00 ','baseP':0,'perUnit':85},
						 '602':
						 	{'info':'Tour with Dinner - 3 hrs - \u20AC 100.00 ','baseP':0,'perUnit':100}
						},
					'7':
						{'701':
							{'info':'Standard Tour - 1 hrs - \u20AC 30.00 ','baseP':0,'perUnit':30}
						},
					'8':
						{'801':
							{'info':'Tour with Wine tasting - 2 hrs - \u20AC 50.00 ','baseP':0,'perUnit':50},
						 '802':
						 	{'info':'Tour with Dinner - 2 hrs - \u20AC 50.00 ','baseP':0,'perUnit':50}
						},
					'9':
						{'901':
							{'info':'Standard Tour - 3 hrs - \u20AC 85.00 ','baseP':0,'perUnit':85},
						 '902':
						 	{'info':'Tour with Lunch - 4 hrs - \u20AC 85.00 + \u20AC 20.00 ','baseP':20,'perUnit':85},
						 '903':
						 	{'info':'Tour with Picnic - 4 hrs - \u20AC 85.00 + \u20AC 20.00 ','baseP':20,'perUnit':85},
						 '904':
						 	{'info':'Tour with Dinner - 4 hrs - \u20AC 85.00 + \u20AC 30.00 ','baseP':30,'perUnit':85},
						 '905':
						 	{'info':'Tour with visit to Catacombs - 4 hrs - \u20AC 100.00 ','baseP':0,'perUnit':100}
						},
					'10':
						{'1001':
							{'info':'Vatican and the most beautiful squares - 3 hrs - \u20AC 85.00 ','baseP':0,'perUnit':85}
						},
					'11':
						{'1101':
							{'info':'Dolce vita tour - 2 hrs - \u20AC 50.00 ','baseP':0,'perUnit':50}
						},
					};	
$(function(){
	calendar();
	bindBookingFunctions();
    Tilelinks	=	$('ul#menu_tour_tile').find('li');
    Tilelinks.click(function(){
        $('.tileNavigation').css('opacity','0');
        IdToBeShown =   $(this).attr('linkto');
        setTimeout(function(){
            	$('.tileNavigation').css('display','none');
            	$('.topnavigation1').css('display','block');
                $('.topnavigation1').find('[linkto="'+IdToBeShown+'"]').find('a').addClass('activeMenu');
                $('.ContainerTripInfo').css('display', 'none');
                $('#'+IdToBeShown).css('display', 'block');
         	},500);
    });
    
    Menulinks   =   $('ul#menu_tour').find('li');
    Menulinks.click(function(){
        $('.activeMenu').removeClass('activeMenu');
        $(this).find('a').addClass('activeMenu');
        IdToBeShown =   $(this).attr('linkto');
        $('.ContainerTripInfo').css('display', 'none');
        $('#'+IdToBeShown).css('display', 'block');
    });
    
    $('.individualContainerTripInfo').attr('title', 'For Booking, contact us now');
    $('.individualContainerTripInfo').click(function(){
    	location.href	=	'contact.html';
    });
});

var showPackage	=	function(buttonElement){
	var tourID	=	$(buttonElement).attr('tour_id');
	ajaxObject.actionScriptURL	=	'./bookingRequest.php?tid='+tourID;
	ajaxObject.sendMethod	=	'GET';
	ajaxObject.callBack	= function(Response){
		$('.modalWindow').css('display','block');
		$('#packageInfoDiv').css('display','block');
	    setPackageInfo(tourID);
	}
	send_remoteCall(ajaxObject);
	
//	$('.modalWindow').css('display','block');
//	$('#packageInfoDiv').css('display','block');
 //       setPackageInfo(tourID);
    //$('#packageInfoDiv').html($(buttonElement).siblings('div').html());
};

var confirmBooking	=	function(){
	dateSelected	=	$('#selectedDateForTour').val().trim();
    if($('#PersonCount').val())
	if(totalPrice == 0 || totalPrice == ''){
		alert('Please select your package and number of people');
		return false;
	}
	if(IsValueNull(dateSelected)){
		alert('Please select the date on which you want to take this tour');
		return false;
	}
	
	$('#tour_date_selected').val(dateSelected);
	$('#planTourDetails').css('display','none');
	$('#chekoutWithDetails').css('display','table');
};

var replanTour	=	function(){
	$('#planTourDetails').css('display','table');
	$('#chekoutWithDetails').css('display','none');
	$('#bookingUserConfirm').prop('checked',false);
};
var cancelBooking	=	function(){
	$('.totalPackagePrice').html('');
	$('#packageSelect').html('<option value="0">Select Package</option>');
	$("#PersonCount").val('');
	$("#PersonCount")[0].disabled = true;
	totalPrice=0;
	$('#packageInfoDiv').css('display','none');
	$('.modalWindow').css('display','none');
};

var setPackageInfo	=	function(tourId){
	var packageOption;
	var packageKeysArr	=	Object.keys(tourPackageData[tourId]);
	for(k=0;k<packageKeysArr.length;k++){
		packageOption	=	$('<option>');
		packageOption.attr('value',tourId+'|'+packageKeysArr[k]);
		packageOption.html(tourPackageData[tourId][packageKeysArr[k]]['info']);
		$('#packageSelect').append(packageOption);
	}
};
var bindBookingFunctions	=	function(){
	$('#packageSelect').on('change',function(){
		var selectedoptionValue = $(this).val();
		var selectedTour		=	selectedoptionValue.split('|')[0];
		var selectedPackageText	=	$('#packageSelect option:selected').text();
		var selectedPackage	=	selectedoptionValue.split('|')[1];
		if(selectedoptionValue!= '0'){
			$('#selectedPackageDescription').val(selectedPackageText);
			$("#PersonCount")[0].disabled = false;
			basePrice		=	tourPackageData[selectedTour][selectedPackage]['baseP'];
			perUnitPrice	=	tourPackageData[selectedTour][selectedPackage]['perUnit'];
		}
		else{
			$("#PersonCount").val('');
			$("#PersonCount")[0].disabled = true;
			basePrice = 0;
			perUnitPrice = 0;
		}
	});
	$("#PersonCount").bind('keyup input mouseup mousedown', function(){
		totalPrice	= basePrice + perUnitPrice*$(this).val();
        $('#paypal_payment_amount').val(totalPrice);
		$('.totalPackagePrice').html(' \u20AC '+totalPrice);
	});
};
var paypalCheckOutConfirm	=	function(){
	if($('#bookingUserConfirm').is(':checked')){
		if($('#bookingUserName').val() == ''){
			alert('Please provide your name');
		}
		else if($('#bookingUserEmail').val() == '' && $('#bookingUserPhone').val() == ''){
			alert('Email and Phone cannot be both blank');
		}
		else{
                        //alert('Successfull Payment of '+' \u20AC '+totalPrice);
                        document.forms[0].submit();
			replanTour();
			cancelBooking();
		}
	}
	else{
		return false;
	}
};

var calendar	=	function(){
	$('.datepicker').datepicker({ minDate: 0 });
}