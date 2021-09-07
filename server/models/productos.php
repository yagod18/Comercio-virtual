<?php
function mostrar_productos() {
    return json_encode([
        [
            "nombre"=> "Coca cola", 
            "precio" => 180, 
            "cantidad"=>10
        ],
        [
            "nombre"=> "La Gotita", 
            "precio" => 150, 
            "cantidad"=>5 
        ]
    ]    
    );

}
