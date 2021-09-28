<?php
   session_start();

   if(isset($_GET['cerrar_sesion'])){
       session_unset();
       session_destroy();
   }

   if(isset($_SESSION['rol'])){
       switch($_SESSION['rol']){
       case 1
           header('location: frontadmin.html');
       break;
           header('location: frontusuario.html');
       case 2
       break;

       default:

       }
       
   }


   if(isset($_POST['nom_usuario']) && isset($_POST['contrasena'])){
       $nom_usuario = $_POST['nom_usuario'];
       $contrasena = $_POST['contrasena'];
       $conection = new Mysqli("localhost", "root", "", "ecommerce");
       $query = $conection->connect()->prepare('SELECT * FROM usuarios WHERE nom_usuario = :nom_usuario AND contrasena = :contrasena');
       $query->execute(['nom_usuario' => $nom_usuario, 'contrasena' => $contrasena]);

       $row = $query->fetch(PDO::FETCH_NUM);
       if($row == true){
          //validar rol( nivel de usuario)
          $nivusuario = $row[7];
          $_SESSION['nivusuario'] = $nivusuario;

          switch($_SESSION['nivusuario']){
            case 1
                header('location: frontadmin.html');
            break;
                header('location: frontusuario.html');
            case 2
            break;
     
            default:
     
            }

       }else{
         //no existe el usuario
       }
   }




  // esto va para autentificar en cada pagina si estas logeado


  // session admin
  session_start();

  if(!isset($_SESSION['nivusuario'])){
      header('location: login.html');
  }else {
      if($_SESSION['rol'] != 1){
          header('location: login.php');
      }
  }


// session usuario
  session_start();

  if(!isset($_SESSION['nivusuario'])){
      header('location: login.html');
  }else {
      if($_SESSION['rol'] != 0){
          header('location: login.php');
      }
  }
?>