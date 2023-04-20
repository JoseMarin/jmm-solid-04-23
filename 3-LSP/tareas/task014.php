<?php
/* 
**Enunciado:**

El objetivo de esta tarea es implementar un programa en PHP que permita gestionar una 
biblioteca virtual de libros electrónicos. Para ello, ya se ha proporcionado un código 
base que incluye una clase `Libro` y dos clases hijas: `LibroFisico` y `LibroElectronico`.
 Sin embargo, se ha detectado que el código actual no está siguiendo el principio de 
 sustitución de Liskov, lo que significa que las clases hijas no son completamente 
 sustituibles por la clase padre.

Se solicita que se realicen las siguientes modificaciones en el código para aplicar 
correctamente el principio de sustitución de Liskov:

1. En la clase `Libro`, crear un método `mostrarDisponibilidad()` que devuelva un mensaje 
indicando si el libro está disponible o no.

2. En la clase `LibroFisico`, implementar el método `mostrarDisponibilidad()` para que 
devuelva un mensaje indicando si el libro físico está disponible o si está prestado y en 
ese caso, mostrar el nombre de la persona que lo ha prestado.

3. En la clase `LibroElectronico`, implementar el método `mostrarDisponibilidad()` para 
que devuelva un mensaje indicando si el libro electrónico está disponible o si está siendo 
utilizado por algún usuario y en ese caso, mostrar el nombre del usuario que lo está utilizando.

4. Asegurarse de que todas las clases hijas puedan ser utilizadas de manera intercambiable 
con la clase padre en cualquier lugar donde se espere un objeto de tipo `Libro`.

5. Crear una función llamada `mostrarDisponibilidadBiblioteca()` que tome un array de 
objetos de la clase `Libro` y muestre la disponibilidad de cada libro utilizando el método 
`mostrarDisponibilidad()`.

6. Crear un array con objetos de cada clase hija y pasarlo a `mostrarDisponibilidadBiblioteca()`. 
Asegurarse de que la salida muestre la disponibilidad correspondiente a cada libro.

7. Agregar a la clase `LibroFisico` un método `prestar()` que permita prestar el libro físico 
a una persona y otro método `devolver()` que permita devolver el libro prestado.

8. Agregar a la clase `LibroElectronico` un método `usar()` que permita utilizar el libro 
electrónico y otro método `dejarDeUsar()` que permita dejar de utilizar el libro.

9. Modificar el método `mostrarDisponibilidad()` en la clase `LibroFisico` y `LibroElectronico` 
para mostrar la información correspondiente cuando el libro esté prestado o siendo utilizado.
*/

//**Código base:**

abstract class Libro {
  protected $titulo;
  protected $autor;
  
  public function __construct($titulo, $autor) {
      $this->titulo = $titulo;
      $this->autor = $autor;
  }
  
  // Implementar el método mostrarDisponibilidad()
}

class LibroFisico extends Libro {
  protected $prestado;
  protected $nombrePrestado;
  
  public function __construct($titulo, $autor) {
      parent::__construct($titulo, $autor);
      $this->prestado = false;
      $this->nombrePrestado = '';
  }
  
  // Implementar el método mostrarDisponibilidad()
  
  // Agregar el método prestar()
  
  // Agregar el método devolver()
}

class LibroElectronico extends Libro {
  protected $usado;
  protected $nombreUsuario;
  
  public function __construct($titulo, $autor) {
      parent::__construct($titulo, $autor);
      $this->usado = false;
      $this->nombreUsuario = '';
  }
  
  // Implementar el método mostrarDisponibilidad()
  
  // Agregar el método usar()
  
  // Agregar el método dejarDeUsar()
}
