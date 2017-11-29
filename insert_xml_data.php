<?php

require 'db_config.php';

$RDF = file_get_contents('http://blog.fc2.com/newentry.rdf');
$RDF = str_replace('RDF:', 'RDF_', $RDF);
$RDF = str_replace('em:', 'em_', $RDF);
$XML = simplexml_load_string($RDF);

foreach($XML->item as $item) {
	
	$url = $item->link;
	$title = $item->title;
	$description = $item->description;
	$user_name = NULL;
	$server_number = 0;
	$entry_number = 0;
	$date = date('Y-m-d H:i:s');
	
	//processing user_name, server_number, entry_number 
	
	if(!empty($url)){
		$url_breakdown = parse_url($url);	
		if (strpos($url_breakdown['host'], '.blog') !== false){
			$sub_domain = substr($url_breakdown['host'], 0, -8);
			$sub_domain_partial = explode('.', $sub_domain);
			$user_name = $sub_domain_partial[0];
			$server_number = substr($sub_domain_partial[1], 4);
		}else{
			$sub_domain_partial = explode('.', $url_breakdown['host']);
			$user_name = $sub_domain_partial[0];
			$server_number = NULL;
		}
		
		$entry_number = substr(substr($url_breakdown['path'], 0, -5), 12);
	}
	
	
	try{
		
		//insertion
		
		$sql = "INSERT INTO `fc2blog`(`user_name`, `server_number`, `entry_number`, `url`, `title`, `description`, `date`) VALUES ('".$user_name."', '".$server_number."', '".$entry_number."', '".$url."', '".$title."', '".$description."', '".$date."')";
		
		$conn->query($sql);
		
	}catch(Exception $e){
		
		//logging missing data
		
		$logfile = fopen("log.txt", "w");
		$txt = 'user_name : '.$user_name.' server_number : '.$server_number.' entry_number : '.$entry_number.' url : '.$url.' title : '.$title.' description : '.$description.' date : '.$date.'\n';
		fwrite($logfile, $txt);
		fclose($logfile);
	}

}

echo "Script end!";
