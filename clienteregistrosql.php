<?php
	
	$rfc= $_POST['rfc'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$correo = $_POST['correo'];
	$telefono= $_POST['telefono'];
	$contacto = $_POST['contacto'];
	$contacto2 = $_POST['contacto2'];


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

  

         $query=("INSERT INTO cliente (rfc,nombre,direccion,correo,tel,contacto1,contacto2) VALUES ('$rfc','$nombre','$direccion','$correo','$telefono','$contacto','$contacto2')");

$resultado = mysqli_query($pdo,$query);

echo '<script> alert ("Cliente registrado exitosamente.")</script>';
echo '<script>location.href="clienteregistro.php"</script>';






	
?>