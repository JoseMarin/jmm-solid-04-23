<?php

/*
### Enunciado

Tienes que desarrollar una aplicación de gestión de tareas que permita agregar, listar y eliminar 
tareas. Para ello, se proporciona un código base que contiene una clase `Task` y una interfaz 
`TaskRepository`. La clase `Task` representa una tarea y la interfaz `TaskRepository` define las 
operaciones que se pueden realizar con la base de datos de tareas.

Sin embargo, se ha detectado que la interfaz `TaskRepository` tiene demasiadas operaciones y no 
todas ellas son necesarias para la funcionalidad requerida. Se te pide que apliques el principio 
de segregación de interfaces de SOLID para dividir la interfaz `TaskRepository` en interfaces más 
pequeñas y cohesivas.
*/
### Código base

#### En `Task.php`:

class Task {
    private $id;
    private $description;
    private $done;

    public function __construct($id, $description, $done) {
        $this->id = $id;
        $this->description = $description;
        $this->done = $done;
    }

    public function getId() {
        return $this->id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function isDone() {
        return $this->done;
    }

    public function setDone($done) {
        $this->done = $done;
    }
}


#### En `TaskRepository.php`:


interface TaskRepository {
    public function addTask(Task $task);
    public function getTaskById($id);
    public function getAllTasks();
    public function deleteTask(Task $task);
    public function updateTask(Task $task);
}

/*
### Tarea

1. Divide la interfaz `TaskRepository` en dos interfaces más pequeñas y cohesivas, de acuerdo con 
el principio de segregación de interfaces. Nombra a estas interfaces de manera coherente y significativa.

2. Modifica la clase `TaskRepositoryImpl` para que implemente las nuevas interfaces que has creado 
en el paso anterior, de acuerdo con el principio de segregación de interfaces.

3. En el archivo `index.php`, utiliza las nuevas interfaces para agregar, listar y eliminar tareas.
*/


### Código a implementar
#### Nuevas interfaces a implementar

interface TaskAdder {
    public function addTask(Task $task);
}

interface TaskReader {
    public function getTaskById($id);
    public function getAllTasks();
}

interface TaskDeleter {
    public function deleteTask(Task $task);
}

interface TaskUpdater {
    public function updateTask(Task $task);
}


#### En `TaskRepositoryImpl.php`:


class TaskRepositoryImpl implements TaskAdder, TaskReader, TaskDeleter, TaskUpdater {
    // implementación de los métodos de las nuevas interfaces
}


