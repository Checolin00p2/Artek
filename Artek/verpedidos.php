<!DOCTYPE html>
<html>
<head>
	<title>Tabla pedidos</title>
	<?php  include "index.php" ?>
</head>
<body>
	           <br> <br> <br><br>
	           <br>
             <center>
             	<table border="1">
             		<thead>
             			<tr>
             				<th colspan="7">Lista de compras</th>
             			</tr>
                 	</thead>

             			<tr>
                         <td>ID_compra </td>
                            <td>Cliente</td>
                            <td>Correo</td>    
                            <td>Articulo</td>
                            <td>Cantidad</td>
                            <td>Color</td>
                            <td>Genero</td>
                            <td>Talla</td>
                            <td>Logo</td>

             			</tr>
                        <?php 
                            include("conexion.php");

                            $query= mysqli_query($conection,"SELECT Cli.nombre , Cli.correo,
                            CL.id_compra, CL.cantidad, CL.color, CL.genero, CL.talla, CL.logo,
                            Ar.nombre_articulo
                            FROM cliente Cli
                            INNER JOIN compra_lista CL ON Cli.id_cliente = CL.id_compra
                            INNER JOIN articulo Ar on Ar.articulos_id = CL.articulos_id
                            ;"); 

                            while ($row=$query->fetch_assoc()) {
                              ?>
                          <tr>
                          <td> <?php echo $row['id_compra']; ?></td>
                            <td> <?php echo $row['nombre']; ?></td>
                            <td> <?php echo $row['correo']; ?></td>
                            <td> <?php echo $row['nombre_articulo']; ?></td>
                            <td> <?php echo $row['cantidad']; ?></td>
                            <td> <?php echo $row['color']; ?></td>
                            <td> <?php echo $row['genero']; ?></td>
                            <td> <?php echo $row['talla']; ?></td>
                            <td> <?php echo $row['logo']; ?></td>

                            
         

                          </tr>   
                         


                        <?php                             
                          }
                              

                         
                        ?>

             	</table>
             </center>
</body>
</html>