<?php 

//required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//include database and moel file
include_once 'secure/database.php';
include_once 'model/location.php';

//instantiate database and location object
$database = new Database();
$db = $database->getConnection();

//initialize object
$location = new Location($db);


//query locations
$stmt = $location->read();
$num = $stmt->rowCount();

//check if more than 0 record is found
if ($num>0) {

	//locations array
	$locations_arr=array();
	$locations_arr["results"]=array();

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		extract($row);

		$location_item=array(
			"id" => $id,
			"latlng" => $latlng,
			"timestamp" => $timestamp,
		);
		array_push($locations_arr["results"], $location_item);

	}

	http_response_code(200);
	echo json_encode($locations_arr);
}else{
		http_response_code(404);
	echo json_encode(
        array("message" => "No records found.")
    );
}

 ?>