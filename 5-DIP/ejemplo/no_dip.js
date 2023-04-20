// Definimos la interfaz `MathOperation`
class MathOperation {
  compute(a, b) {}
}

// Creamos implementaciones de la interfaz `MathOperation`
class AddOperation extends MathOperation {
  compute(a, b) {
    return a + b;
  }
}

class SubtractOperation extends MathOperation {
  compute(a, b) {
    return a - b;
  }
}

// Modificamos la clase `Calculator` para que dependa de la interfaz `MathOperation`
class Calculator {
  constructor() {
    this.result = 0;
  }
  
  performOperation(operation, a, b) {
    this.result = operation.compute(a, b);
  }
}

const calculator = new Calculator();
const addOperation = new AddOperation();
calculator.performOperation(addOperation, 2, 3);
console.log(calculator.result); // Output: 5
