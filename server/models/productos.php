<?php
function mostrar_productos() 
{
     
    $conection = new Mysqli("localhost", "root", "", "ecommerce");

    $query = $conection->query("SELECT * FROM productos WHERE estatus = 1 /*solo se muestran los productos con estatus 1 (que se pueden vender) */");

    //mysqli_close($conection);
    $result = $query->fetch_all(1);
    return json_encode($result);
}
