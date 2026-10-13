<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<h1> Formulário para Cadastrar shows</h1>
<form name="dados" action="exec_cadastrar_show.php" method="POST" enctype="multipart/form-data">
  categ_id: <input type="number" name="categ_id"/> <br /> <br /> 
  titulo: <input type="text" name="titulo" size="150" /> <br /> <br />
  descricao: <input type="text" name="descricao" size="150" /> <br /> <br />
  data_show: <input type="date" name="data_show" size="150"/> <br /> <br />
  locals: <input type="text" name="locals" size="150" /> <br /> <br />
  preco: <input type="number" name="preco" step="any" size="150" /> <br /> <br />
  capacidade: <input type="number" name="capacidade" size="150" /> <br /> <br />
  ing_disponiveis: <input type="number" name="ing_disponiveis" size="150" /> <br /> <br />
  img: <input type="text" name="img" size='150' /> <br> <br>  
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