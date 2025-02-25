let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

function agregarAlCarrito(id, nombre, precio) {
    let producto = carrito.find(item => item.id === id);
    if (producto) {
        producto.cantidad++;
    } else {
        carrito.push({ id, nombre, precio, cantidad: 1 });
    }
    localStorage.setItem('carrito', JSON.stringify(carrito));
    actualizarCarrito();
}

function actualizarCarrito() {
    let listaCarrito = document.getElementById("lista-carrito");
    let total = 0;
    listaCarrito.innerHTML = "";

    carrito.forEach(item => {
        let subtotal = item.precio * item.cantidad;
        total += subtotal;

        let li = document.createElement("li");
        li.textContent = `${item.nombre} x${item.cantidad} - €${subtotal}`;
        listaCarrito.appendChild(li);
    });
    document.getElementById("Total").textContent = total;
}

function procederCompra() {
    document.getElementById("formulario-compra").style.display = "block";
}


document.addEventListener('DOMContentLoaded', actualizarCarrito);



