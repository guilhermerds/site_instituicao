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
$disc1=$_POST["Endereco"];
$disc2=$_POST["Cidade"];
$disc3=$_POST["Codcur"];

include 'config.php'; //chamando a rotina que conecta o bdo
include 'mysqlexecuta.php'; //chamando a rotina que executa comando SQL

$con = conectar();//atribuindo a variavel $con os parâmetros do SLQ (root, usuário, senha)

mysql_select_db('escola');//Atribuindo o bd Escola no Mysql

$sql="INSERT INTO alunos(matricula,nome,endereco,cidade,codcurso) VALUES('$cod','$nome','$disc1','$disc2','$disc3')";

$res = mysqlexecuta($con,$sql);
 echo "<p class='certo'>Inclusão efetuada com sucesso!!!</p>";
?>
</table></p>
<br><br>
<p><a href="List_Alu.php" class="botao">Listar Alunos</a></p><!---->
</body>
<html>