var cantidad = document.getElementById("inputCantidad")
var categoria = document.getElementById("inputCategoria")

function calcular() {
    if (categoria.value == 1) {descuento = 0.2}
    if (categoria.value == 2) {descuento = 0.5}
    if (categoria.value == 3) {descuento = 0.85}
    precio = 200 * cantidad.value * descuento
    document.formulario.total.value=("Total a Pagar $ " + precio)
}
