class User {
  constructor(name, email) {
    this.name = name;
    this.email = email;
  }

  // Método para enviar correo electrónico
  sendEmail(subject, message) {
    console.log(`Enviando correo electrónico a ${this.email} con el asunto "${subject}" y el mensaje: ${message}`);
  }

  // Método para guardar usuario en la base de datos
  save() {
    console.log(`Guardando usuario ${this.name} en la base de datos...`);
  }
}

// Uso de la clase User
const user = new User("Juan", "juan@example.com");
user.sendEmail("Bienvenido", "Hola, Juan! Bienvenido a nuestra aplicación.");
user.save();
