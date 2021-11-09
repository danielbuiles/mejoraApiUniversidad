<?php

class DataBase {
    private $user = "root";
    private $password = "";
    private $host = "localhost";
    private $db = "dbacademic";
    private $port = "3306";
    private $charset = "utf8";
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    private $pdo;


    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $this->pdo = new PDO($dsn, $this->user, $this->password, $this->options);
    }


    public function getPDO() {
        return $this->pdo;
    }


    public function getAll($table) {
        $sql = "SELECT * FROM $table";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function getOne($table, $id) {
        $sql = "SELECT * FROM $table WHERE student_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }


    public function insert($table, $data) {
        $name = $data["nombre"];
        $class= $data["clase"];
        $email = $data["email"];
        $number = $data["numero"];

        $sql = "INSERT INTO $table (student_name, student_class,student_phone_num,student_email) VALUES ('$name','$class','$number','$email')";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }



    public function update($table, $data) {
        $id = $data["id"];
        $name = $data["nombre"];
        $class= $data["clase"];
        $email = $data["email"];
        $number = $data["numero"];

        $sql = "UPDATE $table SET student_name = '$name', student_class = '$class',student_phone_num = '$number',student_email = '$email' WHERE student_id = '$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }


    public function deleteMethod($table, $id) {
        $sql = "DELETE FROM $table WHERE student_id = '$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

}


?>