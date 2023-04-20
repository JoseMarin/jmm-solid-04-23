<?php

/*
**Enunciado:**

El objetivo de esta tarea es implementar un programa en PHP que permita manejar una lista de animales 
en un zoológico. Para ello, ya se ha proporcionado un código base que incluye una clase `Animal` y 
tres clases hijas: `Leon`, `Elefante` y `Cebra`. Sin embargo, se ha detectado que el código actual 
no está siguiendo el principio de sustitución de Liskov, lo que significa que las clases hijas no 
son completamente sustituibles por la clase padre.

Se solicita que se realicen las siguientes modificaciones en el código para aplicar correctamente 
el principio de sustitución de Liskov:

1. En la clase `Animal`, crear un método `hablar()` que devuelva un string con el sonido que hace 
el animal. Este método será sobrescrito en cada una de las clases hijas para proporcionar el sonido 
específico de cada animal.

2. En cada una de las clases hijas, implementar el método `hablar()` para proporcionar el sonido 
específico de cada animal.

3. Asegurarse de que todas las clases hijas puedan ser utilizadas de manera intercambiable con la 
clase padre en cualquier lugar donde se espere un objeto de tipo `Animal`.

4. Crear una función llamada `escucharAnimales()` que tome un array de objetos de la clase `Animal` 
y muestre el sonido que hace cada animal utilizando el método `hablar()`.

5. Crear un array con objetos de cada clase hija y pasarlo a `escucharAnimales()`. Asegurarse de 
que la salida muestre el sonido correspondiente a cada animal.
*/

//**Código base:**


abstract class Animal {
    protected $nombre;
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

class Leon extends Animal {
    public function __construct($nombre) {
        parent::__construct($nombre);
    }
}

class Elefante extends Animal {
    public function __construct($nombre) {
        parent::__construct($nombre);
    }
}

class Cebra extends Animal {
    public function __construct($nombre) {
        parent::__construct($nombre);
    }
}

