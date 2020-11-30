<?php
include "conexion.php";
session_start();

$mensaje = ""; 


if(isset($_POST['accion'])){

    switch($_POST['accion']){

        case 'agregar':
            $id_cliente   = $_SESSION['id_cliente'];
            $articulos_id = $_POST['articulos_id'];
            $cantidad    = $_POST['cantidad'];
            $color       = $_POST['color'];
            $genero      = $_POST['genero'];
            $talla       = $_POST['talla'];
            $logo        = $_POST['logo'];
            $nombre_articulo = $_POST['nombre_articulo'];

            if(!isset($_SESSION['carrito'])){
                $producto = array(
                    'id_cliente'   => $id_cliente,
                    'articulos_id' => $articulos_id,
                    'cantidad' => $cantidad,
                    'color'    => $color,
                    'genero'   => $genero, 
                    'talla'    => $talla,
                    'logo'     => $logo,
                    'nombre_articulo' => $nombre_articulo,
                );
                $_SESSION['carrito'][0]=$producto;

            }else{
                $numeroP=count($_SESSION['carrito']);
                $producto = array(
                    'id_cliente'   => $id_cliente,
                    'articulos_id' => $articulos_id,
                    'cantidad' => $cantidad,
                    'color'    => $color,
                    'genero'   => $genero, 
                    'talla'    => $talla,
                    'logo'     => $logo,
                    'nombre_articulo' => $nombre_articulo,
                );
                $_SESSION['carrito'][$numeroP]=$producto;
            }
            $mensaje = print_r($_SESSION,true);
    
        break;

        case "eliminar":
            $articulos_id = $_POST['articulos_id'];
            foreach($_SESSION['carrito'] as $indice => $producto){
                if($producto['articulos_id'] ==$articulos_id){
                    unset($_SESSION['carrito'][$indice]);
                }
                

            }
        break;

    }

}

?>