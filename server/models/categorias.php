<?php
function mostrar_categorias() 
{
     
    $conection = new Mysqli("localhost", "root", "", "ecommerce");

    $query = $conection->query("SELECT * FROM categorias ");
    // SELECT * FROM empleados INNER JOIN departamentos ON empleados.e_id = departamentos.d_id;

    //mysqli_close($conection);
    $result = $query->fetch_all(1);
    return json_encode($result);
}