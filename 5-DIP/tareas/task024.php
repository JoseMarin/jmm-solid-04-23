<?php
/* 
Enunciado:
El siguiente código representa un sistema de gestión de usuarios. El objetivo es aplicar el principio 
de inversión de dependencias (DIP) para que la clase `UserManager` no dependa directamente de la clase 
`Database` y pueda utilizar diferentes tipos de almacenamiento de datos en el futuro.

Tarea:
1. Crea una interfaz `Storage` que tenga los métodos `addUser` y `getUser`.
2. Modifica la clase `Database` para que implemente la interfaz `Storage` en lugar de tener sus propios 
métodos `addUser` y `getUser`.
3. Modifica la clase `UserManager` para que acepte una instancia de `Storage` en su constructor y la 
almacene en una propiedad privada.
4. Modifica el método `registerUser` de la clase `UserManager` para que utilice la instancia de `Storage` 
para agregar y buscar usuarios en lugar de utilizar directamente la instancia de `Database`.
5. Crea una nueva clase `FileStorage` que implemente la interfaz `Storage` y utilice archivos para 
almacenar los datos de los usuarios.
6. Crea una instancia de `FileStorage` y pásala como argumento al constructor de `UserManager`.
7. Ejecuta el script y asegúrate de que los usuarios se registren correctamente utilizando la instancia 
de `FileStorage`.

*/

class Database {
    private $users = [];

    public function addUser($user) {
        $this->users[] = $user;
    }

    public function getUser($email) {
        foreach ($this->users as $user) {
            if ($user['email'] == $email) {
                return $user;
            }
        }
        return null;
    }
}

class UserManager {
    private $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function registerUser($user) {
        if ($this->database->getUser($user['email']) == null) {
            $this->database->addUser($user);
            echo "User registered successfully!";
        } else {
            echo "User already exists!";
        }
    }
}

$userManager = new UserManager();
$userManager->registerUser(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => 'secret']);
$userManager->registerUser(['name' => 'Jane Doe', 'email' => 'jane@example.com', 'password' => 'password']);
$userManager->registerUser(['name' => 'Bob Smith', 'email' => 'bob@example.com', 'password' => '123456']);

