<!DOCTYPE html>
<html>
    <?php 
    session_start();
    if(!isset($_SESSION["test"])){
        header("location:C.php");
    }
    ?>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="html_estilo.css">
	<link rel="stylesheet" type="text/css" href="php_estilo.css">
    <script src="jquery.js"></script>
    <style>
        a{
            display: block;
            color: #fff;
            background-color: #2EB0C4;
            width: 100px;
            padding: 5px;
            border-radius: 5px;
            margin-left: 25%;
        }
        
    </style>
    
    <script>
    </script>
</head>
<body>
    <?php if($_SESSION["test"]<3){ ?>
	<form action="Ver.php"  method="post">
<p>Usuário</p>
<input type="text" name="Usuario" maxlength="5" class="caixa" autocomplete="off">
<br>
<p>Senha</p>
<input type="password" name="Senha" maxlength="5" class="caixa" autocomplete="off">
<br>
<input type="submit" value="Login" class="botao">
        <br>
<?php 
    if($_SESSION["test"]!=0){
        echo "<p class='errado'>Usuario ou senha errado!!!</p>";
    }
        ?>
</form>
    <?php }
    else{
        echo"<p class='errado'>Sem mais tentaivas!!!!!!</p>";
    }
    ?>
</body>
</html>