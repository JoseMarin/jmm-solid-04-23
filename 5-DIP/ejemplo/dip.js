class Calculator {
  constructor() {
    this.result = 0;
  }
  
  add(a, b) {
    this.result = a + b;
  }
  
  subtract(a, b) {
    this.result = a - b;
  }
}

const calculator = new Calculator();
calculator.add(2, 3);
console.log(calculator.result); // Output: 5
