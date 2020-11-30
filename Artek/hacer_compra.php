<?php
include"conexion.php";
include"carrito.php";


foreach($_SESSION['carrito'] as $indice => $producto){
 
 $cliente =  $producto['id_cliente'];
}
$comprar = mysqli_query($conection,"INSERT into compras (id_cliente,fecha_compra) values ('$cliente',CURRENT_TIMESTAMP())");

$select1 = mysqli_query($conection, "SELECT MAX(id_compra) from compras ");
while($ver = mysqli_fetch_array($select1)){
    echo $ver[0];
    $forkey = $ver[0];
}
foreach($_SESSION['carrito'] as $indice => $producto){

    $articulos_id = $producto['articulos_id'];
    $cantidad = $producto['cantidad'];
    $color = $producto['color'];
    $genero = $producto['genero'];
    $talla = $producto['talla'];
    $logo = $producto['logo'];

$comprarl = mysqli_query($conection,"INSERT into compra_lista (id_compra, articulos_id, cantidad, color, genero, talla, logo)
values ('$forkey', '$articulos_id', '$cantidad', ' $color', '$genero', '$talla', '$logo' )");

}











?>
