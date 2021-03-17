<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Pagina 2</title>
</head>
<body>
<?php
include "includes/conexion.php";
$acentos=$enlace->query("SET NAMES 'utf8'");
$nombre= $_POST['nombre'];
$passwd= $_POST['passwd'];
$query="SELECT usuario,password FROM `usuario` WHERE usuario = '$nombre' && password='$passwd'";
$result=mysqli_query ($enlace,$query);
$count=mysqli_num_rows($result);
if ($count>0) {
$_SESSION['nombre'] = $_POST['nombre'];
echo "<script>window.location.href = 'index.php';</script>";
}
else{
echo "<p>Su usuario o contraseña son incorrectos</p>".mysqli_error($enlace);
echo "<script>window.location.href = 'index.php?peticion=ingresar';</script>";
}				
?>
</body>
</html>