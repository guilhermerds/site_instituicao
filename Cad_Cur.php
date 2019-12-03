<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="php_estilo.css">
<title>PHP - Exclusão</title>
</head>
<body>
<?php
//Resgatando as várias postadas no CadDisciplina.html
$cod=$_POST["Cod"];
$nome=$_POST["Nome"];
$disc1=$_POST["NomeDisc1"];
$disc2=$_POST["NomeDisc2"];
$disc3=$_POST["NomeDisc3"];

include 'config.php'; //chamando a rotina que conecta o bdo
include 'mysqlexecuta.php'; //chamando a rotina que executa comando SQL

$con = conectar();//atribuindo a variavel $con os parâmetros do SLQ (root, usuário, senha)

mysql_select_db('escola');//Atribuindo o bd Escola no Mysql

$sql="INSERT INTO cursos(codcurso,nome,coddisc1,coddisc2,coddisc3) VALUES('$cod','$nome','$disc1','$disc2','$disc3')";

$res = mysqlexecuta($con,$sql);
 echo "<p class='certo'>Inclusão efetuada com sucesso!!!</p>";
?>
</table></p>
<br><br>
<p><a href="List_Cur.php" class="botao">Listar Cursos</a></p><!---->
</body>
<html>