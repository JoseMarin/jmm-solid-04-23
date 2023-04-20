class CarritoDeCompras {
    constructor() {
      this.items = [];
      this.total = 0;
    }
    
    agregarProducto(producto) {
      this.items.push(producto);
      this.actualizarTotal();
      this.mostrarCarrito();
    }
    
    eliminarProducto(producto) {
      const index = this.items.indexOf(producto);
      if (index !== -1) {
        this.items.splice(index, 1);
        this.actualizarTotal();
        this.mostrarCarrito();
      }
    }
    
    actualizarTotal() {
      this.total = this.items.reduce((acc, producto) => acc + producto.precio, 0);
    }
    
    mostrarCarrito() {
      console.log("Productos en el carrito:");
      this.items.forEach(producto => console.log(`- ${producto.nombre} (${producto.precio})`));
      console.log(`El total de la compra es: ${this.total}`);
    }
  }