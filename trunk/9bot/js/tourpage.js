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

var confirmBooking	=	function(){
	dateSelected	=	$('#selectedDateForTour').val().trim();
	totalPrice	=	$('#paypal_payment_amount');
	people	=	$('#PersonCount').val().trim();
	selectpackageNode	=	$('#packageSelect');
	packageSelected	=	selectpackageNode.val();	//packageSelected is the tourID selected
    if(people == 0 || people == '') {
		alert('Please enter number of people');
		return false;
	}
	if(packageSelected == 0 || packageSelected == ''){
		alert('Please select a package');
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
	$('#packageInfoDiv').css('display','none');
	$('.modalWindow').css('display','none');
	updateTotalPrice();
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
            document.forms[0].submit();
			replanTour();
			cancelBooking();
		}
	}
	else
		return false;
};

var setPackageInfo	=	function(packageGroupID){
	var tourPackages	=	tourPackageData[packageGroupID];
	var tourIDs	=	Object.keys(tourPackages);
	var selectpackageNode	=	$('#packageSelect');
	selectpackageNode.attr('packageGroupID', packageGroupID);
	for( k=0; k<tourIDs.length; k++ ){
		packageOption	=	$('<option>');
		packageOption.attr('value',tourIDs[k]);
		packageDataObject	=	tourPackages[tourIDs[k]];
		packagePricePerPerson	=	parseInt(packageDataObject.packagePricePerPerson) + parseInt(packageDataObject.packageAdditionalPrice);
		pricingInfoText	=	'€ ' + packagePricePerPerson + ' per person';
		if(!IsValueNull(packageDataObject.packageExclusiveTaxes) && !isNaN(parseInt(packageDataObject.packageExclusiveTaxes))){
			pricingInfoText	+=	' + '+packageDataObject.packageExclusiveTaxes+'% più iva al';
		}
		optionText	=	packageDataObject.packageName + ' - ' + packageDataObject.packageDuration + ' hrs' + ' - ' + pricingInfoText;
		packageOption.html(optionText);
		selectpackageNode.append(packageOption);
		packageOption	=	null;
	}
};

var showPackage	=	function(buttonElement){
	var packageGroupID	=	$(buttonElement).attr('tour_id');
	$('.modalWindow').css('display','block');
	$('#packageInfoDiv').css('display','block');
    setPackageInfo(packageGroupID);
};

var getTourpackageInfo	=	function(tourPackagegroupID, tourID){
	return tourPackageData[tourPackagegroupID][tourID];
}

var updateTotalPrice	=	function(){
	selectpackageNode	=	$('#packageSelect');
	packageSelected	=	selectpackageNode.val();	//packageSelected is the tourID selected
	packageGroupID	=	selectpackageNode.attr('packageGroupID');
	personCount		=	parseInt($("#PersonCount").val());
	TotalAmount	=	0;
	TotalTax	=	0;
	if(IsValueNull(packageSelected) || packageSelected == 0 || IsValueNull(personCount) || personCount == 0 || isNaN(personCount)){
		TotalAmount	=	0;
	}
	else{
		packageInfoObject	=	getTourpackageInfo(packageGroupID, packageSelected);
		TotalPricePerPerson	=	0;
		BasePrice				=	parseInt(packageInfoObject.packagePricePerPerson);
		Additional				=	parseInt(packageInfoObject.packageAdditionalPrice);
		packageExclusiveTaxes	=	parseInt(packageInfoObject.packageExclusiveTaxes);
		if(!IsValueNull(BasePrice) && !isNaN(BasePrice)){
			TotalPricePerPerson	+=	BasePrice;
			if(!IsValueNull(Additional) && !isNaN(Additional))
				TotalPricePerPerson	+=	Additional;
				
			TotalAmountExclusiveOfTaxes	=	personCount * TotalPricePerPerson;
			if(!IsValueNull(packageExclusiveTaxes) && !isNaN(packageExclusiveTaxes)){
				TotalTax	=	(packageExclusiveTaxes * TotalAmountExclusiveOfTaxes) / 100;
			}
			TotalAmount	=	TotalAmountExclusiveOfTaxes	+	TotalTax;
		}
	}

	$('#paypal_payment_amount').val(TotalAmount);
	$('.totalPackagePrice').html(' \u20AC '+TotalAmount);
	return TotalAmount;
}

var bindBookingFunctions	=	function(){
	$('#packageSelect').on('change',function(){
		updateTotalPrice();
		//$('#selectedPackageDescription').val(selectedPackageText);
	});
	$("#PersonCount").bind('keyup input mouseup mousedown', function(){
		updateTotalPrice();
	});
};

var calendar	=	function(){
	$('.datepicker').datepicker({ minDate: 0 });
}

//get tour package information
var getTourPackagesData	=	function(){
	requestForpackageData	=	new Object();
	requestForpackageData.actionScriptURL	=	'../../actions/bookingInfo.php';
	requestForpackageData.sendMethod		=	'POST';
	requestForpackageData.callType		=	'ASYNC';
	requestForpackageData.callBack		=	function(response){
		if(response != 0)
			tourPackageData	=	JSON.parse(response);
	};
	
	send_remoteCall(requestForpackageData);	
};

$(function(){
	$('.xxThumbImage').wrap('<a></a>');
	$('#containerTable').find('table').addClass('innerTable');
	$('.xxThumbImage').closest('a').addClass('hvr-bubble-float-right');
	$('div.normalButton').bind('click', function(){showPackage(this);});
	$('.blueFont').closest('td').not('.qouteSpan').addClass('qouteSpan');
	getTourPackagesData();
	calendar();
	bindBookingFunctions();
});
