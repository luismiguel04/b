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
  <title>Reportes</title>
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

                
  <div class="container-fluid">
            <div class="page-header"style="background-color:lightskyblue;" >
                <h3 style="text-align: center "><p>Reporte de embarques por estatus</p></h3>
               
          </div>
          <form  action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
              
        

          <div class="form-group">
                          <div class="col-md-offset-1 col-md-9">
                            
                            <select name ="estatus">
                            <option value="0">seleccione</option>
                            <option value="pendiente">Pendietes</option>
                            <option value="En proceso">En proceso</option>
                            <option value="Entregado"> Entregados</option>
                                
                            </select>
                        </div>
                    
                      
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-5">
                            <button id="btn-signup" type="submit" class="btn btn-info" name="reporte"><i class="icon-hand-right"></i> &nbsp Buscar</button>

                    </div>
                </div>


            </form>
          <br>
          <br>






             <!--tabla de consulta-->
            <div id="respuestaFiltro">
                <table  class="table" cellspacing="0" width="100%">
                    <thead>

                        <tr >
                            <th>Referencia</th>
                            <th>Cliente</th>
                            <th>Cantidad</th> 
                            <th>Naviera</th>
                            <th>Puerto de salida</th>
                            <th>Puerto de llegada</th>
                            <th>Fecha de salida</th>
                            <th>Fecha de llegada</th>
                            <th>Estatus</th>
                            <th>Comentarios</th>
                            

                        </tr>
                    </thead>
  
  <?php

if (isset($_POST['reporte'])){
            $fo=$_POST['estatus'];
           
         

  }else{
    $fo="en proceso";
  


  }
  

  try {
$pdo= new mysqli('localhost','usuario','123','aroundtheworld',3306);
$pdo->set_charset("utf8");


} catch (PDOException $error) {
  echo 'Connection error: ' . $error->getMessage();
}


 
            

        


$query=("CALL reporteestatus('$fo')");




$resultado = mysqli_query($pdo,$query);

?>
<br>
<br>
<h3 style="text-align: center"> <?php echo "Consulta de embarques $fo";?></h3>

<?php

while ($mostrar=mysqli_fetch_array ($resultado)){

            ?>





            <tr>
               <td><?php echo $mostrar['referencia']?></td> 
               <td><?php echo $mostrar['cliente']?></td>
               <td><?php echo $mostrar['cantidad']?></td>        
               <td><?php echo $mostrar['naviera']?></td>
               <td><?php echo $mostrar['puertollegada']?></td>
               <td><?php echo $mostrar['puertodestino']?></td>
               <td><?php echo $mostrar['fechasalida']?></td>
               <td><?php echo $mostrar['fechallegada']?></td>
               <td><?php echo $mostrar['estatus']?></td>
               <td><?php echo $mostrar['comentarios']?></td>

            </tr>
            <?php
               }
             ?>
                    <tbody> 
                    </tbody>
                </table>
            </div>
             <!--tabla de consulta-->

            <!-- <a href="index.php" class="btn btn-default">Salir</a> -->
        </div>




</body>
</html>


