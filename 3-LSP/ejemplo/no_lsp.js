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

function alimentar(animal) { // el método alimentar() espera un objeto Animal
  animal.comer();
}

const perro = new Perro();
const gato = new Gato();

alimentar(perro);
alimentar(gato);