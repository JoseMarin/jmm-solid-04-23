class Animal {
  comer() {
    console.log('El animal está comiendo');
  }
}

class Perro extends Animal {
  comer() {
    console.log('El perro está comiendo');
  }
}

class Gato extends Animal {
  comer() {
    console.log('El gato está comiendo');
  }
}

function alimentar(animal) {
  animal.comer();
}

const perro = new Perro();
const gato = new Gato();

const animalGenerio = new Animal(); // creamos una instancia de la clase Animal que es más abstracta

alimentar(perro);
alimentar(gato);
alimentar(animalGenerio); // esta línea ya no causa problemas, aunque es una instancia de la clase Animal y no una clase hija
