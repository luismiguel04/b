<?php
class menu {
    function barraMenu() {
       ?> 


  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  

   <!--Main Stylesheet File--> 
  <link href="css/style.css" rel="stylesheet">

  


<body data-spy="scroll" data-offset="0" data-target="#navigation">

  <!-- Fixed navbar -->
  <div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand smothscroll" href="#home"><b>Around the world</b></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
         
          <li  ><a href="formulariomostrar.php">Embarques</a> </li>
          <li  ><a href= "clientes.php" >Clientes</a></li>
          <li  ><a href="navieras.php" >Navieras</a></li>
          <li  ><a href="contenedores.php" >Contenedores</a></li>
          <li  ><a href="puertos.php" >Puertos</a></li>
          <li  ><a href="barcos.php" >Barcos</a></li>
          <li  ><a href="reportesv.php" >Reporte por fecha</a></li>
          <li  ><a href="reportesporestatus.php" >Reporte por estatus</a></li>
        
           <li  ><a href="index.php" >Salir</a></li>

        </ul>
      

</div>


</div>
      <!--/.nav-collapse -->  
    </div>
  </div>
   <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
<?php           
    }

}
?>
