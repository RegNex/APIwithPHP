<?php 
//required header
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
//get database connection
include_once 'secure/database.php';
include_once 'model/location.php';

$database = new Database();
$db = $database->getConnection();
$location = new Location($db);


//get posted data
$data = json_decode(file_get_contents("php://input"));

//make sure data is not empty
if (!empty($data->latlng)) {
	$location->latlng = $data->latlng;


//create the location
	if ($location->create()) {
		
		//set response code 201 created
		http_response_code(201);
		echo json_encode(array("message" => "location created"));
	}else{
		//error status code - 503 service unavaliable
		http_response_code(503);
		echo json_encode(array("message" => "unable to create"));
	}
}else{
	//set response code 400 bad request
	http_response_code(400);
	echo json_encode(array("message" => "unable to create location. data empty"));
}




 ?>