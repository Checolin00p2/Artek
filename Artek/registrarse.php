<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php  include "index.php" ?>
	<?php  include "conexion.php" ?>
	<title>registro usuarios</title>
</head>
<body>
	          <br> 
            
             
              <h1>registrarseO</h1>
             
             
             <form action="registrar.php" method="post">

             	<label for="nombre"> Nombre</label>
             	<input type="text" name="nombre" id="nombre" placeholder="Nombre" autocomplete="off" >
                <br> 
                <label for= "empresa"> empresa</label> 
                <input type="text" name ="empresa" id = "empresa" placeholder=" empresa" autocomplete="off">
                <br>
             	<label for="telefono"> Telefono</label>
             	<input type="text" name="telefono" id="telefono" placeholder="telefono" autocomplete="off">
                <br> 
                <label for="correo"> correo</label>
                <input type="email" name="correo" id="correo" placeholder="correo" autocomplete="off">
                <br>
                <label for= "contrasena"> contraseña</label>
                <input type="password" name ="contrasena" id = "contrasena" placeholder="contraseña" autocomplete="off"> 

                 <br>
               <input type="submit" value="registrar" >


           </form>
           </CENTER>
                
               <br>

	</body>
</html>