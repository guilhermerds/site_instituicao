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
	$sql="SELECT * FROM alunos WHERE matricula = $cod";
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
            if(document.form.End.value==""){
                alert("O Endereço tem que ser preenchido");
                vazio=true;
            }
            if(document.form.Cid.value==""){
                alert("A Cidade tem que ser preenchida");
                vazio=true;
            }
            if(document.form.Cur.value==""){
                alert("O Codigo do curso tem que ser preenchido");
                vazio=true;
            }

             if(vazio==false){
                 document.form.submit();
            }
        }
    </script>
<form action="Alt_Alu_Final.php"  method="post" name="form">
	<p class="cont">Matricula : <?php echo $row['matricula']; ?></p> <br>
	<input type="hidden" name="Cod" value="<?php echo $row['matricula'] ?>">
	<p class="cont">
		Aluno:
		<input type="text" name="Nome" value="<?php echo $row['nome'] ?>" class="caixa">
		<br><br>
		Endereço:
		<input type="text" name="End" value="<?php echo $row['endereco'] ?>" class="caixa">
		<br><br>
		Cidade:
		<input type="text" name="Cid" value="<?php echo $row['cidade'] ?>" class="caixa">
		<br><br>
		Código do Curso:
		<input type="text" onkeypress="return blokletras(event)"  name="Cur" value="<?php echo $row['codcurso'] ?>" class="caixa">
		<br><br>
	</p>
	<input class="botao" type="button" onclick="valida()" value="Alterar">
	<?php 
		}
	?>
</form>
</body>
</html>