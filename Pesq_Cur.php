<html>
<head>
<link rel="stylesheet" type="text/css" href="php_estilo.css">
<meta charset="UTF-8">
<title>PHP - Pesquisa de Curso por nome</title>
</head>
<body>
<?php
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar();
mysql_select_db('escola');
$nome=$_POST["Nome"];
$sql="SELECT * FROM cursos where nome like '%$nome%' order by nome";
$res = mysqlexecuta($con,$sql);
$quant = (mysql_num_rows($res)); //Quantidade de linhas encontradas na consulta
if ($quant == 0){
	echo "<p class='errado'>Curso não cadastrado !!!</p>";}
else{
?>
<table>
<tr> <td colspan="5" class="titulo">Cursos em Ordem Alfabética</td><tr>
<tr> <td class="subt">Cód. Curso</td>
<td class="subt">Nome da disciplina</td>
<td class="subt">Código da 1°Disc.</td>
<td class="subt">Código da 2°Disc.</td>
<td class="subt">Código da 3°Disc.</td></tr>

<?php //feito até aqui
	while($row = mysql_fetch_array($res)){ //Exibe as linas encontradas na consulta
?>
<tr> <td class="cont"><?php echo $row['codcurso'];?></td>
	<td class="cont"><?php echo $row['nome'];?></td>
	<td class="cont"><?php echo $row['coddisc1'];?></td>
	<td class="cont"><?php echo $row['coddisc2'];?></td>
	<td class="cont"><?php echo $row['coddisc3'];?></td>
<?php
	} //fecha o while
	} // fecha o if
?>
</table>
<br><br>
<p><a href="List_Cur.php" class="botao">Listar Cursos</a></p>
</body>
<html>