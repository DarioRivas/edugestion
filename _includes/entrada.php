<html>

<head>
	<title>CET5</title>
</head>

<body>
	<?php
	include("../_includes/db.php");
	$enviar = $_POST['enviar'];
	$nombre = $_POST['nombre'];
	$clave = $_POST['clave'];
	$ent = entrar($nombre, $clave);
	if (mysqli_num_rows($ent) == 0) //if ($ent === NULL)
	{
		header("Location: ..miusuario/?error=1");
	} else {
		$ini_array = parse_ini_file('_conn.ini', true);
		$_SESSION['db'] = ($ini_array['dataDB']['db_name']);
		$row = mysqli_fetch_array($ent);
		$row2 = mysqli_fetch_array($comp);
		//session_start();
		$_SESSION['usuario'] = $row['nombre'];
		$_SESSION['rango'] = $row['rango'];
		$_SESSION['rol'] = $row['rol'];
		$_SESSION['id'] = $row['id'];
		header("Location: home.php");
		?>
		<iframe src="home.php" width="90%" height="90%"></iframe>
		<?php
	}
	?>
</body>

</html>