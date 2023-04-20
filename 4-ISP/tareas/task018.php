<?php
/*
¡Por supuesto! Aquí tienes otra tarea para que tus alumnos practiquen el principio de segregación de
interfaces en PHP:

### Enunciado

Se te ha encargado la implementación de un sistema de registro de usuarios para una plataforma de 
compras en línea. Para ello, se proporciona un código base que contiene una clase `User` y una interfaz 
`UserRepository`. La clase `User` representa a un usuario y la interfaz `UserRepository` define las 
operaciones que se pueden realizar con la base de datos de usuarios.

Sin embargo, se ha detectado que la interfaz `UserRepository` tiene demasiadas operaciones y no todas 
ellas son necesarias para la funcionalidad requerida. Se te pide que apliques el principio de segregación 
de interfaces de SOLID para dividir la interfaz `UserRepository` en interfaces más pequeñas y cohesivas.
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
    public function getUserByEmail($email);
    public function getAllUsers();
    public function deleteUser(User $user);
    public function updateUser(User $user);
    public function authenticateUser($email, $password);
}

/*
### Tarea

1. Divide la interfaz `UserRepository` en dos interfaces más pequeñas y cohesivas, de acuerdo con el 
principio de segregación de interfaces. Nombra a estas interfaces de manera coherente y significativa.

2. Modifica la clase `UserRepositoryImpl` para que implemente las nuevas interfaces que has creado en 
el paso anterior, de acuerdo con el principio de segregación de interfaces.

3. En el archivo `register.php`, utiliza las nuevas interfaces para registrar un nuevo usuario en la 
base de datos.

4. En el archivo `login.php`, utiliza las nuevas interfaces para autenticar un usuario y permitirle 
iniciar sesión en la plataforma.
*/

### Código a implementar
#### Nuevas interfaces a implementar

interface UserAdder {
    public function addUser(User $user);
}

interface UserReader {
    public function getUserById($id);
    public function getUserByEmail($email);
    public function getAllUsers();
}

interface UserDeleter {
    public function deleteUser(User $user);
}

interface UserUpdater {
    public function updateUser(User $user);
}

interface UserAuthenticator {
    public function authenticateUser($email, $password);
}

#### En `UserRepositoryImpl.php`:
class UserRepositoryImpl implements UserAdder, UserReader, UserDeleter, UserUpdater, UserAuthenticator {
    // implementación de los métodos 
}