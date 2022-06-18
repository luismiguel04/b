<?php
	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$contraseña= $_POST['password'];


$tipoBase = 'mysql';
 $host = 'localhost';
  $database = 'auto';
$user = 'usuario';
 $password = '123';

	
		
		

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


try {

$pdo= new mysqli($host,$user,$password,'aroundtheworld',3306);
$pdo->set_charset("utf8");

 echo "Connectado exitosamente";
} catch (PDOException $error) {
  echo 'Connection error: ' . $error->getMessage();
}

        $query=("INSERT INTO usuario(idusuario,nombre,correo,contrasena) VALUES ('$usuario','$nombre','$correo','$contraseña')");

$resultado = mysqli_query($pdo,$query);

echo '<script> alert ("Usuario registrado exitosamente.")</script>';
echo '<script>location.href="login.php"</script>';






	
?>