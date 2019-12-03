<!DOCTYPE html>
<html>
<head>
	<title>Alteração</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="php_estilo.css">
	<link rel="stylesheet" type="text/css" href="html_estilo.css">
</head>
<body>
<?php
	include 'config.php';
	include 'mysqlexecuta.php';

	$con = conectar();
	mysql_select_db('escola');
	$cod=$_POST['Cod'];
	$sql="SELECT * FROM disciplinas WHERE CodDisciplina = $cod";
	$res= mysqlexecuta($con,$sql);
	$quant = (mysql_num_rows($res));//qtde de linhas encontradas na consulta

	if($quant==0){
		echo "<p class='errado'> Disciplinas não cadastrada!!!</p>";
	}
	else{
		$row = mysql_fetch_array($res);
?>
    <script>
        function blokletras(objEvent){
            var ikeycode;
            ikeycode=objEvent.keyCode;
            if(ikeycode>=48 && ikeycode<=57) return true;
            return false;
        }
        
        function valida(){
            vazio=false;
            if(document.form.NomeDisc.value==""){
                alert("O Nome tem que ser preenchido");
                vazio=true;
            }

             if(vazio==false){
                 document.form.submit();
            }
        }
    </script>
<form action="Alt_Disc_Final.php"  method="post" name="form">
	<p class="cont">Código : <?php echo $row['CodDisciplina']; ?></p> <br>
	<input type="hidden" name="Cod" value="<?php echo $row['CodDisciplina'] ?>">
	<p class="cont">
		Disciplina:
		<input type="text" name="NomeDisc" value="<?php echo $row['NomeDisciplina'] ?>" class="caixa">
	</p>
	<input class="botao" type="button" onclick="valida()" value="Alterar">
	<?php 
		}
	?>
</form>
</body>
</html>