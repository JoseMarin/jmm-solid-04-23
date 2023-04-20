<?php
/* 
### Enunciado
Debes crear una clase `CuentaBancaria` que represente una cuenta bancaria con los siguientes atributos:
- `numeroCuenta`: número de la cuenta bancaria.
- `saldo`: saldo disponible en la cuenta bancaria.
- `interes`: porcentaje de interés que se aplica al saldo de la cuenta bancaria.

La clase debe tener los siguientes métodos:
- `__construct()`: constructor que recibe el número de cuenta y el interés, y que inicializa el saldo a 0.
- `depositar($cantidad)`: método que recibe una cantidad y la suma al saldo de la cuenta.
- `retirar($cantidad)`: método que recibe una cantidad y la resta del saldo de la cuenta. Debe verificar 
que el saldo sea suficiente antes de realizar la operación.
- `calcularInteres()`: método que calcula el interés que se acumula en la cuenta bancaria y lo suma al 
saldo actual.
- `mostrarSaldo()`: método que muestra el saldo actual de la cuenta bancaria.

Además, debes crear dos clases que hereden de `CuentaBancaria`:
- `CuentaCorriente`: representa una cuenta corriente, que tiene un límite de crédito. Si se intenta 
retirar más dinero del que hay en la cuenta, se utilizará el límite de crédito para cubrir el resto. 
El límite de crédito se establece en el constructor.
- `CuentaAhorro`: representa una cuenta de ahorro, que tiene una tasa de interés especial que se 
aplica a los saldos superiores a un valor mínimo. El valor mínimo y la tasa de interés especial se 
establecen en el constructor.

Ambas clases deben implementar los métodos `__construct()` y `calcularInteres()`, y deben sobrescribir
 el método `retirar()` para ajustarse a sus propias reglas de negocio.
*/

// ### Código base

class CuentaBancaria {
    protected $numeroCuenta;
    protected $saldo;
    protected $interes;
    
    public function __construct($numeroCuenta, $interes) {
        // Implementar constructor
    }
    
    public function depositar($cantidad) {
        // Implementar método depositar
    }
    
    public function retirar($cantidad) {
        // Implementar método retirar
    }
    
    public function calcularInteres() {
        // Implementar método calcularInteres
    }
    
    public function mostrarSaldo() {
        // Implementar método mostrarSaldo
    }
}

class CuentaCorriente extends CuentaBancaria {
    protected $limiteCredito;
    
    public function __construct($numeroCuenta, $interes, $limiteCredito) {
        // Implementar constructor
    }
    
    public function retirar($cantidad) {
        // Implementar método retirar
    }
}

class CuentaAhorro extends CuentaBancaria {
    protected $tasaInteresEspecial;
    protected $valorMinimo;
    
    public function __construct($numeroCuenta, $interes, $tasaInteresEspecial, $valorMinimo) {
        // Implementar constructor
    }
    
    public function retirar($cantidad) {
        // Implementar método retirar
    }
}
