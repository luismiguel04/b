<?php
        include 'menu2.php';
        //$menu = new BarraMenu();
        $menu = new menu();
        $menu ->barraMenu();


      

     ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Embarques</title>


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
<body  >

    <br>
     <div class="contenedor text-right" >
          <a href="formulariomostrar.php" > 
           <input id="registrar" class="btn btn-success" btn-lg" type="button" value="Regresar"/></a>
          </div>

                
  <div class="container-fluid">
            <div class="page-header"style="background-color:lightskyblue;" >
                <h3 style="text-align: center "><p>Registro de embarque</p></h3>
               
          
</div>

<form id="registronaviera" class="form-horizontal" role="form" action="embarqueregistrosql.php" method="post">

                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>
                      <div class="form-group">

                     
                        <label for="firstname" class="col-md-3 control-label">Cliente</label>
                        <div class="col-md-9">

                            <select name="cliente">
                                <option value="0">seleccione</option>
                                 <?php

                         $pdo= new mysqli('localhost','usuario','123','aroundtheworld',3306);
                         $pdo->set_charset("utf8");
                         $query=('select * from cliente');
                         $resultado = mysqli_query($pdo,$query);
                         while ($mostrar=mysqli_fetch_array($resultado)){
                            echo'<option value="'.$mostrar[codcliente].'">'.$mostrar[nombre].'</option>';}
                             ?>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Cantidad</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="cantidad">
                        </div>
                    </div>


                     <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Naviera</label>
                        <div class="col-md-9">
                            <select name="naviera">
                                <option value="0">seleccione</option>
                                 <?php

                         $pdo= new mysqli('localhost','usuario','123','aroundtheworld',3306);
                         $pdo->set_charset("utf8");
                         $query=('select codnaviera from naviera');
                         $resultado = mysqli_query($pdo,$query);
                         while ($mostrar=mysqli_fetch_array($resultado)){
                            echo'<option value="'.$mostrar[codnaviera].'">'.$mostrar[codnaviera].'</option>';}
                             ?>

                            </select>
                          </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Barco</label>
                        <div class="col-md-9">
                            <select name="barco">
                                <option value="0">seleccione</option>
                                 <?php

                         $pdo= new mysqli('localhost','usuario','123','aroundtheworld',3306);
                         $pdo->set_charset("utf8");
                         $query=('select codbarco from barco');
                         $resultado = mysqli_query($pdo,$query);
                         while ($mostrar=mysqli_fetch_array($resultado)){
                            echo'<option value="'.$mostrar[codbarco].'">'.$mostrar[codbarco].'</option>';}
                             ?>

                            </select>
                          </div>
                    </div>


                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Contenedor</label>
                        <div class="col-md-9">
                            <select name="contenedor">
                                <option value="0">seleccione</option>
                                 <?php

                         $pdo= new mysqli('localhost','usuario','123','aroundtheworld',3306);
                         $pdo->set_charset("utf8");
                         $query=('select numero from contenedor');
                         $resultado = mysqli_query($pdo,$query);
                         while ($mostrar=mysqli_fetch_array($resultado)){
                            echo'<option value="'.$mostrar[numero].'">'.$mostrar[numero].'</option>';}
                             ?>

                            </select>
                          </div>
                    </div>


                     <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Puerto de salida</label>
                        <div class="col-md-9">
                            <select name="puertosalida">
                                <option value="0">seleccione</option>
                                 <?php

                         $pdo= new mysqli('localhost','usuario','123','aroundtheworld',3306);
                         $pdo->set_charset("utf8");
                         $query=('select * from puerto');
                         $resultado = mysqli_query($pdo,$query);
                         while ($mostrar=mysqli_fetch_array($resultado)){
                            echo'<option value="'.$mostrar[codpuerto].'">'.$mostrar[nombre].'</option>';}
                             ?>

                            </select>
                          </div>
                    </div>


                     <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Puerto de llegada</label>
                        <div class="col-md-9">
                            <select name="puertollegada">
                                <option value="0">seleccione</option>
                                 <?php

                         $pdo= new mysqli('localhost','usuario','123','aroundtheworld',3306);
                         $pdo->set_charset("utf8");
                         $query=('select * from puerto');
                         $resultado = mysqli_query($pdo,$query);
                         while ($mostrar=mysqli_fetch_array($resultado)){
                            echo'<option value="'.$mostrar[codpuerto].'">'.$mostrar[nombre].'</option>';}
                             ?>

                            </select>
                          </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Fecha de salida</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="fechasalida">
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Fecha de llegada</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="fechallegada">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Estatus</label>
                        <div class="col-md-9">
                            <select name ="estatus">
                            <option value="pendiente">Pendiete</option>
                            <option value="En proceso">En proceso</option>
                            <option value="Entregado"> Entregado</option>
                                
                            </select>

                        </div>
                    </div>
                     <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Comentarios</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="comentarios" placeholder="comentarios">
                        </div>
                    </div>
              
                    
                  
                    <div class="form-group">    
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="submit" class="btn btn-info" name="usuarioAlta"><i class="icon-hand-right"></i> &nbsp Registrar</button>

                        </div>
                    </div>

                    <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">



                    </div>



                </form>


</div>
</body>
</html>
