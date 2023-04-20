<?php
/*
**Enunciado:**
La clase `ProductService` es responsable de almacenar una lista de productos y proporcionar algunos métodos 
para filtrarlos. Sin embargo, en su implementación actual, la clase `ProductService` depende directamente 
de la clase `Product`. Esto significa que cualquier cambio en la clase `Product` afectará a la clase 
`ProductService`.

Para aplicar el principio de inversión de dependencias, debemos eliminar esta dependencia directa de 
`ProductService` a `Product`, de tal forma que `ProductService` pueda trabajar con cualquier implementación 
que cumpla con los requisitos de los productos. Para lograr esto, se pueden seguir los siguientes pasos:

1. Define una interfaz `ProductInterface` que tenga los métodos `getName` y `getPrice`.

2. Haz que la clase `Product` implemente la interfaz `ProductInterface`.

3. Define una clase `ProductDatabase` que tenga los métodos `getProducts` y `getProductsByPriceRange`. 
Estos métodos deben devolver un arreglo de objetos que implementen la interfaz `ProductInterface`. 
Para este ejemplo, puedes simular la base de datos creando un arreglo de productos en la clase 
`ProductDatabase`.

4. Define una clase `ProductService` que tenga un constructor que reciba un objeto que implemente la 
interfaz `ProductInterface`. La clase `ProductService` debe tener los mismos métodos que la 
implementación actual, pero en lugar de trabajar con la clase `Product`, debe trabajar con la interfaz 
`ProductInterface`.

5. Crea un archivo de prueba `index.php` que instancie un objeto `ProductDatabase`, lo pase como 
parámetro a un objeto `ProductService` y llame a los métodos `getProducts` y `getProductsByPriceRange` 
para mostrar los productos en pantalla.
*/

### **Código Base:**
class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

class ProductService {
    private $products = [];

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function getProducts() {
        return $this->products;
    }

    public function getProductsByPriceRange($minPrice, $maxPrice) {
        $result = [];
        foreach ($this->products as $product) {
            if ($product->getPrice() >= $minPrice && $product->getPrice() <= $maxPrice) {
                $result[] = $product;
            }
        }
        return $result;
    }
}

$productService = new ProductService();
$productService->addProduct(new Product('iPhone', 1000));
$productService->addProduct(new Product('Samsung Galaxy', 800));
$productService->addProduct(new Product('Xiaomi', 600));
$productService->addProduct(new Product('LG', 400));

$products = $productService->getProducts();
echo "<h3>All Products:</h3>";
echo "<ul>";
foreach ($products as $product) {
    echo "<li>{$product->getName()} ({$product->getPrice()})</li>";
}
echo "</ul>";

$productsInRange = $productService->getProductsByPriceRange(500, 900);
echo "<h3>Products in Range:</h3>";
echo "<ul>";
foreach ($productsInRange as $product) {
    echo "<li>{$product->getName()} ({$product->getPrice()})</li>";
}
echo "</ul>";
