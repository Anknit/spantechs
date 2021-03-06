<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/
?>
<?php
	require_once 'verifyUser.php';
	if(!checkIfUserIsLoggedIn())
		redirectTo('Home');

	require_once '../../Db.php';
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../../../Common/css/hover.css" />
    <link rel="stylesheet" href="../../../Common/css/buttonTab.css" />
    <link rel="stylesheet" href="../../../Common/css/ui.jqgrid.css" />
	<link rel="stylesheet" href="../../../Common/css/jqueryUI/themes/jquery-ui.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <style>
		.ui-jqgrid-caption{
			text-align:center !important;
		}
        table{
            text-align:left;
        }
    </style>
</head>
<body>
    <?php 
        require_once 'menu.php';
    ?>
    <div style="float:left;width:100%; height:100px;text-align:center">
       <div style="width:98%; margin:1%">
        <table id="resellersInfo"></table>
       </div>
        <div id="gridpager_resellersInfoTable"></div>
    </div>
</body>
<script type="text/javascript" src="../../../Common/js/jquery.min.js"></script>
<script type="text/javascript" src="../../../Common/js/jquery.jqGrid.min.js"></script>
<script type="text/javascript" src="../../../Common/js/grid.locale-en.js"></script>
<script type="text/javascript" src="../../../Common/js/GridRelated.js"></script>
<script type="text/javascript" src="../../../Common/js/renderGrid.js"></script>
<script>
	$(function(){
		var decodeURIValue	=	function(val,colModelOB, rowdata){
			if(val == null || val == false || val == 0)
				return '';
			else
				return decodeURI(val);
		}
		$("#resellersInfo").jqGrid({
			datatype: function(postdata) {
				jQuery.ajax({
					url:'gridData.php?data=1&action=get',
					data:postdata,
					contentType: "application/json",
					dataType:"json",
					complete: function(jsondata,stat){
					  if(stat=="success") {
						 var thegrid = jQuery("#resellersInfo")[0];
						 thegrid.addJSONData(jsondata.responseJSON);
					  }
				   }
				});
			},
			colNames: ['ID','Name', 'Address', 'Email','Website','Phone'],
	        colModel: [
				{name:'ID',							index:'ID',  hidden: true, editable: true}, //editable and hidden both are true. editable true is set just to get the value in backend
				{name:'Name',	label:'Name',		index:'Name',		width:'100%',	align: 'left',	title: false, formatter: decodeURIValue, editable: true},
				{name:'Address',label:'Address',	index:'Address',	width:'100%',	align: 'left',	title: false, formatter: decodeURIValue, editable: true},
				{name:'Email',	label:'Email',		index:'Email',		width:'100%',	align: 'left',	title: false, formatter: decodeURIValue, editable: true},
				{name:'Website',label:'Website',	index:'Website',	width:'100%',	align: 'left',	title: false, formatter: decodeURIValue, editable: true},
				{name:'Phone',	label:'Phone',		index:'Phone',		width:'100%',	align: 'left',	title: false, formatter: decodeURIValue, editable: true}
	        ],
			jsonReader : {
				root: "rows",
				records: "records",
				viewrecords: true,
				repeatitems: true,
				cell: "",
				id: "0"
			},
		
	        autowidth: true,
			viewrecords: true,
			recordpos: 'right',
			multiselect: false,
			height: 500,
			emptyrecords: "No records found",
			rowNum:10,
			rowList:[10,20,30],
			pager: '#gridpager_resellersInfoTable',
			pginput : true,
			sortname: 'PriorityOrder',
			sortorder: "asc",
	        caption: "Resellers information",
            editurl: "../../actions/dataInterface.php?action=edit&data=contactData"
	    });
		/*
			Default sopt (search options) are 
			['eq',		'ne',		'lt',	'le',			'gt',		'ge',				'bw',		'bn',				'in',		'ni',		'ew',		'en',				'cn',		'nc',			'nu',		'nn'] 
			['equal','not equal', 'less', 'less or equal','greater','greater or equal', 'begins with','does not begin with','is in','is not in','ends with','does not end with','contains','does not contain','is null','is not null']
		*/
        var callBackBeforeSubmit  =  function(params, postdata) {   //used only for delete, because ID is to be set
            dataObject  =   $('#resellersInfo').jqGrid ('getRowData', postdata);
            postdata.ID = dataObject.ID;
            return {ID: dataObject.ID};
        };
        var callBackBeforeAddEditSubmit  =  function(params, postdata) {   //used for add/edit
            $.each( postdata, function( key, value ) {
                postdata[key]    =   encodeURI(value);
            });
        };
        var addEditModalObject  =   {height:280,width: 500, reloadAfterSubmit:true, left:300, top:200,closeAfterAdd:true,closeAfterEdit:true, onclickSubmit: callBackBeforeAddEditSubmit};
		$("#resellersInfo").jqGrid('navGrid','#gridpager_resellersInfoTable',{edit:true,add:true,del:true, search: true, refresh:true} /*options*/, addEditModalObject /* edit options */, addEditModalObject /* add options*/, {reloadAfterSubmit:true,onclickSubmit: callBackBeforeSubmit} /* del options */, {height:150,width: 500, left:300, top:200, sopt:['eq','ne','lt','le','gt','ge','bw','bn','ew','en','cn','nc','nu','nn']} /* search options*/);
	});
</script>
</html>