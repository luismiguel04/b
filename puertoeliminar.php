<?php
	$codigo = $_POST['codigo'];



$tipoBase = 'mysql';
 $host = 'localhost';
  $database = 'aroundtheworld';
$user = 'usuario';
 $password = '123';

	
		
		

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


try {

$pdo= new mysqli($host,$user,$password,'aroundtheworld',3306);
$pdo->set_charset("utf8");

// echo "Connectado exitosamente";
} catch (PDOException $error) {
  echo 'Connection error: ' . $error->getMessage();
}

 try {


        $query=("delete from puerto where codpuerto ='$codigo'");
       $resultado = mysqli_query($pdo,$query);
       echo '<script> alert ("Puerto eliminado exitosamente.")</script>';
       echo '<script>location.href="puertos.php"</script>';



       }catch  ( Exception  $er){
  echo '<script> alert ("El puerto no puede eliminarse ya que se encuentra en uso")</script> ';
  echo '<script>location.href="puertos.php"</script>';

}		




?>