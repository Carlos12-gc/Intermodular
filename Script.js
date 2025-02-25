let carrito = [];

function agregarAlCarrito(id,nombre,precio){
    let producto = carrito.find(item => item.id === id);
    if(producto){
        producto.cantidad++;
    } else{
        carrito.push({id,nombre,precio,cantidad: 1});
    }
    actualizarCarrito();

    elemProdcuto.classList.add('agregado');
    setTimeout(() => elemProdcuto.classList.remove('agregado'),500);
    actualizarCarrito();
}

function actualizarCarrito(){
    let listaCarrito = document.getElementById("lista-carrito");
    let total = 0;
    listaCarrito.innerHTML = "";

    carrito.forEach(item => {
        let subtotal = item.precio + item.cantidad;
        total += subtotal;

        let li = document.createElement("li");
        li.textContent = '${item.nombre} x${item.cantidad} - $${subtotal}';
        listaCarrito.appendChild(li);
    });
    document.getAnimations("total".textContent = total);
}

function precederCopmra(){
    document.getElementById("formulario-compra").style.display = "block" ;
}



