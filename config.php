<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Documento PHP</title>
</head>
<body>
<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	function conectar(){
		$hostdb='127.0.0.1';//servidor mysql, pode ser o nome localhost ou o endereço ip 127.0.0.1
		$userdb='root';             //usuário do mysql que terá acesso
		$passdb='';					//senha do usuário

		if ($con = mysql_pconnect($hostdb,$userdb,$passdb)) {
			return $con; //se aconexão for bem susedida, será retornado a variavel $con
		}
		else{
			return 0;	// se a conexão não ocorrer, será retornado 0
		}
	}
?>
</body>
</html>