<?php
/* 
### Enunciado

Se te ha encomendado la tarea de desarrollar un sistema de registro y autenticación de usuarios 
para una aplicación web. El sistema debe ser capaz de registrar nuevos usuarios, iniciar sesión 
y cerrar sesión. Se te ha proporcionado un código base que contiene una clase `User` y una interfaz 
`UserRepository`. La clase `User` representa un usuario y la interfaz `UserRepository` define las 
operaciones que se pueden realizar con la base de datos de usuarios.

Sin embargo, se ha detectado que la interfaz `UserRepository` tiene demasiadas operaciones y no 
todas ellas son necesarias para la funcionalidad requerida. Se te pide que apliques el principio 
de segregación de interfaces de SOLID para dividir la interfaz `UserRepository` en interfaces más 
pequeñas y cohesivas.
*/

### Código base
#### En `User.php`:
class User {
    private $id;
    private $username;
    private $email;
    private $password;

    public function __construct($id, $username, $email, $password) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}

#### En `UserRepository.php`:
interface UserRepository {
    public function addUser(User $user);
    public function getUserById($id);
    public function getUserByUsername($username);
    public function getUserByEmail($email);
    public function updateUser(User $user);
    public function deleteUser(User $user);
    public function getAllUsers();
    public function loginUser($username, $password);
    public function logoutUser();
}
/*
### Tarea
1. Divide la interfaz `UserRepository` en tres interfaces más pequeñas y cohesivas, de acuerdo con el 
principio de segregación de interfaces. Nombra a estas interfaces de manera coherente y significativa.

2. Modifica la clase `UserRepositoryImpl` para que implemente las nuevas interfaces que has creado en 
el paso anterior, de acuerdo con el principio de segregación de interfaces.

3. En el archivo `register.php`, utiliza las nuevas interfaces para registrar un nuevo usuario en la 
base de datos.

4. En el archivo `login.php`, utiliza las nuevas interfaces para autenticar a un usuario y permitirle 
iniciar sesión en la aplicación.

5. En el archivo `logout.php`, utiliza las nuevas interfaces para permitir a un usuario cerrar sesión.
*/
### Código a implementar
#### Nuevas interfaces a implementar
interface UserRegistration {
    public function addUser(User $user);
}

interface UserAuthentication {
    public function loginUser($username, $password);
    public function logoutUser();
}

interface UserManagement {
    public function getUserById($id);
    public function getUserByUsername($username);
    public function getUserByEmail($email);
    public function updateUser(User $user);
    public function deleteUser(User $user);
    public function getAllUsers();
}
