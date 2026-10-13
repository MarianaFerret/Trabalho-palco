<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<h1> Formulário para Cadastrar categorias</h1>
<form name="dados" action="execCadastrarCategorias.php" method="POST" enctype="multipart/form-data">
  Categoria: <input type="text" name="categoria" size="150" /> <br /> <br />
  <input type="submit" name="btn" value="Cadastrar" />
</form>

<?php
if (isset ($_GET['retorno']))
{
 $msg = $_GET['retorno'];
 echo "<br />";
 echo "<font size='5' color='#F00'>";
 echo $msg;
 $msg="";
 echo "</font>";
 //echo '<script type="text/javascript"> alert("Frase Famosa cadastrada com Sucesso!!!"); </script>';
}
?>
</body>
</html>