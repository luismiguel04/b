<?php
	$codigo = $_POST['codigo'];
	$nombre= $_POST['nombre'];
	$ciudad = $_POST['ciudad'];



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

        $query=("INSERT INTO puerto(codpuerto,nombre,ciudad) VALUES ('$codigo','$nombre','$ciudad')");

$resultado = mysqli_query($pdo,$query);

echo '<script> alert ("Puerto registrado exitosamente.")</script>';
echo '<script>location.href="puertoregistro.php"</script>';






	
?>