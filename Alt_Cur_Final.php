<!DOCTYPE html>
<html>
<head>
	<title>Alteração</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="php_estilo.css">
</head>
<body>
<?php
	include 'config.php';
	include 'mysqlexecuta.php';

	$con = conectar();
	mysql_select_db('escola');
	$cod=$_POST["Cod"];
	$nome=$_POST["Nome"];
	$dis1=$_POST["Disc1"];
	$dis2=$_POST["Disc2"];
	$dis3=$_POST["Disc3"];
	$sql="UPDATE cursos SET nome='$nome', coddisc1='$dis1',coddisc2='$dis2',coddisc3='$dis3' WHERE codcurso = $cod ";
	$res= mysqlexecuta($con,$sql);
?>
<p class="certo">Curso alterado com sucesso !!!</p>

</body>
</html>