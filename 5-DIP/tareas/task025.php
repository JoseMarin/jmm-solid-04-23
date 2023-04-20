<?php
/* 
Enunciado:
El siguiente código representa un sistema de registro de usuarios. El objetivo es aplicar el 
principio de inversión de dependencias (DIP) para que la clase `User` no dependa directamente 
de la clase `Database` y pueda trabajar con diferentes tipos de bases de datos en el futuro.

Tarea:
1. Crea una interfaz `DatabaseInterface` que tenga un método `execute` con dos parámetros: `$query` 
y `$params`.
2. Modifica la clase `Database` para que implemente la interfaz `DatabaseInterface`.
3. Modifica la clase `User` para que acepte una instancia de `DatabaseInterface` en su constructor 
en lugar de crear una instancia de `Database` internamente.
4. Crea una nueva clase `MySqlDatabase` que implemente la interfaz `DatabaseInterface`. Esta clase 
debe contener el código para conectarse a una base de datos MySQL y ejecutar consultas SQL.
5. Modifica el código de los usuarios para que utilice la clase `MySqlDatabase` en lugar de la 
clase `Database` original.
6. Ejecuta el script y asegúrate de que los usuarios se guardan correctamente en la base de 
datos MySQL.
*/

class User {
    private $name;
    private $email;
    private $password;
    private $db;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->db = new Database();
    }

    public function save() {
        $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $params = [$this->name, $this->email, $this->password];
        $this->db->execute($query, $params);
    }
}

class Database {
    public function execute($query, $params) {
        // código para ejecutar la consulta en la base de datos
    }
}

$user1 = new User('John Doe', 'johndoe@example.com', 'password1');
$user1->save();
$user2 = new User('Jane Smith', 'janesmith@example.com', 'password2');
$user2->save();

