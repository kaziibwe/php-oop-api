<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
// Get the userid
include_once'config.php';


//Object
$updatedata=new DB_con();

// Get the userid
$userid=intval($_GET['id']);

// Posted Values
$data = json_decode(file_get_contents("php://input"), true);
// $email = $data['email'];
$fname = $data['firstname'];
$lname = $data['lastname'];
$emailid = $data['emailid'];
$contactno = $data['contactno'];
$address = $data['address'];
// echo json_encode($fname);
//Function Calling
$sql=$updatedata->update($fname,$lname,$emailid,$contactno,$address,$userid);
if($sql){
  echo json_encode(array('status' => 'success', 'message' => 'Record updated successfully'));

 }else{
 
     echo json_encode(array('message'=>'No records found.','status'=>false));
 
 }
?>