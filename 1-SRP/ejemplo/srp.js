class CarritoDeCompras {
    constructor() {
      this.items = [];
      this.totalizador = new Totalizador();
      this.vistaCarrito = new VistaCarritoDeCompras(this);
    }
    
    agregarProducto(producto) {
      this.items.push(producto);
      this.totalizador.actualizarTotal(this.items);
      this.vistaCarrito.mostrar();
    }
    
    eliminarProducto(producto) {
      const index = this.items.indexOf(producto);
      if (index !== -1) {
        this.items.splice(index, 1);
        this.totalizador.actualizarTotal(this.items);
        this.vistaCarrito.mostrar();
      }
    }
  }
  
  class Totalizador {
    actualizarTotal(items) {
      const total = items.reduce((acc, producto) => acc + producto.precio, 0);
      console.log(`El total de la compra es: ${total}`);
    }
  }
  
  class Producto {
    constructor(nombre, precio) {
      this.nombre = nombre;
      this.precio = precio;
    }
  }
  
  class VistaCarritoDeCompras {
    constructor(carrito) {
      this.carrito = carrito;
    }
    
    mostrar() {
      console.log("Productos en el carrito:");
      this.carrito.items.forEach(producto => console.log(`- ${producto.nombre} (${producto.precio})`));
      this.carrito.totalizador.actualizarTotal(this.carrito.items);
    }
  }