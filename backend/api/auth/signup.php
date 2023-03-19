<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Controll-Allow-Headers, Access-Control-Allow-Origin, Content-Type, Access-Control-Allow-Methods, Authorization");

require_once("../config/Database.php");
require_once("../model/UserModel.php");
require_once("../model/Response.php");

$database = new Database();
$db = $database->connect();

$user = new UserModel($db);

$data = json_decode(file_get_contents("php://input"));

$user->setUsername($data->username);
$user->setPassword($data->password);

if($user->register()){
	$response = new Response();
	$response->setSuccess(true);
	$response->setHttpStatusCode(200);
	$response->addMessage("User Created");
	$response->send();
}
else{
	$response->setSuccess(false);
	$response->setHttpStatusCode(400);
	$response->addMessage("Error Occured");
	$response->send();
}