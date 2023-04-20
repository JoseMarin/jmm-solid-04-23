<?php

class Impuesto {
   private $monto;
   private $porcentaje;

   public function __construct($monto, $porcentaje) {
      $this->monto = $monto;
      $this->porcentaje = $porcentaje;
   }

   public function getMonto() {
      return $this->monto;
   }

   public function setMonto($monto) {
      $this->monto = $monto;
   }

   public function getPorcentaje() {
      return $this->porcentaje;
   }

   public function setPorcentaje($porcentaje) {
      $this->porcentaje = $porcentaje;
   }

   public function calcularImpuesto() {
      $impuesto = $this->monto * ($this->porcentaje / 100);
      return $impuesto;
   }

   public function imprimirFactura() {
      // Lógica para imprimir la factura con el monto y el impuesto calculado
   }
}