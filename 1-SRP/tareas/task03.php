<?php

class Usuario {
   private $id;
   private $nombre;
   private $email;
   private $password;
   private $estado;

   public function __construct($id, $nombre, $email, $password, $estado) {
      $this->id = $id;
      $this->nombre = $nombre;
      $this->email = $email;
      $this->password = $password;
      $this->estado = $estado;
   }

   public function getId() {
      return $this->id;
   }

   public function getNombre() {
      return $this->nombre;
   }

   public function setNombre($nombre) {
      $this->nombre = $nombre;
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

   public function getEstado() {
      return $this->estado;
   }

   public function setEstado($estado) {
      $this->estado = $estado;
   }

   public function guardar() {
      $conexion = new Conexion();
      // Lógica para guardar usuario en la base de datos
   }

   public function eliminar() {
      $conexion = new Conexion();
      // Lógica para eliminar usuario de la base de datos
   }

   public function activar() {
      $conexion = new Conexion();
      // Lógica para activar usuario en la base de datos
   }

   public function desactivar() {
      $conexion = new Conexion();
      // Lógica para desactivar usuario en la base de datos
   }

   public function enviarCorreo() {
      // Lógica para enviar correo electrónico de confirmación
   }
}