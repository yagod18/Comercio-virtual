<?php
//Utilizamos un metodo GET para traer todos los productos.
router("GET", "/productos", function(){
    include_once("./models/productos.php");
    echo mostrar_productos();

});

