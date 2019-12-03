<html>
<meta charset="utf-8">
<head> <title> PHP - Pesquisa Geral de Disciplina</title>
<link rel="stylesheet" type="text/css" href="php_estilo.css">
<body>
<?php
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar();
mysql_select_db('escola');
$sql = "SELECT * FROM disciplinas order by CodDisciplina";
$res = mysqlexecuta($con, $sql);
?>
<table>
		<tr> <td colspan="2"  class="titulo">Disciplina em ordem alfabetica</td></tr>
		<tr><td class="subt">Cód. Disc.</td>
		<td class="subt">Nome da Disciplina</td></tr>
		<?php
			while($row = mysql_fetch_array($res)) { //Exibe as linhas encontradas na consulta

		?>
		<tr><td class="cont"><?php echo $row['CodDisciplina']; ?></td>
			<td class="cont"><?php echo $row['NomeDisciplina']; ?></td></tr>

		<?php
			}		
		?>
	</table>
</body>
</head>