<?php

class Pedido {
   private $id;
   private $cliente;
   private $items = array();
   private $descuento;

   public function __construct($id, $cliente, $items, $descuento = 0) {
      $this->id = $id;
      $this->cliente = $cliente;
      $this->items = $items;
      $this->descuento = $descuento;
   }

   public function getId() {
      return $this->id;
   }

   public function getCliente() {
      return $this->cliente;
   }

   public function setCliente($cliente) {
      $this->cliente = $cliente;
   }

   public function getItems() {
      return $this->items;
   }

   public function setItems($items) {
      $this->items = $items;
   }

   public function getDescuento() {
      return $this->descuento;
   }

   public function setDescuento($descuento) {
      $this->descuento = $descuento;
   }

   public function getTotal() {
      $total = 0;
      foreach ($this->items as $item) {
         $total += $item['precio'] * $item['cantidad'];
      }
      $total -= $total * ($this->descuento / 100);
      return $total;
   }

   public function enviarPedido() {
      $destinatario = $this->cliente->getEmail();
      $asunto = "Confirmación de pedido #" . $this->id;
      $mensaje = "Estimado " . $this->cliente->getNombre() . ",\n\n" .
                 "Le confirmamos la recepción de su pedido #" . $this->id . ".\n\n" .
                 "Detalles del pedido:\n\n" .
                 "------------------------------------\n";
      foreach ($this->items as $item) {
         $mensaje .= $item['nombre'] . " x " . $item['cantidad'] . " - $" . $item['precio'] . " c/u\n";
      }
      $mensaje .= "\n------------------------------------\n\n" .
                  "Total: $" . $this->getTotal() . "\n\n" .
                  "Gracias por su compra!\n";
      mail($destinatario, $asunto, $mensaje);
   }
}