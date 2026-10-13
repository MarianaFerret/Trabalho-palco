<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<h1> Formulário para Cadastrar adm</h1>
<form name="dados" action="exec_cadastrar_adm.php" method="POST" enctype="multipart/form-data">
  nome: <input type="text" name="nome" size="150" /> <br /> <br />
  email: <input type="text" name="email" size="150" /> <br /> <br />
  senha: <input type="text" name="senha" size="150" /> <br /> <br />
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