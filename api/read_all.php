
 <?php

 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 
 include_once'config.php';

 $fetchdata=new DB_con();
  $sql=$fetchdata->fetchdata();
  if(mysqli_num_rows($sql)>0){
   $output =mysqli_fetch_all($sql, MYSQLI_ASSOC);
   echo json_encode($output);
  }else{
  
      echo json_encode(array('message'=>'No records found.','status'=>false));
  
  }
  
  
