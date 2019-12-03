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
$cod_disc=$_POST["Cod"];//
$sql="SELECT * FROM disciplinas where CodDisciplina = $cod_disc";//
$res = mysqlexecuta($con,$sql);
$quant = (mysql_num_rows($res)); //Quantidade de linhas encontradas na consulta
if ($quant == 0){
	echo "<p class='errado'>Disciplina não cadastrada !!!</p>";}
else{
		$sql="delete from disciplinas where CodDisciplina = $cod_disc";//
		$res = mysqlexecuta($con,$sql);
		echo "<p class='certo'>Excluido com sucesso!!!</p>";
	} // fecha o if
?>
</table></p>
<br><br>
<p><a href="List_Disc.php" class="botao">Listar Disciplinas</a></p><!---->
</body>
<html>