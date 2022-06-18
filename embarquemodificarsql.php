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

  

         $query=("update embarque set rfc=$'rfc',nombre =$'nombre',direccion=$'direccion',correo=$'correo',tel=$'telefono',contacto1=$'contacto',contacto2=$'contacto2' where referencia=$'')");

$resultado = mysqli_query($pdo,$query);

echo '<script> alert ("Embarque modificado exitosamente.")</script>';
echo '<script>location.href="clienteregistro.php"</script>';


	
?>