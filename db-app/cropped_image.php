<?php

$data = $_POST['base64data'];
$user = $_POST['user'];

//echo $data;

list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);
$data = base64_decode($data);


include ('db_local.php');

$sql1= "INSERT INTO `images` (`id`, `username`) VALUES (NULL, '$user');";

if ($conn->query($sql1) == TRUE) {
    $filename = $conn->insert_id;

    $file_path = "../uploads/".$filename.".png";

    $url = "uploads/".$filename.".png";

    try {
        file_put_contents($file_path, $data);

        $sql = "UPDATE users SET url = '" . $url. "' WHERE username='". $user. "';";

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


