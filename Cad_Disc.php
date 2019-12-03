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

include 'config.php'; //chamando a rotina que conecta o bdo
include 'mysqlexecuta.php'; //chamando a rotina que executa comando SQL

$con = conectar();//atribuindo a variavel $con os parâmetros do SLQ (root, usuário, senha)

mysql_select_db('escola');//Atribuindo o bd Escola no Mysql

$sql="INSERT INTO disciplinas(CodDisciplina,NomeDisciplina) VALUES('$cod','$nome')";

$res = mysqlexecuta($con,$sql);
 echo "<p class='certo'>Inclusão efetuada com sucesso!!!</p>";
?>

<br><br>
<p><a href="List_Disc.php" class="botao">Listar Disciplinas</a></p><!---->
</body>
<html>