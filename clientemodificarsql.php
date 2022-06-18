<?php
	$codigo = $_POST['codigo'];
	$rfc= $_POST['rfc'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$correo = $_POST['correo'];
	$tel = $_POST['tel'];
	$contacto1 = $_POST['contacto1'];
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

        $query=("update cliente set codcliente='$codigo', rfc='$rfc' , nombre='$nombre', direccion='$direccion', correo='$correo', tel='$tel', contacto1='$contacto1', contacto2='$contacto2' where codcliente ='$codigo'");

$resultado = mysqli_query($pdo,$query);		

echo '<script> alert ("Cliete modificado exitosamente.")</script>';
echo '<script>location.href="clientes.php"</script>';


?>