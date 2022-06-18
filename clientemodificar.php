<?php
        include 'menu2.php';
        //$menu = new BarraMenu();
        $menu = new menu();
        $menu ->barraMenu();


        $cod =$_POST["codigo"];
        


      

     ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Barcos</title>
<link rel="stylesheet" href="css/bootstrap.css"><!-- Editado para el menu -->
        <!--jquery-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!--bootstrap-js-->
        <script src="js/bootstrap.min.js"></script>
        <!--Datatables-->
       <!-- <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css"/> Editado y menu -->
        <script type="text/javascript" src="js/jquery.dataTables.js"></script><!-- Editado -->
        <!--Datatables responsive-->
        <link rel="stylesheet" type="text/css" href="css/responsive.dataTables.min.css"/>
        <script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
        <!--Datatables Buttons
        <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.css"/> Editado y menu -->
        <script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="js/buttons.html5.min.js"></script>





</head>
<body >

    <br>
     <div class="contenedor text-right" >
          <a href="clientes.php" > 
           <input id="registrar" class="btn btn-success" btn-lg" type="button" value="Regresar"/></a>
          
             </div>

                
  <div class="container-fluid">
            <div class="page-header"style="background-color:lightskyblue;" >
                <h3 style="text-align: center "><p>Modificación de clietes</p></h3>
               
          </div>
             <!--tabla de consulta-->


<?php

  
$pdo= new mysqli('localhost','usuario','123','aroundtheworld',3306);
$pdo->set_charset("utf8");


$query=('select * from cliente where codcliente ="'.$cod.'"');


$resultado = mysqli_query($pdo,$query);
while ($mostrar=mysqli_fetch_array($resultado)){


            ?>


<form id="registronaviera" class="form-horizontal" role="form" action="clientemodificarsql.php" method="post">

                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>



                    <div class="form-group">
                        <label for="usuario" class="col-md-3 control-label">Codigo</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="codigo" placeholder="Codigo del cliente" value="<?php echo $mostrar['codcliente'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">RFC</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="rfc" placeholder="Nombre del barco"value="<?php echo $mostrar['rfc']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Nombre</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del cliente" value="<?php echo $mostrar['nombre']?>">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Dirección</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="direccion" placeholder="Espacio del barco" value="<?php echo $mostrar['direccion']?>">
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Correo</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="correo" placeholder="Espacio del barco" value="<?php echo $mostrar['correo']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Telefono</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="tel" placeholder="Espacio del barco" value="<?php echo $mostrar['tel']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Contacto1</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="contacto1" placeholder="Espacio del barco" value="<?php echo $mostrar['contacto1']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Contacto2</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="contacto2" placeholder="Espacio del barco" value="<?php echo $mostrar['contacto2']?>">
                        </div>
                    </div>




                    <?php
                       }
                    ?>
              
                  
                    <div class="form-group">    
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="submit" class="btn btn-info" name="usuarioAlta"><i class="icon-hand-right"></i> &nbsp Modificar</button>

                        </div>
                    </div>

                    <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">



                    </div>



                </form>


</body>
</html>
