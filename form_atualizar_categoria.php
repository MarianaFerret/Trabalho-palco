<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<h1> Atualizar Registros</h1> 
<?php
require_once('./conectar.php');
$sql="select * from shows";
$res=mysqli_query($conexao,$sql) or die(mysqli_connect_error());
$num=mysqli_num_rows($res);

while ($linha = mysqli_fetch_row($res))
{
$cod=$linha[0];
echo "titulo: ".$linha[1]. ' - ';
echo "descricao: ".$linha[2]. ' - ';
echo "<a href='form_atualizar.php?cod=$cod&&frase=$linha[1]&&autor=$linha[2]'> [ Atualizar ] </a> ";
echo "<br />";
}
?>
<br /> <br /> <br /> <br /><br />   
<h1> Altere os dados e clique Atualizar </h1>  
<form name="dados" action="../php/exec_atualizar.php" method="POST">
  <input type="hidden" name="cod" value="<?php if (isset ($_GET['cod'])) echo $_GET['cod'] ?>" />          
<pre> Frase:  <input type="text" name="frase" size="150" value="<?php if (isset ($_GET['frase'])) echo $_GET['frase'] ?>" /> 
<br />  
Autor(a):<input type="text" name="autor" size="150" value="<?php if (isset ($_GET['autor'])) echo $_GET['autor'] ?>" /> </pre>
<br />             
  <input type="submit" name="sub" value="Atualizar"> 
</form>

<?php
if (isset ($_GET['retorno']))
{
 $msg = $_GET['retorno'];
 echo "<br />";
 echo "<font face='Arial' size='3' color='#F00'>";
 echo $msg;
 $msg="";
 echo "</font>";
}
?>
</body>
</html>
