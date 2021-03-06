<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="images/favicon.png" />
			<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="js/javascript.js"></script>
	<title>Inmobiliaria Ochovo</title>
</head>
<noscript>
			Esta página necesita tener javascript activado para su correcto funcionamiento.
		</noscript>
		<script type="text/javascript">
			let contador=0;
			function siguiente()
			{
				if (contador<4) 
				{
					contador=contador+1;
					document.getElementById("foto_dashboard").src="images/foto_dashboard"+contador+".jpg";
					setTimeout("siguiente()", 4000);
				}
				else
				{
					document.getElementById("foto_dashboard").src="images/foto_dashboard1.jpg";
					contador=0;
					siguiente();
				}
			}
			function scroll()
			{
				 $("html,body").animate({scrollTop: $(codigo).offset().top}, 3000);
			}
		</script>
<body onload="siguiente()">
	<div id="zero">
		<div id="contenedor">
			<div id="botonera">
				<a href="index.php"><div id="logo"><center><img src="images/logo.jpg" alt="imagen del logo"></center></div></a>
				<div id="botones">
					<ul class="menu">
						
							<li><a href="nuestros_servicios.php">Nuestros Servicios</a>
							
							</li>
							<li><a href="">Venta</a>
								<ul>
									<li><a href="mostrarcasas.php?localidad=mostoles&tipo=venta">Mostoles</a></li>
									<li><a href="mostrarcasas.php?localidad=arroyomolinos&tipo=venta">Arroyomolinos</a></li>
									<li><a href="mostrarcasas.php?localidad=alcorcon&tipo=venta">Alcorcon</a></li>
									<li><a href="mostrarcasas.php?localidad=madrid&tipo=venta">Madrid</a></li>
								</ul>
							</li>
							<li><a href="">Alquiler</a>
								<ul>
									<li><a href="mostrarcasas.php?localidad=mostoles&tipo=alquiler">Mostoles</a></li>
									<li><a href="mostrarcasas.php?localidad=arroyomolinos&tipo=alquiler">Arroyomolinos</a></li>
									<li><a href="mostrarcasas.php?localidad=alcorcon&tipo=alquiler">Alcorcon</a></li>
									<li><a href="mostrarcasas.php?localidad=madrid&tipo=alquiler">Madrid</a></li>
								</ul>
							</li>
							<li><a href="#formulario">Contacto</a>

							</li>
					</ul>
				</div>
			</div>
			
			<?php
			$localidad=$_GET['localidad'];
			$tipo=$_GET['tipo'];
			echo '<div id="mostrar">';
			if ($localidad=="%") {
				echo '<div id="fondo"><img id="foto_dashboard" src="images/foto_dashboard.jpg" alt="imagen de inmobiliaria"></div>
				<div id="cajon">
				';
			} else {
				echo '
			<div id="fondo"><img id="foto_dashboard" src="images/foto_dashboard.jpg" alt="imagen de inmobiliaria"></div>
				<div id="cajon">
				';
			}
			
			
				if ($localidad=="%") {
					echo '<p id="grande">'.$tipo.' de viviendas</p>
					<p id="pequeño">'.$tipo.' de viviendas</p>';
				}
				elseif ($tipo=="%") {
				 	echo '<p id="grande">Alquiler y Venta de vivienda en '.$localidad.'</p>
					<p id="pequeño">Alquiler y Venta de viviendas en '.$localidad.'</p>';
				 } else {
					echo '<p id="grande">Alquiler y Venta de vivienda en '.$localidad.'</p>
					<p id="pequeño">Alquiler y Venta de viviendas en '.$localidad.'</p>';
				}
				
				echo '	
				</div>
			</div>
			<div id="mostrar_casas">
				';
					include ('includes/conexion.php');
					$acentos=$enlace->query("SET NAMES 'utf8'");
					$query= "SELECT * FROM `vivienda` WHERE `localidad` LIKE '".$localidad."' AND `tipo` LIKE '".$tipo."'";
					if ($result=mysqli_query($enlace,$query)) {
					while ($fila =mysqli_fetch_array($result)){
					echo "<div class='casa'>";	
					echo "<div id='imagen3d'>";
					echo "<div class='imagen'><a href='mostraruno.php?id=".$fila['id']."'><img src='images/".$fila['foto']."' width='100%'/></a></div>";
					echo "<a href='mostraruno.php?id=".$fila['id']."'><div class='lado_atras'><p>Más Detalles</p></div></a>";
					echo "</div>";
					echo "<div id='contenedorcito'>";
					echo "<div class='nombre'>".$fila['nombre']."</div>";
					echo "<div class='localidad'>".$fila['localidad']."</div>";
					echo "<div class='text'><p>Habitaciones</p></div>
					<div class='text'><p>Baños</p></div>
					<div class='text'><p>Área</p></div>
					";
					echo "<div class='texto'>".$fila['habitaciones']."</div>";
					echo "<div class='texto'>".$fila['baños']."</div>";
					echo "<div class='texto'>".$fila['metros']."m²</div>";
					if ($fila['tipo']=="alquiler") {
						echo "<div class='precio'>".$fila['precio']." € al mes</div>";
					} else {
						echo "<div class='precio'>".$fila['precio']." €</div>";
					}
					echo "</div>";
					echo "</div>";
					}
				}
				echo '</div>
			</div>
			';
			?>
			
			<div id="localidades">
				<a href="mostrarcasas.php?localidad=mostoles&tipo=%"><div class="localidades_div" id="mostoles"><span ><p>Mostoles</p></span></div></a>
				<a href="mostrarcasas.php?localidad=arroyomolinos&tipo=%"><div class="localidades_div" id="arroyo"><span ><p>Arroyomolinos</p></span></div></a>
				<a href="mostrarcasas.php?localidad=alcorcon&tipo=%"><div class="localidades_div" id="alcorcon"><span ><p>Alcorcon</p></span></div></a>
				<a href="mostrarcasas.php?localidad=madrid&tipo=%"><div class="localidades_div" id="madrid"><span ><p>Madrid</p></span></div></a>
			</div>
			<div id="formulario">
				<span id="texto_formulario">
					<p><strong>¿Podemos ayudarle?</strong> Póngase en contacto con nosotros.</p>
				</span>
				<div id="posibles_formularios">
				<?php 
				if(isset($_SESSION['nombre']))
				{
					echo "<div id='formulario_sesion'>";
					echo "<p>Has iniciado sesion: ".$_SESSION['nombre']."</p>";
					echo "<form action='' method='POST' enctype='multipart/form-data' >
						<textarea id='comentario' name='comentario' cols='108' rows='5' placeholder='Comentario*'></textarea>
						<center><input type='submit' value='Enviar' id='boton' name='enviarcomentario' size='20' /></center>
					</form>";
					echo "<a id='volver_crear' href='cerrar.php'>Cerrar sesion</a>";
					echo "</div>";
				}
				else
				{
				include "includes/conexion.php";
				$acentos=$enlace->query("SET NAMES 'utf8'");
				if (isset($_GET['peticion'])) {
					if ($_GET['peticion']=="crear") {
						echo '
						<div id=formulario_crear>
						<form action="" method="post" enctype="multipart/form-data" >
					<input type="text" id="usuario" name="usuario" size="50" maxlength="50" placeholder="Nombre usuario*"/>
					<br></br>
					<input type="text" id="mail" name="mail" size="50" maxlength="50" placeholder="Email*"/>
					<br></br>
					<input type="password" id="passwd" name="password" size="50" maxlength="50" placeholder="Password*"/>
					<br></br>
					<input type="checkbox" id="casilla" name="cas"><label for="casilla">Acepto la politica de privacidad </label><br/><br/>
					<center><input type="submit" value="Registrar" id="boton" name="enviarusuario" size="20" /></center>
					</form>
					</div>
			<a id="volver_crear" href="index.php">Volver</a>
			';
				if (isset($_POST['enviarusuario'])) {
				$usuario=$_POST['usuario'];
				$password=$_POST['password'];
				$mail=$_POST['mail'];
				$query="SELECT usuario,password FROM usuario WHERE usuario='$usuario'";
				if (strlen($usuario)==0 || strlen($password)==0) {
					echo "<script>alert('El usuario o la contraseña estan vacios. Rellenelos')</script>";
				}
				else if (strlen($password)<6) {
					echo "Por motivos de seguridad la contraseña debe tener mas de 6 caracteres";
				}
				else
				{
				$resultado=mysqli_query($enlace,$query);
				$filas=mysqli_num_rows($resultado);
				if ($filas>0) {
					echo "<script>alert('El usuario ya existe')</script>";
				}
				else
				{
					$query2="INSERT INTO usuario(usuario,password,mail) VALUES('$usuario','$password','$mail')";
					if (mysqli_query($enlace,$query2)) {
					echo "<p class='centrarInfo'>Se ha insertado su usuario correctamente en la BBDD</p>";
					echo "<script>window.location='index.php'</script>";
					}
				else{
					echo "<p>Hubo un problema</p>".mysqli_error($enlace);
				}
				}
				
				}	
				
			}
					}
				else if ($_GET['peticion']=="ingresar") {
					echo '
					<div id="formulario_ingresar">
					<form action="comprobar.php" method="POST">
					<input type="text" id="usuario" name="nombre" size="50" maxlength="50" placeholder="Nombre usuario*" required/>
					<br></br>
					<input type="password" id="passwd" name="passwd" size="50" maxlength="50" placeholder="Password*"/>
					<br></br>
					<center><input type="submit" value="Enviar" id="boton" name="enviarusuario" size="20"/></center>
					</form>
					</div>';
					echo "<a id='volver_ingresar' href='index.php'>Volver</a>";
				}
				}
				else
				{
				echo "<div id='div_formulari0_2'>
						<a id='crear' href='index.php?peticion=crear'><span>Crear Usuario</span></a>
						
						<a id='ingresar' href='index.php?peticion=ingresar'><span>Ingresar Usuario</span></a>
					</div>";
				}
			}
			
				?>
				</div>
			</div>
			
			<div id="redes">
				<div id="redes_contenedor">
					<a href=""><img src="images/facebook.png" alt="facebook" ></a>
					<a href=""><img src="images/whatsapp.png" alt="whatsapp" ></a>
					<a href=""><img src="images/instagram.png" alt="instagram" ></a>
					<a href=""><img src="images/youtube.png" alt="youtube" ></a>
				</div>
			</div>
		</div>
	</div>

   
</body> 
</html>