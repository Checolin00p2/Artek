<!DOCTYPE html>
<html>
<head>
	<title>TABLA USUARIOS</title>
	<?php  include "index.php" ?>
</head>
<body>
	           <br> <br> <br><br>
	           <br>
             <center>
             	<table border="1">
             		<thead>
             			<tr>
             				<th colspan="7">LISTA DE CLIENTES</th>
             			</tr>
                 	</thead>

             			<tr>
             				<td>Nombre</td>
                            
                            <td>Empresa </td>
                            <td>Telefono</td>
                            <td>Correo</td>

             			</tr>
                        <?php 
                            include("conexion.php");

                            $query= mysqli_query($conection,"SELECT * FROM cliente "); 

                            while ($row=$query->fetch_assoc()) {
                              ?>
                          <tr>
                          	<td> <?php echo $row['nombre']; ?></td>
                            <td> <?php echo $row['empresa']; ?></td>
                            <td> <?php echo $row['telefono']; ?></td>
                            <td> <?php echo $row['correo']; ?></td>

                            
         

                          </tr>   
                         


                        <?php                             
                          }
                              

                         
                        ?>

             	</table>
             </center>
</body>
</html>