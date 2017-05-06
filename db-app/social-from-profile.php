<?php
/**
 * Created by PhpStorm.
 * User: rifat
 * Date: 5/2/17
 * Time: 5:06 AM
 */

//require_once('dbconnect_u.php');
require_once('db_local.php');

$username= mysqli_real_escape_string($conn, $_POST['profile']);

$sql= "select * FROM social WHERE username='".$username."';";


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