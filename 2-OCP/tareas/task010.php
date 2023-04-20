<?php
/* 
### Enunciado
Tenemos una aplicación que permite a los usuarios comprar boletos para eventos. Actualmente,
la aplicación utiliza una clase Ticket para representar los boletos. La clase Ticket tiene 
un método getPrice que calcula el precio del boleto en función del tipo de evento y del 
número de asistentes.

El problema con esta implementación es que si deseamos agregar un nuevo tipo de evento (por 
ejemplo, un concierto), necesitaremos modificar la clase Ticket agregando un nuevo caso 
al método getPrice.

Tu tarea es modificar la aplicación para que cumpla con el principio Open/Closed SOLID. 
Deberás crear una clase abstracta Event que tenga un método abstracto getPrice y luego 
crear tres clases hijas que extiendan la clase abstracta y que representen cada tipo de 
evento (obra de teatro, cine y concierto).

### Pasos a seguir
1-Crea una clase abstracta Event que tenga un método abstracto getPrice.
2-Crea una clase hija TheaterEvent que extienda la clase Event y que represente una obra de teatro.
3-Crea una clase hija MovieEvent que extienda la clase Event y que represente una función de cine.
4-Crea una clase hija ConcertEvent que extienda la clase Event y que represente un concierto.
5-Modifica la clase Ticket para que pueda manejar cada tipo de evento sin necesidad de modificar la clase.
*/

// ### Código base
// Aquí está el código base que deberás modificar:

class Ticket {
    private $type;
    private $attendees;
  
    public function __construct($type, $attendees) {
      $this->type = $type;
      $this->attendees = $attendees;
    }
  
    public function getPrice() {
      switch ($this->type) {
        case 'teatro':
          return $this->attendees * 20;
        case 'cine':
          return $this->attendees * 15;
        default:
          return $this->attendees * 30;
      }
    }
  }
  
  // Ejemplo de uso de la aplicación de venta de boletos
  
  // Creamos un boleto para una obra de teatro con 3 asistentes
  $ticket1 = new Ticket('teatro', 3);
  
  // Creamos un boleto para una función de cine con 2 asistentes
  $ticket2 = new Ticket('cine', 2);
  
  // Creamos un boleto para un evento desconocido con 5 asistentes
  $ticket3 = new Ticket('otro', 5);
  
  // Obtenemos el precio de cada boleto
  $price1 = $ticket1->getPrice();
  $price2 = $ticket2->getPrice();
  $price3 = $ticket3->getPrice();
  
  echo "El precio del boleto para la obra de teatro es: $price1\n";
  echo "El precio del boleto para la función de cine es: $price2\n";
  echo "El precio del boleto para el evento desconocido es: $price3\n";
  