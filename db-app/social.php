<?php
session_start();
/**
 * Created by PhpStorm.
 * User: rifat
 * Date: 4/25/17
 * Time: 8:05 PM
 */

//require_once('dbconnect_u.php');
require_once('db_local.php');



/*
li: sm_val[0],
tw: sm_val[1],
gi: sm_val[2],
fa: sm_val[3],
go: sm_val[4],
sk: sm_val[5],
fl: sm_val[6],
insta: sm_val[7],
tu: sm_val[8],
yo: sm_val[9],
user: username*/


$username = $_SESSION['user'];
$linkedin = $_POST['li'];
$twitter = $_POST['tw'];
$github = $_POST['gi'];
$facebook= $_POST['fa'];
$googleplus = $_POST['go'];
$skype = $_POST['sk'];
$flickr = $_POST['fl'];
$instagram = $_POST['insta'];
$tumblr = $_POST['tu'];
$youtube = $_POST['yo'];


$sql = "UPDATE social SET linkedin='".$linkedin."',twitter='".$twitter."',github='".$github.
    "',facebook='".$facebook."',googleplus='".$googleplus."',skype='".$skype."',flickr='".$flickr.
    "',instagram='".$instagram."',tumblr='".$tumblr."',youtube='".$youtube."' WHERE username='".$username."';";

if($conn->query($sql) == TRUE){

    echo "success";
}
else{
    echo "Something went wrong";
}