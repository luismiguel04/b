<?php
	$codigo = $_POST['referencia'];



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


        $query=("delete from embarque where referencia ='$codigo'");
       $resultado = mysqli_query($pdo,$query);
        echo '<script> alert ("Embarque eliminado exitosamente.")</script>';
       echo '<script>location.href="formulariomostrar.php"</script>';



       }catch  ( Exception  $er){
  echo '<script> alert ("El embarque no puede eliminarse ya que se encuentra en uso")</script> ';
  echo '<script>location.href="formulariomostrar.php"</script>';

}   




?>