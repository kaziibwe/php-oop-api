<?php
 include_once'config.php';
 
 header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Athorization, X-Requested-With');

include_once 'config.php';

   $data = json_decode(file_get_contents("php://input"), true);
    // $email = $data['email'];
    $fname = $data['firstname'];
    $lname = $data['lastname'];
    $emailid = $data['emailid'];
    $contactno = $data['contactno'];
    $address = $data['address'];

    $insertdata = new DB_con();
    $sql = $insertdata->insert($fname, $lname, $emailid, $contactno, $address);
    
    if ($sql) {
        // echo "<script>alert('Record inserted successfully');</script>";
        // echo "<script>window.location.href='read.php'</script>";
        echo json_encode(array('status' => 'success', 'message' => 'Record inserted successfully'));
    } else {
        // echo "<script>alert('Something went wrong. Please try again');</script>";
        // echo "<script>window.location.href='read.php'</script>";
        echo json_encode(array('status' => 'failure', 'message' => 'Record is not inserted successfully'));

    }
?>
