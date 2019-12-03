<html>
<head>
<title>PHP - Pesquisa Geral de Cursos</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="php_estilo.css">
</head>
<body>
<?php
    session_start();
    if( !isset($_SESSION["user"])){
        header("location:Usuario.html");
    }
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar();
mysql_select_db('escola');
$sql = "SELECT * FROM cursos order by codcurso";
$res = mysqlexecuta($con, $sql);
?>
<table>
		<tr> <td colspan="5" class="titulo">Cursos em ordem alfabetica</td></tr>
		<tr><td class="subt">Cód. Curso</td>
		<td class="subt">Nome do Curso</td>
		<td class="subt">Cód. Disciplina 1</td>
		<td class="subt">Cód. Disciplina 2</td>
		<td class="subt">Cód. Disciplina 3</td></tr>
		
	<?php
		while($row = mysql_fetch_array($res)){
	?>
		<tr>
		<td class="cont"><?php echo $row['codcurso'] ?></td>
		<td class="cont"><?php echo $row['nome'] ?></td>
		<td class="cont"><?php echo $row['coddisc1'] ?></td>
		<td class="cont"><?php echo $row['coddisc2'] ?></td>
		<td class="cont"><?php echo $row['coddisc3'] ?></td>
		</tr>
	<?php
		}
	?>
	</table>
</body>
</head>