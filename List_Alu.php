<html>
<head>
<title>PHP - Pesquisa Geral de Cursos</title>
<link rel="stylesheet" type="text/css" href="php_estilo.css">
<meta charset="utf-8">
</head>
<body>
<?php
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar();
mysql_select_db('escola');
$sql = "SELECT * FROM alunos order by matricula";
$res = mysqlexecuta($con, $sql);
?>
<table>
		<tr> <td colspan="5" class="titulo">Alunos em ordem alfabetica</td></tr>

		<tr><td class="subt">Matricula</td>
		<td class="subt">Nome do Aluno</td>
		<td class="subt">Endereço</td>
		<td class="subt">Cidade</td>
		<td class="subt">Cód. Curso</td></tr>
		
	<?php
		while($row = mysql_fetch_array($res)){
	?>
		<tr>
		<td class="cont"><?php echo $row['matricula'] ?></td>
		<td class="cont"><?php echo $row['nome'] ?></td>
		<td class="cont"><?php echo $row['endereco'] ?></td>
		<td class="cont"><?php echo $row['cidade'] ?></td>
		<td class="cont"><?php echo $row['codcurso'] ?></td>
		</tr>
	<?php
		}
	?>
	</table>
</body>
</head>