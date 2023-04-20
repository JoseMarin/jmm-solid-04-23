<?php

//Enunciado
/*
Tenemos una aplicación de chat que utiliza una clase Message para enviar y recibir
mensajes. Actualmente, la clase no cumple con el principio Open/Closed SOLID ya 
que si deseamos agregar un nuevo tipo de mensaje (por ejemplo, un mensaje de voz),
necesitaremos modificar la clase Message agregando un nuevo método.

Tu tarea es modificar la aplicación de chat para que cumpla con el principio 
Open/Closed SOLID. Deberás crear una clase abstracta Message que tenga un método
abstracto send y luego crear tres clases hijas que extiendan la clase abstracta 
y que se encarguen de enviar cada tipo de mensaje (mensaje de texto, mensaje de 
imagen y mensaje de video).

Pasos a seguir
    1-Crea una clase abstracta Message que tenga un método abstracto send.
    2-Crea una clase hija TextMessage que extienda la clase Message y que se encargue
    de enviar un mensaje de texto.
    3-Crea una clase hija ImageMessage que extienda la clase Message y que se encargue
    de enviar un mensaje de imagen.
    4-Crea una clase hija VideoMessage que extienda la clase Message y que se encargue
    de enviar un mensaje de video.
*/

//Código base
//Aquí está el código base que deberás modificar:

    class Message {
        public function sendTextMessage($text) {
          // Enviar mensaje de texto
          // Ejemplo: $text = 'Hola, ¿cómo estás?';
      
          // Enviar el mensaje de texto utilizando la API de envío de mensajes
          echo "Se ha enviado un mensaje de texto: $text";
        }
      
        public function sendImageMessage($image) {
          // Enviar mensaje de imagen
          // Ejemplo: $image = 'https://example.com/image.jpg';
      
          // Enviar el mensaje de imagen utilizando la API de envío de mensajes
          echo "Se ha enviado un mensaje de imagen: $image";
        }
      
        public function sendVideoMessage($video) {
          // Enviar mensaje de video
          // Ejemplo: $video = 'https://example.com/video.mp4';
      
          // Enviar el mensaje de video utilizando la API de envío de mensajes
          echo "Se ha enviado un mensaje de video: $video";
        }
      }
      
      // Ejemplo de uso de la aplicación de chat
      
      // Creamos una instancia de la clase Message
      $message = new Message();
      
      // Enviamos un mensaje de texto
      $message->sendTextMessage('Hola, ¿cómo estás?');
      
      // Enviamos un mensaje de imagen
      $message->sendImageMessage('https://example.com/image.jpg');
      
      // Enviamos un mensaje de video
      $message->sendVideoMessage('https://example.com/video.mp4');
