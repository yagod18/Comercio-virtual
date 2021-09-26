<?php
//Utilizamos un metodo GET para traer todos los productos.
router("GET", "/categorias", function(){
    include_once("./models/categorias.php");
    echo mostrar_categorias();

});