<?php
function mostrar_login() 
{


  if(isset($_POST['nom_usuario']) && isset($_POST['contrasena'])){
    $nom_usuario = $_POST['nom_usuario'];
    $contrasena = $_POST['contrasena'];
    $conection = new Mysqli("localhost", "root", "", "ecommerce");
    $query = $conection->connect()->prepare("SELECT * FROM usuarios where nom_usuario = '".$nombre."' and contrasena= '".$contrasena."'");
    $query->execute(['nom_usuario' => $nom_usuario, 'contrasena' => $contrasena]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if($row == true){
       //validar rol( nivel de usuario)
       $nivusuario = $row[7];
       $_SESSION['nivel_admin'] = $nivusuario;

       switch($_SESSION['nivel_admin']){
         case 1;
             header('location: front.html');
         break;
             header('location: front.html');
         case 2;
         break;
  
         default:
  
         }
        
    }else{


    };
};
};




     /*
    $conection = new Mysqli("localhost", "root", "", "ecommerce");

    $nombre=$_POST['nombreUsuario'];
    $contrasena=$_POST['contrasena'];
    

    $query = "SELECT * FROM usuarios where nom_usuario = '".$nombre."' and contrasena= '".$contrasena."'";
    
    

    $resultado = mysqli_query($conexion, $sql);  

    $row = mysqli_fetch_all($resultado);

    if ($row != null){
        session_start();
        $_SESSION['Usuario']=$row['nom_usuario'];
        header('Location:http://localhost/comercio-virtual/front.html');
    }else{
        echo "<script type='text/javascript'>
       alert('le erraste manco');
       window.location= 'http://localhost/comercio-virtual/login.html';
       </script>";
};

  //mysqli_close($conection);
  $result = $query->fetch_all(1);
  return json_encode($result);

} ;




*/
?>