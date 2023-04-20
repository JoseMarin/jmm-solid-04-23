<?php
/* 
### Enunciado:
Tenemos una aplicación de tienda en línea que utiliza una clase Cart para agregar y 
eliminar productos del carrito de compras. Actualmente, la clase no cumple con el 
principio Open/Closed SOLID ya que si deseamos agregar un nuevo tipo de producto 
(por ejemplo, un producto virtual), necesitaremos modificar la clase Cart agregando 
un nuevo método.

Tu tarea es modificar la aplicación de tienda en línea para que cumpla con el 
principio Open/Closed SOLID. Deberás crear una clase abstracta Product que tenga
un método abstracto getPrice y luego crear tres clases hijas que extiendan la 
clase abstracta y que representen cada tipo de producto (producto físico, 
producto digital y producto virtual).

### Pasos a seguir
    1-Crea una clase abstracta Product que tenga un método abstracto getPrice.
    2-Crea una clase hija PhysicalProduct que extienda la clase Product y que 
    represente un producto físico.
    3-Crea una clase hija DigitalProduct que extienda la clase Product y que 
    represente un producto digital.
    4-Crea una clase hija VirtualProduct que extienda la clase Product y que 
    represente un producto virtual.
    5-Modifica la clase Cart para que pueda manejar cada tipo de producto sin 
    necesidad de modificar la clase.
*/

// Código base
// Aquí está el código base que deberás modificar:

    class Cart {
        private $items = [];
      
        public function addItem($product) {
          // Agregar un producto al carrito de compras
          $this->items[] = $product;
        }
      
        public function removeItem($product) {
          // Eliminar un producto del carrito de compras
          $index = array_search($product, $this->items);
          if ($index !== false) {
            unset($this->items[$index]);
          }
        }
      
        public function getTotalPrice() {
          // Calcular el precio total de los productos en el carrito de compras
          $totalPrice = 0;
          foreach ($this->items as $item) {
            $totalPrice += $item->getPrice();
          }
          return $totalPrice;
        }
      }
      
      // Ejemplo de uso de la aplicación de tienda en línea
      
      // Creamos una instancia de la clase Cart
      $cart = new Cart();
      
      // Creamos algunos productos
      $product1 = new Product('Producto 1', 10);
      $product2 = new Product('Producto 2', 20);
      
      // Agregamos los productos al carrito de compras
      $cart->addItem($product1);
      $cart->addItem($product2);
      
      // Eliminamos un producto del carrito de compras
      $cart->removeItem($product1);
      
      // Obtenemos el precio total de los productos en el carrito de compras
      $totalPrice = $cart->getTotalPrice();
      echo "El precio total es: $totalPrice";
      