<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/
?>
<?php
function MatchUnamePassInDb($uname, $upass){
	$output	=	false;
	require_once '../../Db.php';	
	global	$perform_Database_Operation;
	$uMatch	=	DB_Query("SELECT userId from userinfo where userName='$uname' AND password = '$upass'");
	if($uMatch && !empty($uMatch) && $uMatch != 0){
		$output	=	$uMatch[0]['userId'];
	}
	return $output;
}

function setSessionVarsForUser($argsArray){
	session_start();
	if(is_array($argsArray)&& count($argsArray) > 0){
		foreach($argsArray as $Key=>$Value){
			$_SESSION[$Key]	=	$Value;
		}
	}
	
	return true;
}

function RedirectTo($pageName, $QueryString = "")
{
	$pageList	=	array(
		'Home'	=>	'login.php',
		'adminInterface'	=>	'addNews.php'
	);
	$page	=	$pageList[$pageName];
	if($QueryString != ""){$page .= '?'.$QueryString;}
	header('Location: '.$page); die();
	exit();
}

function checkIfUserIsLoggedIn(){
	$loggedIn	=	false;
	if(!isset($_SESSION)){
		session_start();
		if(isset($_SESSION) && isset($_SESSION['User_Id']) && !empty($_SESSION['User_Id']) && $_SESSION['User_Id'] != 0) {
			if($_SESSION['setFromPage'] == __FILE__)
				$loggedIn	=	true;
		}
	}
	
	return $loggedIn;	
}

function loggOutUser(){
	session_start();
	session_destroy();	//destroy all the session variable
	$variables	=	get_defined_vars();
	foreach($variables as $key => $val)
  	{
		if(isset($GLOBALS))
			unset($GLOBALS[$key]);
	}
	RedirectTo('Home');//redirect to home page
	return true; 
}

if(isset($_REQUEST) && isset($_REQUEST['loginSubmit'])){
	$uname	=	'';
	$upass	=	'';
	if(isset($_REQUEST['Username'])){
		$uname	=	$_REQUEST['Username'];
	}
	if(isset($_REQUEST['Password'])){
		$upass	=	md5($_REQUEST['Password']);
	}
	$uid	=	MatchUnamePassInDb($uname, $upass);
	if($uid && $uid != 0 && !empty($uid)){
		setSessionVarsForUser(	array( 'User_Id'=> $uid, 'setFromPage' =>	__FILE__)	);
		
		redirectTo('adminInterface');
	}
	else{
		redirectTo('Home','errMsg=1');
	}
}
?>