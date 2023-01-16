<?php 
	$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
	$beerValue = isset($_REQUEST['value']) ? $_REQUEST['value'] : 0;
	$beerCount = isset($_REQUEST['count']) ? $_REQUEST['count'] : 0;	
	switch ($action) {
	 	case 'add':
	 		$beerCount = $beerCount + 1;
	 		break;	 	
	 	case 'delete':
	 		$beerCount = $beerCount - 1;
	 		break;
	}	 
	$beerTotalValue = $beerValue * $beerCount;
	$data = array(
		"value" => $beerValue,
		"count" => $beerCount,
		"total" => $beerTotalValue);
	$json = json_encode($data);
	header("Content-Type: application/json");
	echo $json;
	exit();
