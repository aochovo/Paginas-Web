<?php
$host_name="localhost";
$user_name="root";
$password="";
$database="inmobiliaria";
$enlace=mysqli_connect($host_name,$user_name,$password,$database);
if (mysqli_connect_errno()) {
	echo "Error en la conexión: ".mysqli_connect_error();
}else{

}
?>