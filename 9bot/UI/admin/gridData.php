<?php
/*
* Author: Aditya
* date: 1-July-2015
* PHP Document : This file is used to define all the functions for obtaining data in grid format. most of the work is done with already defined methods
  which are private to the defined class. Just that to obtain new data only public methods are to be defined below. Also the existing methods can be modiffied
  to icorporate more features/filtering of data by just adding clause statements based on logic.
  
  These public methods in turn fetch data from another file DbData operations.php which defines different classes relating to data of different tables.
  
  Mandatory grid options are sidx, sord, limit, 
*
*/
?>
<?php
	require_once 'verifyUser.php';
	require_once __DIR__.'./../../../Common/php/commonfunctions.php';
	require_once __DIR__.'./../../actions/DbDataOperations.php';
	if(!checkIfUserIsLoggedIn())
		redirectTo('Home');

	require_once '../../Db.php';

	if(isset($_GET)){
		extract($_GET);
//		data=1&action=
		switch($data){
			case 1:	//contacts
				switch($action){
					case 'edit': 
						AddUpdate();
					break;
					case 'get': 
					default:
						$resellersInfo	=	getInfoFrom('gridMethods', 'read_resellers');
						if(!$resellersInfo)
							$resellersInfo = 0;
						
						echo $resellersInfo;
					break;
				}
			break;
		}
	}
	
	class gridMethods{
		private $limit = 10, $page	=	1, $start = 1, $sortBy = '', $sortOrder = '', $recordCount	=	0, $totalPages = 1, $orderClause = '', $searchFilterClause	=	'';
		/*
			Constructor method to get and set privat variables for creating grid return data
		*/
		public function gridMethods(){
			if(isset($_GET['rows']) && $_GET['rows'] != ''){
				$this->limit	=	$_GET['rows'];
			}
			if($this-> limit == -1){
				$_GET['page']	=	1;
				$this->totalPages	=	1;
			}
			if(isset($_GET['page']) && $_GET['page'] != ''){
				$this->page	=	$_GET['page'];
			}
			
			$this->start	=	(($this->limit) * ($this->page)) - ($this->limit);
			
			$orderClause = '';
			if(isset($_GET['sidx']) && $_GET['sidx'] != ''){
				$this->sortBy	=	$_GET['sidx'];
			}
			if(isset($_GET['sord']) && $_GET['sord'] != ''){
				$this->sortOrder	=	$_GET['sord'];
			}
			
			if(isset($_GET['searchField']) && $_GET['searchField'] != '' && isset($_GET['searchString']) && $_GET['searchString'] != '' && isset($_GET['searchOper']) && $_GET['searchOper'] != ''){
				switch($_GET['searchOper']){	//['equal', 'not equal', 'less', 'less or equal','greater','greater or equal', 'begins with','ends with','contains' ]
					case 'bw':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' LIKE \''.$_GET['searchString'].'%\' ';
					break;
					case 'bn':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' NOT LIKE \''.$_GET['searchString'].'%\' ';
					break;
					case 'eq':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' = '.$_GET['searchString'];
					break;
					case 'ne':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' != '.$_GET['searchString'];
					break;
					case 'lt':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' < '.$_GET['searchString'];
					break;
					case 'le':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' <= '.$_GET['searchString'];
					break;
					case 'gt':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' > '.$_GET['searchString'];
					break;
					case 'ge':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' >= '.$_GET['searchString'];
					break;
					case 'ew':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' LIKE \'%'.$_GET['searchString'].'\' ';
					break;
					case 'en':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' NOT LIKE \'%'.$_GET['searchString'].'\' ';
					break;
					case 'cn':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' LIKE \'%'.$_GET['searchString'].'%\' ';
					break;
					case 'nc':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' NOT LIKE \'%'.$_GET['searchString'].'%\' ';
					break;
					case 'nu':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' IS NULL ';
					break;
					case 'nn':
						$this->searchFilterClause	=	' '.$_GET['searchField'].' IS NOT NULL ';
					break;
				}
			}
			$this->orderClause	=	$this->sortBy." ".$this->sortOrder." LIMIT ".$this->start." , ".$this->limit;
		}
		
		/*
			Assoc array of data. This corresponds to rows as seen in database table
		*/
		private function prepareOutput_GridData($rowsResult){
			$OutputJson	=	false;
			if(count($rowsResult) > 0) {
				//Return result to jTable
				$jTableResult = array();
				$jTableResult['total'] 		= $this->totalPages;
				$jTableResult['page'] 		= $this->page;
				$jTableResult['records']	= $this->recordCount;
				$jTableResult['rows'] 	 	= $rowsResult;
				$OutputJson					= json_encode($jTableResult);
			}
			return $OutputJson;
		}
		
		private function get_totalRecords($clause, $table){
			$query	=	"Select Count(*) AS TotalRecordsAvailable FROM ".$table;
			if($this->searchFilterClause != '') {
				if($clause != '')
					$clause	.=	' AND ';
					
				$clause	.=	$this->searchFilterClause;
			}
				
			if($clause != '')
				$query	.=	" WHERE ".$clause;
				
			$TotalRecordsResult	=	DB_Query($query,'ASSOC', '');
			$recordCount = intval($TotalRecordsResult[0]['TotalRecordsAvailable']);
			$this->totalPages	=	ceil($recordCount/intval($this->limit));
			$this->recordCount	=	$recordCount;
			return $recordCount;
		}
		
		/*
			return value: 
				(bolean) false - If data is not found.
				Assoc array with jqgrid output format, if data is found.
		*/
		public function read_resellers(){
			$output	=	false;
			$this->get_totalRecords('', 'resellersinfo');
			
			if($this->recordCount > 0){
				$clause = '';
				
				if($this->searchFilterClause != '') {
					if($clause != '')
						$clause	.=	' AND ';
						
					$clause	.=	$this->searchFilterClause;
				}
				$order = $this->orderClause;
				$resellersInfo	=	getInfoFrom('contactData', 'getResellersInfo', array('clause'=>$clause, 'order'=>$order, 'json'=>false));
				if($resellersInfo) {
					$output	=	$this->prepareOutput_GridData($resellersInfo);
				}
			}
			
			return $output;
		}
	};
?>