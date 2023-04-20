<?php
/*
Aquí tienes una tarea para practicar el principio de sustitución de Liskov en PHP:
Se trata de aplicar el principio de sustitución de Liskov en un programa que calcula el área de diferentes 
figuras geométricas:

  **Enunciado:**
  
  El objetivo de esta tarea es implementar un programa en PHP que permita calcular el área de diferentes 
  figuras geométricas. Para ello, ya se ha proporcionado un código base que incluye una clase `Figura` y 
  tres clases hijas: `Cuadrado`, `Rectangulo` y `Circulo`. Sin embargo, se ha detectado que el código actual 
  no está siguiendo el principio de sustitución de Liskov, lo que significa que las clases hijas no son 
  completamente sustituibles por la clase padre.
  
  Se solicita que se realicen las siguientes modificaciones en el código para aplicar correctamente el 
  principio de sustitución de Liskov:
  
  1. En la clase `Figura`, crear un método `calcularArea()` que devuelva el área de la figura. Este 
  método será sobrescrito en cada una de las clases hijas para proporcionar el cálculo específico 
  de cada figura.
  
  2. En cada una de las clases hijas, implementar el método `calcularArea()` para proporcionar el 
  cálculo específico de cada figura.
  
  3. Asegurarse de que todas las clases hijas puedan ser utilizadas de manera intercambiable con 
  la clase padre en cualquier lugar donde se espere un objeto de tipo `Figura`.
  
  4. Crear una función llamada `imprimirArea()` que tome un objeto de la clase `Figura` y muestre 
  el área de la figura correspondiente utilizando el método `calcularArea()`.
  
  5. Crear un objeto de cada clase hija y pasarlo a `imprimirArea()`. Asegurarse de que la salida 
  sea coherente con la figura correspondiente.
*/


 // **Código base:**
  
  
  abstract class Figura {
      protected $ancho;
      protected $altura;
      
      public function __construct($ancho, $altura) {
          $this->ancho = $ancho;
          $this->altura = $altura;
      }
  }
  
  class Cuadrado extends Figura {
      public function __construct($lado) {
          parent::__construct($lado, $lado);
      }
  }
  
  class Rectangulo extends Figura {
      public function __construct($base, $altura) {
          parent::__construct($base, $altura);
      }
  }
  
  class Circulo extends Figura {
      protected $radio;
      
      public function __construct($radio) {
          parent::__construct(0, 0);
          $this->radio = $radio;
      }
  }

