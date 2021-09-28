<?php
//Utilizamos un metodo GET para traer todos los productos.
router("GET", "/login", function(){
    include_once("./models/login.php");
    echo mostrar_login();

});
