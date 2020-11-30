<?php 
include("conexion.php");


$camisa = $_POST['camisa'];

   
$query_insert = mysqli_query($conection, "INSERT INTO season (imagen) VALUES ('$camisa')");

   if($query_insertl = true){
      echo "insertado";
   }else{
      echo "no insertados";
   }

?>