<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="php_estilo.css">
<title>PHP - Pesquisa de Disciplina por nome</title>
</head>
<body>
<?php
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar();
mysql_select_db('escola');
$nome=$_POST["Nome"];
$sql="SELECT * FROM disciplinas where NomeDisciplina like '%$nome%' order by NomeDisciplina";
$res = mysqlexecuta($con,$sql);
$quant = (mysql_num_rows($res)); //Quantidade de linhas encontradas na consulta
if ($quant == 0){
	echo "<p class='errado'>Disciplina não cadastrada !!!</p>";}
else{
?>
<table>
<tr> <td class="titulo" colspan="2">Disciplinas em Ordem Alfabética</td><tr>
<tr> <td class="subt">Cód. Disc.</td>
<td class="subt">Nome Disc.</td></tr>

<?php 
	while($row = mysql_fetch_array($res)){ //Exibe as linas encontradas na consulta
?>
<tr> <td class="cont"><?php echo $row['CodDisciplina'];?></td>
	<td class="cont"><?php echo $row['NomeDisciplina'];?></td>
<?php
	} //fecha o while
	} // fecha o if
?>
</table>
<br><br>
<p><a href="List_Disc.php" class="botao">Listar Disciplinas</a>	</p>
</body>
<html>