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
	$sql="SELECT * FROM cursos WHERE codcurso = $cod";
	$res= mysqlexecuta($con,$sql);
	$quant = (mysql_num_rows($res));//qtde de linhas encontradas na consulta

	if($quant==0){
		echo "<p class='errado'> Curso não cadastrado!!!</p>";
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
            if(document.form.Nome.value==""){
                alert("O Nome tem que ser preenchido");
                vazio=true;
            }
            if(document.form.Disc1.value==""){
                alert("O Nome da primeira disciplina tem que ser preenchida");
                vazio=true;
            }
            if(document.form.Disc2.value==""){
                alert("O Nome da segunda disciplina tem que ser preenchida");
                vazio=true;
            }
            if(document.form.Disc3.value==""){
                alert("O Nome da terceira disciplina tem que ser preenchida");
                vazio=true;
            }

             if(vazio==false){
                 document.form.submit();
            }
        }
    </script>
<form action="Alt_Cur_Final.php"  method="post" name="form">
	<p class="cont">Código : <?php echo $row['codcurso']; ?></p> <br>
	<input type="hidden" name="Cod" value="<?php echo $row['codcurso'] ?>">
	<p class="cont">
		Curso:
		<input type="text" name="Nome" value="<?php echo $row['nome'] ?>" class="caixa">
		<br><br>
		Código da Primeira Disciplina:
		<input type="text" onkeypress="return blokletras(event)" name="Disc1" value="<?php echo $row['coddisc1'] ?>" class="caixa">
		<br><br>
		Código da Segunda Disciplina:
		<input type="text" onkeypress="return blokletras(event)" name="Disc2" value="<?php echo $row['coddisc2'] ?>" class="caixa">
		<br><br>
		Código da Terceira Disciplina:
		<input type="text" onkeypress="return blokletras(event)" name="Disc3" value="<?php echo $row['coddisc3'] ?>" class="caixa">
		<br><br>
	</p>
	<input class="botao" type="button" onclick="valida()" value="Alterar">
	<?php 
		}
	?>
</form>
</body>
</html>