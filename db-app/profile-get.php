<?php
/**
 * Created by PhpStorm.
 * User: rifat
 * Date: 5/1/17
 * Time: 11:53 PM
 */



//require_once('dbconnect_u.php');
require_once('db_local.php');

$username= $_POST['profile'];

$sql= "select * FROM users WHERE username='".$username."';";


if(($result=$conn->query($sql))==TRUE){


    if($result->num_rows == 0) echo "error";
    else {
        $jsonData = array();

        while ($array = mysqli_fetch_row($result)) {
            $jsonData[] = $array;
        }

        echo json_encode($jsonData);
    }
}
else{
    echo "error";
    //echo mysqli_error($connection);
}