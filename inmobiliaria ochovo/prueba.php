<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
			<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="js/javascript.js"></script>
	<title>Document</title>
</head>
<div id="formulario">
				<span>
					<p><strong>¿Podemos ayudarle?</strong> Póngase en contacto con nosotros.</p>
				</span>
				<?php 
				if(isset($_SESSION['nombre']))
				{
					echo "<p>Has iniciado sesion: ".$_SESSION['nombre']."</p>";
					echo "<p><a href='cerrar.php'>Cerrar sesion</a></p>";

				}
				else
				{
				include "includes/conexion.php";
				$acentos=$enlace->query("SET NAMES 'utf8'");
				if (isset($_GET['peticion'])) {
					if ($_GET['peticion']=="crear") {
						echo '<form action="" method="post" enctype="multipart/form-data">
				<fieldset>
					<label for="usuario" class="usuario">Ingrese usuario:</label>
					<input type="text" id="usuario" name="usuario"/>
					<br></br>
					<lavel for="passwd" class="passwd">Ingrese la contraseña:</lavel>
					<input type="password" id="passwd" name="password"/>
					<br></br>
					<input type="submit" value="Registrar" id="boton" name="enviarusuario"/>
				</fieldset>
			</form>';
				if (isset($_POST['enviarusuario'])) {
				$usuario=$_POST['usuario'];
				$password=$_POST['password'];
				$query="SELECT usuario,password FROM usuario WHERE usuario='$usuario'";
				if (strlen($usuario)==0 || strlen($password)==0) {
					echo "El usuario o la contraseña estan vacios. Rellenelos";
				}
				else if (strlen($password)<6) {
					echo "Por motivos de seguridad la contraseña debe tener mas de 6 caracteres";
				}
				else
				{
				$resultado=mysqli_query($enlace,$query);
				$filas=mysqli_num_rows($resultado);
				if ($filas>0) {
					echo 'El usuario ya existe<br/>';
				}
				else
				{
					$query2="INSERT INTO usuario(usuario,password) VALUES('$usuario','$password')";
					if (mysqli_query($enlace,$query2)) {
					echo "<p class='centrarInfo'>Se ha insertado su usuario correctamente en la BBDD</p>";
					echo "<script>window.location='prueba.php'</script>";
					}
				else{
					echo "<p>Hubo un problema</p>".mysqli_error($enlace);
				}
				}
				
				}	
				
			}
					}
				else if ($_GET['peticion']=="ingresar") {
					echo '<form action="comprobar.php" method="POST">
					<p>Nombre:<input type="text" placeholder="Tu
					Nombre!" name="nombre" required/></p><br />
					<p>Contraseña:<input type="text" placeholder="Tu
					Contraseña" name="passwd" required/></p><br />
					<input type="submit" value="Enviar" />
					</form>';
				}
				}
				else
				{
				echo "<div>
						<a href='prueba.php?peticion=crear'>Crear Usuario</a>
						<br></br>
						<a href='prueba.php?peticion=ingresar'>Ingresar Usuario</a>
					</div>";
				}
			}
			
				?>
			</div>
			</body> 
</html>