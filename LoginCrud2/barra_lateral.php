<?php
session_start();
include_once ('conexion.php');
if(isset($_SESSION['usuarioingresando']))
{
$usuarioingresado = $_SESSION['usuarioingresando'];
$buscandousu = mysqli_query($conn,"SELECT * FROM usuarios WHERE correo = '".$usuarioingresado."'");
$mostrar=mysqli_fetch_array($buscandousu);
	
}else
{
	header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="BarraLateral">

<ul>
<li><a href="dashboard.php" >• Dashboard</a></li>
<li><a href="productos_tabla.php" >• Productos</a></li>
<li><a href="categoria_tabla.php" >• Categoría</a></li>
<li><a href="cerrar_sesion.php" >• Cerrar sesión</a></li>
</ul>
<hr>
</div>
</body>
</html>
