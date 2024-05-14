<?php
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Athorization, X-Requested-With');
 
// Get the userid
include_once'config.php';

$data = json_decode(file_get_contents("php://input"), true);
$search = $data['search'];
$onerecord=new DB_con();
$sql=$onerecord->search($search);
if(mysqli_num_rows($sql)>0){
    $output =mysqli_fetch_all($sql, MYSQLI_ASSOC);
    echo json_encode($output);
   }else{
   
       echo json_encode(array('message'=>'No records found.','status'=>false));
   
   }