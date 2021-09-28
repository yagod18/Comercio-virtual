<?php
//Todos los modelos son consultas a la base de datos para crear actualizar leer y elimnar informacion
//Mostrar seria nuestro leer (SELECT)
function mostrar_producto($id) {
    //Esta creacion del producto deben reemplazarla con una consulta a la base de datos y traer la correspondiente segun el id


    return json_encode($producto);
}

function buscarProductos($buscar){
    
}
//Modificar seria nuestro UPDATE
function modificar_producto($datos) {
    //Aca lo unico que se hace es crear un obj con la info que viene y se reeenvia. pero deberan crear una consulta a la base de datos, enviar esta informacion y modificar el registro. y al terminar enviar como  respuesta (return) el mensaje de ok o el mensaje de error
    $producto = new stdClass();
    $producto->id = $datos->id;
    $producto->nombre = $datos->nombre;
    $producto->cantidad = $datos->cantidad;

    return json_encode($producto);
}
// Falta crear las funciones para eliminar y crear un nuevo registro
function cargar_productos($precio, $cantidad, $nombre, $categorias, $descripcion, $estatus) {  
$conexion = mysqli_connect("localhost", "root", "", "ecommerce");

$sql = " INSERT INTO productos (precio, cantidad, nombre, fk_categorias, descripcion, estatus) VALUES ('$precio','$cantidad','$nombre','$categorias','$descripcion', '$estatus')";

$query = mysqli_query($conexion, $sql) or die (mysqli_error($conexion));

return $query;


 }