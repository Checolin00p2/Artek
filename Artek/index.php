<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link  rel="icon"   href="images/logo.jpg" type="image/png">
	<title>Artek</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">

</head>

<body>
	
	<header id="main-header">
		<a  href="index.php" ><img id="logo" src="images/logo.jpg" alt=""></a>
				<nav>
					<ul>
						<li><a href="verpedidos.php">Pedidos</a></li>
						<li><a href="verclientes.php">Clientes</a></li>
						<li>  <?php
session_start();
if (isset($_SESSION['id_cliente'])) {
	echo "";
}else{
  header("Location: login_f.php");
	exit();
}
echo "
<a href='cerrar.php'>SALIR</a>";
?> </li>
										
					</ul>
				</nav>
  	</header><!-- / #main-header -->
	
		
	
</body>
</html>