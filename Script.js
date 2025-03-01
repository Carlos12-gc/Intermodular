let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

// Función para agregar productos al carrito
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

// Función para eliminar completamente un producto del carrito
function eliminarDelCarrito(id) {
    carrito = carrito.filter(item => item.id !== id);
    localStorage.setItem('carrito', JSON.stringify(carrito));
    actualizarCarrito();
}

// Función para actualizar el carrito en la interfaz
function actualizarCarrito() {
    let listaCarrito = document.getElementById("lista-carrito");
    let total = 0;
    listaCarrito.innerHTML = "";

    carrito.forEach(item => {
        let subtotal = item.precio * item.cantidad;
        total += subtotal;

        let li = document.createElement("li");
        li.textContent = `${item.nombre} x${item.cantidad} - €${subtotal} `;

        // Botón para eliminar completamente el producto
        let btnEliminar = document.createElement("button");
        btnEliminar.textContent = "🗑️ Eliminar";
        btnEliminar.onclick = () => eliminarDelCarrito(item.id);
        btnEliminar.style.marginLeft = "10px";
        btnEliminar.style.backgroundColor = "red";
        btnEliminar.style.color = "white";
        btnEliminar.style.border = "none";
        btnEliminar.style.padding = "5px";
        btnEliminar.style.cursor = "pointer";
        btnEliminar.style.borderRadius = "5px";

        li.appendChild(btnEliminar);
        listaCarrito.appendChild(li);
    });

    document.getElementById("Total").textContent = total;
}

// Función para mostrar el formulario de compra
function procederCompra() {
    document.getElementById("formulario-compra").style.display = "block";
}

// Cargar carrito desde localStorage al cargar la página
document.addEventListener('DOMContentLoaded', actualizarCarrito);

