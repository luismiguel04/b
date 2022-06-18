<?php
	$numero = $_POST['numero'];
	$tipo= $_POST['tipo'];
	$capacidad = $_POST['capacidad'];



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

        $query=("update contenedor set numero='$numero',tipo='$tipo',capacidad='$capacidad' where numero ='$numero'");

$resultado = mysqli_query($pdo,$query);		

echo '<script> alert ("Contenedor modificado exitosamente.")</script>';
echo '<script>location.href="contenedores.php"</script>';


?>