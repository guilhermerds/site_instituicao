<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="php_estilo.css">
	<title>PHP - Pesquisa de aluno por Nome</title>
</head>

<body>
	<?php
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar();
mysql_select_db('escola');
$nome=$_POST["Nome"];
$sql="SELECT * FROM alunos where nome like '%$nome%' order by nome";
$res = mysqlexecuta($con,$sql);
$quant = (mysql_num_rows($res)); //Quantidade de linhas encontradas na consulta
if ($quant == 0){
	echo "<p class='errado'>Aluno não cadastrado !!!</p>";}
else{
?>
	<table>
		<tr>
			<td colspan="5" class="titulo">Alunos em Ordem Alfabética</td>
		<tr>
		<tr>
			<td class="subt">Matricula</td>
			<td class="subt">Nome</td>
			<td class="subt">Endereço</td>
			<td class="subt">Cidade</td>
			<td class="subt">codcurso</td>
		</tr>

		<?php //feito até aqui
	while($row = mysql_fetch_array($res)){ //Exibe as linas encontradas na consulta
?>
		<tr>
			<td class="cont"><?php echo $row['matricula'];?></td>
			<td class="cont"><?php echo $row['nome'];?></td>
			<td class="cont"><?php echo $row['endereco'];?></td>
			<td class="cont"><?php echo $row['cidade'];?></td>
			<td class="cont"><?php echo $row['codcurso'];?></td>
		</tr>
		<?php
	} //fecha o while
	} // fecha o if
?>
	</table>
	<br><br>
	<p><a href="List_Alu.php" class="botao">Listar alunos</a></p>
</body>
<html>