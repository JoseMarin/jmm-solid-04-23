<?php
/*
Enunciado:
El siguiente código representa una lista de compras en línea. El objetivo es agregar la funcionalidad 
de envío de correos electrónicos al finalizar la compra utilizando el principio de inversión de 
dependencias (DIP).

Tarea:
1. Implementa una interfaz `EmailService` que tenga un método `send` para enviar correos electrónicos.
2. Crea una clase `EmailSender` que implemente la interfaz `EmailService` y tenga un método `send` que 
envíe correos electrónicos utilizando la función `mail()` de PHP.
3. Modifica la clase `ShoppingCart` para que acepte una instancia de `EmailService` en su constructor y 
la almacene en una propiedad privada.
4. Modifica el método `checkout()` de la clase `ShoppingCart` para que utilice la instancia de 
`EmailService` para enviar un correo electrónico al cliente con los detalles de la orden.
5. Crea una instancia de `EmailSender` y pásala como argumento al constructor de `ShoppingCart`.
6. Ejecuta el script y asegúrate de que se envíe un correo electrónico al finalizar la compra.
*/

class ShoppingCart {
    private $items = [];

    public function addItem($item) {
        $this->items[] = $item;
    }

    public function getItems() {
        return $this->items;
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'];
        }
        return $total;
    }

    public function checkout() {
        // TODO: Send email to customer with order details
        echo "Checkout complete! Total: {$this->getTotal()}";
    }
}

$cart = new ShoppingCart();
$cart->addItem(['name' => 'Shirt', 'price' => 20]);
$cart->addItem(['name' => 'Pants', 'price' => 40]);
$cart->addItem(['name' => 'Shoes', 'price' => 80]);
$cart->checkout();

