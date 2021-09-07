<?php 	 
function cargar_productos() {  
$conexion = mysqli_connect("localhost", "root", "", "ecommerce");
$precio= $_POST['precio'];
$cantidad= $_POST['cantidad'];
$nombre= $_POST['nombre'];
$categorias= $_POST['categorias'];
$descripcion= $_POST['descripcion'];
$sql = " INSERT INTO productos (id_producto, precio, cantidad, nombre, categorias, descripcion) VALUES ('$precio','$cantidad','$nombre','$categorias','$descripcion')";


 }



  ?>