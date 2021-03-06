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

<body >
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
			
			<div id="contenedor_nuestros_servicios">
				<div id="texto_nuestros_servicios">
					<h1>Nuestros Servicios</h1>
					<p class="parrafo_nuestros_servicios"><strong>OCHOVO</strong> en su calidad de agencia inmobiliaria integral, se caracteriza por poner a disposici??n de sus clientes un amplio abanico de servicios exclusivos, destinados a cubrir todas sus necesidades en el proceso de compra o venta de un inmueble. Nuestros servicios cubren desde la b??squeda de la propiedad perfecta hasta las tareas de gesti??n administrativa posteriores a la firma del contrato.</p>
					<h3 class="titulo_nuestros_servicios">VALORACI??N INMOBILIARIA GRATUITA</h3>
					<p class="parrafo_nuestros_servicios">
					En OCHOVO INMOBILIARIA sabemos que disponer de un servicio de valoraci??n inmobiliaria es una gran ventaja para el propietario de un inmueble. S??lo as?? se puede obtener un valor ajustado a la realidad del mercado y esto se traduce en una venta r??pida y en las mejores condiciones.
					<br>
					Nuestra oficina, compuesta por profesionales con m??s de 15 a??os dedicados al sector inmobiliario, ha realizado un estudio de mercado previo de la zona, de sus caracter??sticas y peculiaridades, estudiando todos los aspectos de la oferta y demanda de la zona, con lo que la valoraci??n de su vivienda ser?? la acertada.
					</p>
					<h3 class="titulo_nuestros_servicios">ASESORAMIENTO PERSONALIZADO</h3>
					<p class="parrafo_nuestros_servicios">
					En OCHOVO INMOBILIARIA sabemos de la importancia de la calidad de nuestro servicio. Por lo que pondremos a su disposici??n a un Agente Inmobiliario que ser?? el encargado de mantenerles informados puntualmente de todo lo relativo a su vivienda.
					</p>
					<h3 class="titulo_nuestros_servicios">ASESORAMIENTO JUR??DICO Y FISCAL ADEM??S DE ASESORAMIENTO LEGAL Y CONTRACTUAL</h3>
					<p class="parrafo_nuestros_servicios">
					En OCHOVO INMOBILIARIA disponemos de un departamento especializado para cualquier tipo de duda en temas legales y econ??micos que se derivan de una compraventa. De esta manera, evitamos sustos innecesarios de ??ltima hora.
					</p>
					<h3 class="titulo_nuestros_servicios">FINANCIACI??N</h3>
					<p class="parrafo_nuestros_servicios">
					La mayor??a de compras inmobiliarias van asociadas a la b??squeda de la financiaci??n necesaria para su adquisici??n. En OCHOVO INMOBILIARIA, queremos que esa compra sea r??pida, sencilla y completa, por lo que ofrecemos a nuestros clientes un servicio integral que va m??s all?? de la b??squeda del piso de sus sue??os. A trav??s de nuestra empresa de intermediaci??n en servicios financieros de OCHOVO INMOBILIARIA, ayudamos al cliente a encontrar la mejor financiaci??n. Y es que OCHOVO INMOBILIARIA le asesorar??, sin compromiso, sobre la hipoteca que mejor se adapte a sus necesidades.	
					</p>
					<h3 class="titulo_nuestros_servicios">BANCO DE DATOS</h3>
					<p class="parrafo_nuestros_servicios">
					OCHOVO INMOBILIARIA dispone de una cartera compuesta por m??s de un centenar de clientes que buscan vivienda a trav??s de la marca. En el banco de datos, los potenciales compradores especifican las caracter??sticas que buscan en una vivienda con el objetivo de poner en contacto comprador y vendedor, lo que se traduce en una importante reducci??n del tiempo de venta de los inmuebles.	
					</p>
					<h3 class="titulo_nuestros_servicios">PUBLICIDAD EN LAS PRINCIPALES P??GINAS DE COMPRAVENTA</h3>
					<p class="parrafo_nuestros_servicios">
					En OCHOVO INMOBILIARIA consideramos importante la inversi??n en publicidad. Su inmueble aparecer?? en las 12 principales p??ginas de internet de ??mbito nacional (idealista, fotocasa, segundamano, etc???). Estas herramientas son la principal fuente de b??squeda por el comprador en la actualidad.
					</p>
					<h3 class="titulo_nuestros_servicios">SERVICIO POST-VENTA</h3>
					<p class="parrafo_nuestros_servicios">
					Una Vez finalizada la venta, en OCHOVO INMOBILIARIA gestionamos toda la documentaci??n necesaria, para la plena satisfacci??n del cliente. Verificaci??n del cambio de titularidad de los servicios y tramitaci??n de la plusval??a municipal.	
					</p>
					<h3 class="titulo_nuestros_servicios">SEGUROS</h3>
					<p class="parrafo_nuestros_servicios">
					En OCHOVO no queremos dejar nada en el aire. Trabajamos con las principales aseguradoras para que el servicio y precio al cliente sea el m??s adecuado posible.	
					</p>
					<h3 class="titulo_nuestros_servicios">CALIDAD, NO CANTIDAD</h3>
					<p class="parrafo_nuestros_servicios">
					El Know-How de OCHOVO INMOBILIARIA aconseja trabajar de manera capilar sobre la calidad y no la cantidad. Por este motivo, nuestra oficina trabaja con una cartera de inmuebles reducida, porque s??lo as?? se puede ofrecer el mejor trato y una gesti??n impecable a todos los clientes.
					</p>
					<h3 class="titulo_nuestros_servicios">FORMACI??N</h3>
					<p class="parrafo_nuestros_servicios">
						??Confiar su compraventa a un experto agente inmobiliario? Todos los Agentes de OCHOVO INMOBILIARIA, est??n en constante formaci??n, ya que nos encontramos en un mercado muy cambiante como para quedarnos estancados. Cursos permanentes y reciclaje son la clave para tener los agentes inmobiliarios mejor formados de la zona. ??nicamente con formaci??n y un exhaustivo plan encaminado a la plena consolidaci??n de conocimientos, se puede conseguir el personal mejor formado para alcanzar el m??ximo grado de satisfacci??n de los clientes.
					</p>
				</div>
			</div>
			
			
			
			

			
			<div id="localidades">
				<a href="mostrarcasas.php?localidad=mostoles&tipo=%"><div class="localidades_div" id="mostoles"><span ><p>Mostoles</p></span></div></a>
				<a href="mostrarcasas.php?localidad=arroyomolinos&tipo=%"><div class="localidades_div" id="arroyo"><span ><p>Arroyomolinos</p></span></div></a>
				<a href="mostrarcasas.php?localidad=alcorcon&tipo=%"><div class="localidades_div" id="alcorcon"><span ><p>Alcorcon</p></span></div></a>
				<a href="mostrarcasas.php?localidad=madrid&tipo=%"><div class="localidades_div" id="madrid"><span ><p>Madrid</p></span></div></a>
			</div>
			<div id="formulario">
				<span id="texto_formulario">
					<p><strong>??Podemos ayudarle?</strong> P??ngase en contacto con nosotros.</p>
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
					echo "<script>alert('El usuario o la contrase??a estan vacios. Rellenelos')</script>";
				}
				else if (strlen($password)<6) {
					echo "Por motivos de seguridad la contrase??a debe tener mas de 6 caracteres";
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