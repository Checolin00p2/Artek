<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php  include "indexLOGIN.php" ?>
	<?php  include "conexion.php" ?>
	<title>registro usuarios</title>
</head>
<body>
	          <br> 
            
             
              <h1>Iniciar Sesion</h1>
             
             
             <form action="iniciar_s.php" method="post">
             	<label for="correo"> Correo</label>
             	<input type="text" name="correo" id="correo" placeholder="correo" autocomplete="off" >
                <br> 
                <label for= "Contrasena"> Contraseña</label> 
                <input type="text" name ="contrasena" id = "contrasena" placeholder=" Contraseña" autocomplete="off">
                <br>
                 <br>
               <input type="submit" value="iniciar" >


           </form>
           </CENTER>
                
               <br>

	</body>
</html>