<!DOCTYPE html>
<html>
<head>
	<title>Loading...</title>
	<link rel="stylesheet" type="text/css" href="php_estilo.css">
</head>
<body>
<?php
    session_start();
	$pass=$_POST["Senha"];
	$user=$_POST["Usuario"];
    //$test=0;

	include 'config.php';
	include 'mysqlexecuta.php';

	$con = conectar();
	mysql_select_db('escola');

	$sql = "SELECT * FROM usuario WHERE login like '$user' and senha = '$pass'";

	$respBD = mysqlexecuta($con,$sql);

    if($_SESSION["test"]<3){
        if (mysql_fetch_array($respBD)==0) {
            echo "<p class='errado'>Login ou senha inválidos!!</p>";
            $_SESSION["test"]++;
            header("location:Usuario.php");
        }
        else{
            
            $_SESSION["user"] = $respBD["login"];
            header("location:home.html");
        }
    }
    else{
        echo "Sem mais tentativas";
    }
?>
</body>
</html>