<?php
/**
 * Created by PhpStorm.
 * User: rifat
 * Date: 4/25/17
 * Time: 6:15 PM
 */

require_once('dbconnect_v.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
//$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '". $username."' AND password= '".$password."';";

if($result = $conn->query($sql)){
    if($result->num_rows == 0)echo "Username and password does not match";
    else echo "success";
}
else echo $conn->error;