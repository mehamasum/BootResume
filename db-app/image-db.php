<?php
class Database {
    private $link;

    public function __construct() {

        $host= 'localhost';
        $user= 'root';
        $db= 'elegantres';
        $pass='rifat007';
        //$a_pass='3BnCPnAc'; // server
        session_start();
        try{
            $this->link = new PDO("mysql:host=".$host.";dbname=".$db, $user, $pass);
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            echo "Error: Unable to connect to MySQL: ". $e->getMessage();
            die;
        }

    }

    public function __destruct() {
        $this->link = null;
    }

    public function UploadImage($imageName, $imageFP) {


        $user=$_SESSION['user'];
        //$sql = $this->link->prepare("INSERT INTO images (username, name, image) VALUES (:username, :name, :image);");

        $sql = $this->link->prepare("UPDATE images SET image= :image, name= :name WHERE username= :username;");

        $sql->bindParam(":username",$user );
        $sql->bindParam(":name", $imageName);
        $sql->bindParam(":image", $imageFP, PDO::PARAM_LOB);
        $sql->execute();
        return $this->link->lastInsertId();
    }

    public function GetAllImages() {
        $sql = $this->link->prepare("SELECT * FROM images;");
        $sql->execute();
        $results = $sql->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function FindImage() {
        $sql = $this->link->prepare("SELECT * FROM images WHERE username = :username;");
        $sql->bindParam(":username", $_SESSION['user']);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_OBJ);
        return $result;
    }


}


