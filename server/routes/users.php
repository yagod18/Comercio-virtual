<?php
//Utilizamos un metodo GET para traer todos los productos.
router("POST", "/users", function(){
    //include_once("./models/productos.php");
    echo json_encode(["nombre"=>"Gaston"]);

});