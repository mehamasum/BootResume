<?php
session_start();

//require_once('dbconnect_v.php');
require_once('db_local.php');

$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE username = '". $_SESSION['user']."' AND password= '".$password."';";

$user = $_SESSION['user'];

$signup_sql = "DELETE FROM users WHERE username = "."'$user'";
$image_sql = "DELETE FROM images WHERE username = "."'$user'";
$social_sql = "DELETE FROM social WHERE username = "."'$user'";


if($result = $conn->query($sql)){
    if($result->num_rows == 0) echo "Password does not match";
    else {
        if($conn->query($signup_sql) == TRUE && $conn->query($image_sql) == TRUE && $conn->query($social_sql) == TRUE){
            echo $_SESSION['schedule_id'];
            session_destroy();
        }
        else{
            echo "ERR";
        }
    }
}
else {
    echo "ERR";
}
