<?php
	$codigo = $_POST['codigo'];
	$nombre= $_POST['nombre'];
	$capacidad = $_POST['capacidad'];
	$espacio = $_POST['espacio'];


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

        $query=("update barco set codbarco='$codigo',nombre='$nombre',capacidad='$capacidad',espacio='$espacio' where codbarco ='$codigo'");

$resultado = mysqli_query($pdo,$query);		

echo '<script> alert ("Barco modificado exitosamente.")</script>';
echo '<script>location.href="barcos.php"</script>';


?>