<?php //Deletion
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Athorization, X-Requested-With');

include_once'config.php';

// Geeting deletion row id
$rid=$_GET['id'];
$deletedata=new DB_con();
$sql=$deletedata->delete($rid);
if($sql){
    echo json_encode(array('status' => 'success', 'message' => 'Record deleted successfully'));
  
   }else{
   
       echo json_encode(array('message'=>'No records found.','status'=>false));
   
   }
?>