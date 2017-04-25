<?php
session_start();
/**
 * Created by PhpStorm.
 * User: rifat
 * Date: 4/25/17
 * Time: 8:05 PM
 */

require_once('dbconnect_u.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$fullname = $_POST['fullname'];


$username_check = "SELECT * FROM users WHERE username = '". $username."';";
$email_check = "SELECT * FROM users WHERE email = '". $email."';";
$signup_sql = "INSERT INTO users (email, username, name, password) VALUES ('" . $email . "','" . $username . "','" . $fullname . "','" . $password . "');";

if(($result = $conn->query($username_check)) && $result->num_rows > 0){
    echo "Username already exists";
}

else if(($result = $conn->query($email_check)) && $result->num_rows > 0){
    echo "Email already exists";
}
else if($conn->query($signup_sql) == TRUE){
    $_SESSION['user']=$username;
    echo "success";
}
else{
    echo "Something went wrong";
}