<!DOCTYPE html = "es">
<html>
<head>
<meta charset="utf-8">
    <title>TABLA USUARIOS</title>
    <?php  include "index.php" ?>
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Artek</title>
        <?php include "config/scripts.php";
        	  INCLUDE "conexion.php"?>
</head>
<body>

	           <br> <br> <br><br>
	           <br>
             <center>
             <div class="row">
    <?php  
        $select = mysqli_query($conection,"SELECT Ar.nombre_articulo, Ar.imagen, Ar.articulos_id,
                                                  Car.marca, Car.precio, Car.color, Car.composicion
                                                  FROM articulo Ar
                                                  INNER JOIN arti_carac Car ON Ar.articulos_id = Car.articulos_id" );
        ?>
        
         
	    <?php while ($row=$select->fetch_assoc()) { ?>
        <div class = "col-3">
            <div class="card">
                <img class="card-img-top" src="<?php echo $row['imagen']; ?>"
                data-toggle="popover"
                data-trigger="hover"
                data-content="<?php echo $row['composicion'];?>"
                height="317px"
                >
                
                
                <div class="card-body">
                    <h6> <?php echo $row['nombre_articulo'] ?> </h6>
                    <h6> <?php echo $row['marca'] ?>  </h6>
                    <h6> <?php echo $row['precio'] ?>  </h6>
                    <h6> <?php echo $row['color'] ?>  </h6>
                    
                    <form action="formato_compra.php ?articulos_id=<?php echo $row['articulos_id']; ?>" method="post">
                    <button class="btn btn-primary" type = "submit"> 
                        Carrito </button>
                </div>
            </div>
        </div>
        <?php  }  ?>
    </div>



             </center>

             <script>
                 $(function () {
                    $('[data-toggle="popover"]').popover()
                    }); 
              </script>


</body>
</html>