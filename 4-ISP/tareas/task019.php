<?php
/* 
### Enunciado

Se te ha encomendado la tarea de desarrollar un sistema de pedidos en línea para una tienda en línea. 
El sistema debe ser capaz de procesar pedidos y mantener un registro de los pedidos realizados por los 
clientes. Se te ha proporcionado un código base que contiene una clase `Order` y una interfaz `OrderRepository`. 
La clase `Order` representa un pedido y la interfaz `OrderRepository` define las operaciones que se 
pueden realizar con la base de datos de pedidos.

Sin embargo, se ha detectado que la interfaz `OrderRepository` tiene demasiadas operaciones y no todas 
ellas son necesarias para la funcionalidad requerida. Se te pide que apliques el principio de segregación 
de interfaces de SOLID para dividir la interfaz `OrderRepository` en interfaces más pequeñas y cohesivas.
*/

### Código base
#### En `Order.php`:
class Order {
    private $id;
    private $userId;
    private $items;
    private $total;

    public function __construct($id, $userId, $items, $total) {
        $this->id = $id;
        $this->userId = $userId;
        $this->items = $items;
        $this->total = $total;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getItems() {
        return $this->items;
    }

    public function setItems($items) {
        $this->items = $items;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }
}

#### En `OrderRepository.php`:
interface OrderRepository {
    public function addOrder(Order $order);
    public function getOrderById($id);
    public function getAllOrders();
    public function updateOrder(Order $order);
    public function deleteOrder(Order $order);
    public function getUserOrders($userId);
    public function getOrderByDateRange($startDate, $endDate);
    public function getTotalRevenue();
}

/*
### Tarea
1. Divide la interfaz `OrderRepository` en dos interfaces más pequeñas y cohesivas, de acuerdo con el 
principio de segregación de interfaces. Nombra a estas interfaces de manera coherente y significativa.

2. Modifica la clase `OrderRepositoryImpl` para que implemente las nuevas interfaces que has creado en 
el paso anterior, de acuerdo con el principio de segregación de interfaces.

3. En el archivo `place_order.php`, utiliza las nuevas interfaces para registrar un nuevo pedido en la 
base de datos.

4. En el archivo `view_orders.php`, utiliza las nuevas interfaces para mostrar una lista de los pedidos 
realizados por un usuario.
*/
### Código a implementar
#### Nuevas interfaces a implementar

interface OrderAdder {
    public function addOrder(Order $order);
}

interface OrderReader {
    public function getOrderById($id);
    public function getAllOrders();
    public function getUserOrders($userId);
    public function getOrderByDateRange($startDate, $endDate);
}

interface OrderUpdater {
    public function updateOrder(Order $order);
}

interface OrderDeleter {
    public function deleteOrder(Order $order);
}

interface RevenueTracker {
    public function getTotalRevenue();
}
