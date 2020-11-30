<?php
session_start();
if (isset($_SESSION['id_cliente'])) {
	echo "";
}else{
  header("Location: login_f.php");
	exit();
}
echo "Bienvenido ".$_SESSION['id_cliente']."<br>
<a href='cerrar.php'>SALIR</a>";
?>