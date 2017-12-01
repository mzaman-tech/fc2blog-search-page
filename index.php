<?php

require 'libs/Smarty.class.php';
require 'db_config.php';

$sql = 'select * from fc2blog where 1=1 ';
$conditions = '';
$smarty = new Smarty;

if(!empty($_POST)){

	//store data 
	$date = $_COOKIE['date'] =  $_POST['date'];
	$user_name = $_COOKIE['user_name'] = $_POST['user_name'];
	$server_number = $_COOKIE['server_number'] = $_POST['server_number'];
	$entry_number = $_COOKIE['entry_number'] = $_POST['entry_number'];
}

if(!empty($_GET)){

	//store data 
	if(isset($_GET['date'])){$date = $_GET['date'];}else{$date = '';}
	if(isset($_GET['user_name'])){$user_name = $_GET['user_name'];}else{$user_name = '';}
	if(isset($_GET['server_number'])){$server_number = $_GET['server_number'];}else{$server_number = '';}
	if(isset($_GET['entry_number'])){$entry_number = $_GET['entry_number'];}else{$entry_number = '';}
}

//process query
if(!empty($date)){
	$conditions = $conditions. " and date = '". $date. "'";
	$smarty->assign('date', $date);
}

if(!empty($user_name)){
	$conditions = $conditions. " and user_name = '". $user_name. "'";
	$smarty->assign('user_name', $user_name);	
}

if(!empty($server_number)){
	$conditions = $conditions. " and server_number = '". $server_number. "'";
	$smarty->assign('server_number', $server_number);	
}

if(!empty($entry_number)){
	$conditions = $conditions. " and entry_number = '". $entry_number."'";
	$smarty->assign('entry_number', $entry_number);
}


//pagination
$perpage = 50;
(isset($_GET["page"])) ? $page = intval($_GET["page"]) : $page = 1;
$calc = $perpage * $page;
$start = $calc - $perpage;

$sql = $sql . $conditions . ' order by id desc Limit '.$start.', '.$perpage;
$result = $conn->query($sql);

//number of page
$totalPageSql = 'select * from fc2blog where 1=1 '. $conditions;
$total_data = $conn->query($totalPageSql);
$totalPage = ceil($total_data->num_rows/$perpage);
if($totalPage == 0){
	$totalPage = 1;
}

//smarty

$smarty->assign('result', $result);
$smarty->assign('perpage', $perpage);
$smarty->assign('page', $page);
$smarty->assign('totalPage', $totalPage);
$smarty->display('index.tpl');