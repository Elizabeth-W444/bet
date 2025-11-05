<?php
header(header: "Content-Type: application/json");
header(header: "Access-Control-Allow-Origin: *");
header(header: "Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header(header: "Access-Control-Allow-Headers: Content-Type");
include 'db_connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $response = [  
    'status'=> http_response_code (response_code: 405),
    'message'=> 'Method Not Allowed. Use POST',
];
  echo json_encode(value:$response);
  exit();
}

require_once'../db_connection.php';

//get RAW POST data
$requestBody = file_get_contents(filename: 'php://input');

//Decide the JSON data
$JSONDATA = json_decode(json:$requestBody, associative:true);

//Retrieve from Data
$FROMDATA = [
  'fullname' => trim(string: $_POST['fullname'] ?? null),
  'email' => trim(string: $_POST['email'] ?? null),
];

//CHOOSE BETWEEN JSON AND FROM
if(!empty (JSONData[''])){
  $requestData = $JSONDATA;
} else {
  $requestData = $FORMData;
}

//Validate required fields
if(empty($requestData['fullname']) || empty($requestData['email'])) {
$response = [
'status' => http_response_code(response_code: 400),
'message'=> 'Bad Request. fullname and email are required.',
];
echo json_encode(value:$response);
exit();
}

try{
$sql = "INSERT INTO users (fullname, email) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);

// Bind Parameters
$stmt->bindParam(1, $requestData['fullname'], PDO::PARAM_STR);
$stmt->bindParam(2, $requestData['email'], PDO::PARAM_STR);
$stmt->execute();

$response = [
  'status'=> http_response_code(201),
  'message'=> 'User created successfully.',
];
echo json_encode(value:$response);
exit();

} catch (Exception $e) {
$response = [
  'status'=> http_response_code(500),
  'message'=> 'Internal Server Error. ' . $e->getMessage(),
];
echo json_encode(value:$response);
exit();

}

