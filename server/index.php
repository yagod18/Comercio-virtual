<?php
// Este archivo contiene una funcion que va a tomar la uri y traer los datos cargados en la closure. para generar un enrutamiento dinamico. Closure es una funcion como argumento de otra funcion. en este caso es el tercer argumento de la funcion router
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Content-type:application/json");

include_once("./router.php");

include_once("./routes/productos.php");
include_once("./routes/producto.php");
include_once("./routes/categorias.php");
