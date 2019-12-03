<!DOCTYPE html>
<html>
<head>
	<title>PHP - Função Executa Comandos SQL</title>
</head>
<body>
	<?php
/*
$id - Ponteiro da Conexão aberta
$sql - Cláusula SQL a executar
$erro - Especifica se a função exibe ou não (0=não, 1=sim)
$res - Resposta
*/

function mysqlexecuta($id, $sql, $erro=1){
	if (empty($sql) OR !($id)){
		return 0; // Erro  na conexão
	}
	if (!($res= @mysql_query($sql,$id))){
		if ($erro) 
			echo "Ocorreu um erro na execução do comando SQL no banco de dados. Favor contactar o Administrador";
			echo "<br>" . "<b> comando : </b> ". $sql . "<br>". "<b>Id:</b>" . $id . "<br>";
			exit;
	}
		return $res;
}
?>
</body>
</html>