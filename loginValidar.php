<?php
include_once 'conexion.php';
$pdo = new Conexion();
session_start();
print_r($_POST);
//variables que pasamos del formulario de IndexLogin
$idusuario=$_POST['usuario'];
$contrasena=$_POST['password'];


//Conexion a base de datos
if($idusuario=='' || $contrasena==''){
    header('location: login.php');
}else {
    try{
        $query=$pdo->prepare("SELECT * FROM  usuario where idusuario='$idusuario'");
        $query->bindValue(':idusuario', $idusuario);
        $query->execute();
        $resultado=$query->fetchAll();

        if(!$resultado){
            echo '<script> alert ("El usuario o contraseña son incorrectos. Intente de nuevo.")</script>';
            echo '<script>location.href="login.php"</script>';
        }
        else{
           // echo '<script> alert ("usuario conectado.")</script>';
          // echo' <script>location.href="index.php"  </script>';

            foreach($resultado as $value) {
                echo "si existe el usuario";

                if ($contrasena== $value['contrasena']) {
                    $_SESSION['valido']=1;
                    $_SESSION['idusuario']=$value['idusuario'];
                    $_SESSION['nombre']=$value['nombre'];

                    $_SESSION['privilegios']=$value['privilegios'];

                    echo '<br>Nombre usuario '.$_SESSION['usuario'];
                    echo '<br>Privilegios '.$_SESSION['privilegios'];

                    if (isset($_SESSION['direccionURL'])) {
                        echo "<script>location.href='".$_SESSION['direccionURL']."'</script>";
                    }else{
                        header('location: formulariomostrar.php');
                    }

                }else{
                    echo '<script>alert("El usuario o contraseña son incorrectos.")</script>';
                    echo '<script>location.href="login.php"</script>';
                }
            }///Fin del foreach
        }


    }catch(PDOException $ex){
        echo 'Error: '.$ex->getMessage();
    }
    $pdo = null;

}
