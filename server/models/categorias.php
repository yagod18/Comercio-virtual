<?php
function mostrar_categorias() 
{
     
    $conection = new Mysqli("localhost", "root", "", "ecommerce");

    $query = $conection->query("SELECT * FROM categorias");

    //mysqli_close($conection);
    $result = $query->fetch_all(1);
    return json_encode($result);
}