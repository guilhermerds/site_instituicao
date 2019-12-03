<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="php_estilo.css">
<title>PHP - Exclusão</title>
</head>
<body>
<?php
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar();
mysql_select_db('escola');
$cod_disc=$_POST["Cod"];
$sql="SELECT * FROM cursos where codcurso = $cod_disc";//
$res = mysqlexecuta($con,$sql);
$quant = (mysql_num_rows($res)); //Quantidade de linhas encontradas na consulta
if ($quant == 0){
	echo "<p class='errado'>Curso não cadastrado !!!</p>";}//
else{
		$sql="delete from cursos where codcurso = $cod_disc";//
		$res = mysqlexecuta($con,$sql);
		echo "<p class='certo'>Excluido com sucesso!!!</p>";
	} // fecha o if
?>
</table></p>
<br><br>
<p><a href="List_Cur.php" class="botao">Listar Cursos</a></p><!---->
<br><br>	
</body>
<html>