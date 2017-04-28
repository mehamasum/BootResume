<?php

if (isset($_FILES['imageToUpload'])) {


    include ('db_local.php');

    //getting file info from the request
    $fileinfo = pathinfo($_FILES['imageToUpload']['name']);
    //echo "fileinfo= ".$fileinfo."\n";

    //getting the file extension
    $extension = $fileinfo['extension'];
    //echo "extension= ".$extension."\n";



    try {

        mkdir("uploads");

        $file_path = "uploads/".$_POST['user'].".".$extension;

        $url = "uploads/".$_POST['user'].".".$extension;

        //echo "file_path= ".$file_path."\n";

        move_uploaded_file($_FILES['imageToUpload']['tmp_name'], $file_path);

        $sql = "UPDATE users SET url = '" . $url. "' WHERE username='". $_POST['user']. "';";

        if ($conn->query($sql) == TRUE) {
            echo "###".$url;
        }
        else {
            echo "ERR";
        }

    } catch (Exception $e) {
        echo "ERR";
    }
}
