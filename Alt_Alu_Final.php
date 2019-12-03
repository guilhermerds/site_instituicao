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
	$end=$_POST["End"];
	$cidade=$_POST["Cid"];
	$curso=$_POST["Cur"];
	$sql="UPDATE alunos SET nome='$nome', endereco='$end',cidade='$cidade',codcurso='$curso' WHERE matricula = $cod ";
	$res= mysqlexecuta($con,$sql);
?>
<p class="certo">Curso alterado com sucesso !!!</p>

</body>
</html>