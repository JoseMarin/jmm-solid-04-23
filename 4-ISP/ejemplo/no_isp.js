// Interfaz para enviar correos electrónicos
class EmailSender {
  sendEmail(subject, message);
}

// Interfaz para guardar usuarios en la base de datos
class UserSaver {
  save();
}

// Clase que implementa la interfaz EmailSender
class EmailService {
  sendEmail(subject, message) {
    console.log(`Enviando correo electrónico con el asunto "${subject}" y el mensaje: ${message}`);
  }
}

// Clase que implementa la interfaz UserSaver
class DatabaseService {
  save() {
    console.log(`Guardando usuario en la base de datos...`);
  }
}

// Clase que utiliza ambas interfaces
class User {
  constructor(name, email, emailSender, userSaver) {
    this.name = name;
    this.email = email;
    this.emailSender = emailSender;
    this.userSaver = userSaver;
  }

  register() {
    this.emailSender.sendEmail("Bienvenido", `Hola, ${this.name}! Bienvenido a nuestra aplicación.`);
    this.userSaver.save();
  }
}

// Uso de las clases EmailService, DatabaseService y User
const emailService = new EmailService();
const databaseService = new DatabaseService();
const user = new User("Juan", "juan@example.com", emailService, databaseService);
user.register();
