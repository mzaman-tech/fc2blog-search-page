<?php

require 'libs/Smarty.class.php';
require 'db_config.php';

$sql = 'select * from fc2blog where 1=1 ';
$conditions = '';

if(!empty($_POST)){

	//store data 
	$date = $_POST['date'];
	$user_name = $_POST['user_name'];
	$server_number = $_POST['server_number'];
	$entry_number = $_POST['entry_number'];

	//set cookie
	$_COOKIE['search_date'] = $date;
	$_COOKIE['search_user_name'] = $user_name;
	$_COOKIE['search_server_number'] = $server_number;
	$_COOKIE['search_entry_number'] = $entry_number;

	//process query
	if(!empty($date)){
		$conditions = $conditions. " and date = '". $date. "'";
	}

	if(!empty($user_name)){
		$conditions = $conditions. " and user_name = '". $user_name. "'";		
	}

	if(!empty($server_number)){
		$conditions = $conditions. " and server_number = '". $server_number. "'";		
	}

	if(!empty($entry_number)){
		$conditions = $conditions. " and entry_number = '". $entry_number."'";		
	}
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
$smarty = new Smarty;
$smarty->assign('result', $result);
$smarty->assign('perpage', $perpage);
$smarty->assign('page', $page);
$smarty->assign('totalPage', $totalPage);
$smarty->display('index.tpl');