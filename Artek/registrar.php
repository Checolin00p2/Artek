<?php 
include("conexion.php");


$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
   
   $log= $conection->query("SELECT correo FROM cliente where correo = '$correo' ");
   $rows= $log->fetch_assoc();

   if ($rows['correo'] == $correo):
   		echo "este usuario ya existe";
    else:      
        $query_insertar = mysqli_query($conection, "INSERT INTO cliente (nombre,telefono,correo,empresa,contra) VALUES ('$nombre','$telefono','$correo','$empresa','$contrasena')");                                                         
                     if ($query_insertar) {
                     	echo "insertado correctamente";
                     	echo $rows['correo'];
                     }
     endif;   

 ?>