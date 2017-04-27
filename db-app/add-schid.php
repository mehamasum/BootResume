<?php
session_start();
/**
 * Created by PhpStorm.
 * User: rifat
 * Date: 4/26/17
 * Time: 7:01 PM
 */

//require_once('dbconnect_v.php');
require_once('db_local.php');

$username = $_POST['username'];
$schid = $_POST['schid'];

$sql = "UPDATE users SET scheduleId= '".$schid."' WHERE username = '". $username."';";

if($result = $conn->query($sql)){
    $_SESSION['schedule_id']=$schid;
    echo "success";
}
else echo $conn->error;