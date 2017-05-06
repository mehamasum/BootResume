<?php
session_start();


/**
 * Created by PhpStorm.
 * User: rifat
 * Date: 4/25/17
 * Time: 6:15 PM
 */

//require_once('dbconnect_v.php');
require_once('db_local.php');

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = md5(mysqli_real_escape_string($conn, $_POST['password']));
//$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '". $username."' AND password= '".$password."';";


if($result = $conn->query($sql)){
    if($result->num_rows == 0) echo "Username or password does not match";
    else {
        $row = $result->fetch_assoc();
        $_SESSION['user']=$username;
        $_SESSION['schedule_id']=$row['scheduleId'];
        echo "success";
    }
}
else
    echo "Something went wrong";