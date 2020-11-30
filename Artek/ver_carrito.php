<!DOCTYPE html>
<html>
<head>
	<title>Contenido Carrito</title>
    <?php  include "index.php";
            include "carrito.php";
    ?>
</head>
<body>
	           <br> <br> <br><br>
	           <br>
             <center>

             <?php if(empty(!$_SESSION['carrito'])){ ?>
             	<table border="1">
             		<thead>
             			<tr>
             				<th colspan="9">LISTA Items</th>
             			</tr>
                 	</thead>

             			<tr>
                             <td>Modelo</td>
                            <td>Cantidad </td>
                            <td>color</td>
                            <td>Genero</td>
                            <td>Talla</td>
                            <td>Logo</td>
                            <td>Eliminar</td>

                         </tr>
                         <?php foreach($_SESSION['carrito'] as $indice => $producto){ ?>
                          <tr>
                              <td class="text-center"><?php echo $producto['nombre_articulo'] ?>  </td>
                              <td class="text-center"><?php echo $producto['cantidad'] ?>  </td>
                              <td class="text-center"><?php echo $producto['color'] ?>  </td>
                              <td class="text-center"><?php echo $producto['genero'] ?>  </td>
                              <td class="text-center"><?php echo $producto['talla'] ?>  </td>
                              <td class="text-center"><?php echo $producto['logo'] ?>  </td>
                            
                            <td>
                                <form action="" method="post">
                                    <input id="articulos_id" type="hidden" name="articulos_id" value="<?php echo ($producto['articulos_id']); ?>">
                                <button type="submit" name="accion"  value="eliminar" > eliminar </button>
                                </form>
                                 
                            
                            </td>
                         </tr>   
                        
                            
                         <?php } ?>
                                        
                          
                 </table>
                        <?php }else{ ?>
                            <div class="alert">
                                No hay productos en el Carrito
                         <?php } ?>


                         <div >
                         <h3>Generar compra </h3>
                         <a href="hacer_compra.php"> <input type="button" value="compra"></a>

                         </div>
             </center>
</body>
</html>