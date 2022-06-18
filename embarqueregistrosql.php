<?php
	
	$cliente= $_POST['cliente'];
	$cantidad = $_POST['cantidad'];
	$naviera = $_POST['naviera'];
	$barco = $_POST['barco'];
	$contenedor= $_POST['contenedor'];
	$puertosalida = $_POST['puertosalida'];
	$puertollegada = $_POST['puertollegada'];
	$fechasalida = $_POST['fechasalida'];
	$fechallegada= $_POST['fechallegada'];
	$estatus = $_POST['estatus'];
	$comentarios = $_POST['comentarios'];

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

        $query=("INSERT INTO embarque(cliente,cantidad,barco,naviera,contenedor,puertollegada,puertodestino,fechasalida,fechallegada,estatus,comentarios) VALUES ('$cliente','$cantidad','$barco','$naviera','$contenedor','$puertosalida','$puertollegada','$fechasalida','$fechallegada','$estatus','$comentarios')");

$resultado = mysqli_query($pdo,$query);

echo '<script> alert ("Embarque registrado exitosamente.")</script>';
echo '<script>location.href="embarqueregistro.php"</script>';






	
?>