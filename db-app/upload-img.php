<?php

if (isset($_FILES['imageToUpload'])) {


    $user = $_POST['user'];

    include ('db_local.php');

    //getting file info from the request
    $fileinfo = basename($_FILES['imageToUpload']['name']);
    //echo "fileinfo= ".$fileinfo."\n";


    $sql1= "INSERT INTO `images` (`id`, `username`, `name`) VALUES (NULL, '$user', '$fileinfo');";

    if ($conn->query($sql1) == TRUE) {
        $filename = $conn->insert_id;

        $file_path = "../uploads/".$filename.".png";

        $url = "uploads/".$filename.".png";

        try {
            move_uploaded_file($_FILES['imageToUpload']['tmp_name'], $file_path);

            $sql = "UPDATE users SET url = '" . $url. "' WHERE username='". $_POST['user']. "';";

            if ($conn->query($sql) == TRUE) {
                echo "###".$url;
            }
            else {
                echo "ERR";
            }
        }
        catch (Exception $e) {
            echo "ERR";
        }
    }
    else {
        echo "ERR";
    }






}
