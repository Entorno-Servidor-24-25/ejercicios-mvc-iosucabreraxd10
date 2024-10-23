<?php

class User {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Método para guardar el usuario en la base de datos
    public function save($connection) {
        // Insertar el usuario en la base de datos
        $sql = "INSERT INTO Usuario (name) VALUES ('$this->name')";
        
        if ($connection->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    public static function getAll($connection){
        $sql = "SELECT name FROM Usuario";
        $result = $connection -> query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $users[] = $row["name"];
            }
            return $users;
          }
    }
    public function Delete($connection){
        $sql = "DELETE * FROM Usuario WHERE";
        $result = $connection -> query($sql);
    }
}
