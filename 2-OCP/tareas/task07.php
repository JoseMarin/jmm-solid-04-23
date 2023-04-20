<?php
/*
   La aplicación de contabilidad de nuestra empresa tiene una clase Transaction que se 
   encarga de agregar diferentes tipos de transacciones (pago a proveedores, venta a 
   clientes, pago de salarios a empleados). Actualmente, la clase no cumple con el 
   principio Open/Closed SOLID ya que si deseamos agregar un nuevo tipo de transacción, 
   necesitaremos modificar la clase Transaction agregando un nuevo método.

   Tu tarea es modificar la aplicación de contabilidad para que cumpla con el principio 
   Open/Closed SOLID. Deberás crear una clase abstracta Transaction que tenga un método 
   abstracto addTransaction y luego crear tres clases hijas que extiendan la clase 
   abstracta y que se encarguen de agregar cada tipo de transacción.

   Pasos a seguir
      1-Crea una clase abstracta Transaction que tenga un método abstracto addTransaction.
      2-Crea una clase hija PaymentToVendor que extienda la clase Transaction y que se 
      encargue de agregar un pago a proveedor.
      3-Crea una clase hija SaleToCustomer que extienda la clase Transaction y que se encargue
      de agregar una venta a cliente.
      4-Crea una clase hija SalaryPaymentToEmployee que extienda la clase Transaction y que
*/


class Transaction {
   public function addPaymentToVendor($data) {
     // Agregar pago a proveedor
     // Ejemplo: $data = ['vendorId' => 1, 'amount' => 100];
     $vendorId = $data['vendorId'];
     $amount = $data['amount'];
 
     // Agregar el pago a la base de datos o a un archivo de registro
     echo "Se ha agregado un pago de $amount a un proveedor con ID $vendorId";
   }
 
   public function addSaleToCustomer($data) {
     // Agregar venta a cliente
     // Ejemplo: $data = ['customerId' => 1, 'amount' => 200];
     $customerId = $data['customerId'];
     $amount = $data['amount'];
 
     // Agregar la venta a la base de datos o a un archivo de registro
     echo "Se ha agregado una venta de $amount a un cliente con ID $customerId";
   }
 
   public function addSalaryPaymentToEmployee($data) {
     // Agregar pago de salario a empleado
     // Ejemplo: $data = ['employeeId' => 1, 'amount' => 500];
     $employeeId = $data['employeeId'];
     $amount = $data['amount'];
 
     // Agregar el pago de salario a la base de datos o a un archivo de registro
     echo "Se ha agregado un pago de salario de $amount a un empleado con ID $employeeId";
   }
 }
 
 // Ejemplo de uso de la aplicación de contabilidad
 
 // Creamos una instancia de la clase Transaction
 $transaction = new Transaction();
 
 // Agregamos un pago a un proveedor
 $transaction->addPaymentToVendor(['vendorId' => 1, 'amount' => 100]);
 
 // Agregamos una venta a un cliente
 $transaction->addSaleToCustomer(['customerId' => 2, 'amount' => 200]);
 
 // Agregamos un pago de salario a un empleado
 $transaction->addSalaryPaymentToEmployee(['employeeId' => 3, 'amount' => 500]);
 