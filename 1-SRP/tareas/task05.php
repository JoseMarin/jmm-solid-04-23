<?php
class RegistroUsuario {
   private $nombre;
   private $email;
   private $password;
   private $confirm_password;
   private $error;

   public function __construct($nombre, $email, $password, $confirm_password) {
      $this->nombre = $nombre;
      $this->email = $email;
      $this->password = $password;
      $this->confirm_password = $confirm_password;
   }

   public function getNombre() {
      return $this->nombre;
   }

   public function getEmail() {
      return $this->email;
   }

   public function getPassword() {
      return $this->password;
   }

   public function getConfirmPassword() {
      return $this->confirm_password;
   }

   public function setError($error) {
      $this->error = $error;
   }

   public function getError() {
      return $this->error;
   }

   public function validarCampos() {
      // Lógica para validar los campos del formulario de registro
   }

   public function registrarUsuario() {
      $conexion = new Conexion();
      // Lógica para guardar usuario en la base de datos
   }

   public function enviarCorreo() {
      // Lógica para enviar correo electrónico de confirmación
   }
}