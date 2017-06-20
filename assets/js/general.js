
var productos = new Array();
var contador = 0;

function agregar($value) {
    productos.push($value);
    contador++;
    console.log(contador);
    $("#suma").text(contador);
    $("#contenido").append("<input value='" + productos +"' name='pedido' id='pedido' >");
}


