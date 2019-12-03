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
	$disc=$_POST["NomeDisc"];
	$sql="UPDATE disciplinas SET NomeDisciplina='$disc' WHERE CodDisciplina = $cod ";
	$res= mysqlexecuta($con,$sql);
?>
<p class="certo">Discilina alterada com sucesso !!!</p>

</body>
</html>