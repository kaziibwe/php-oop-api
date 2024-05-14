<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// Get the userid
include_once'config.php';

$userid=intval($_GET['id']);
$onerecord=new DB_con();
$sql=$onerecord->fetchonerecord($userid);
if(mysqli_num_rows($sql)>0){
    $output =mysqli_fetch_all($sql, MYSQLI_ASSOC);
    echo json_encode($output);
   }else{
   
       echo json_encode(array('message'=>'No records found.','status'=>false));
   
   }