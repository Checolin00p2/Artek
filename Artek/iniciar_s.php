<?php
   include "conexion.php";

  $user= $_POST['correo'];
  $pass= $_POST['contrasena'];

  $log= $conection->query("SELECT nombre, id_cliente FROM cliente WHERE correo = '$user' AND contra =  '$pass'  ");
  $rows= $log->fetch_assoc();

  if($rows > 1){
      if($rows["id_cliente"] == 1){
        session_start();
    $_SESSION['id_cliente'] = $rows['id_cliente'];
        header("Location: index.php");
      }else{
        $_SESSION['id_cliente'] = $rows['id_cliente'];
          header("Location: index_usuario.php");
      }  
  }else{
      echo ("este usuario no existe");
  }
	
   


    


?>