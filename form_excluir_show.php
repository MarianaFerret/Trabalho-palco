<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<h1> Excluir Registros </h1>
<?php
require_once('conectar.php');
$sql="select * from cadastro";
$res=mysqli_query($conexao,$sql) or die (mysqli_connect_error());
$num=mysqli_num_rows($res);
while ($linha = mysqli_fetch_row($res))
{
$cod=$linha[0];
echo "Frase: ".$linha[1]. ' - '; //mostrar a frase 
echo "<a href='form_excluir.php?cod=$cod&&frase=$linha[1]'> [ Excluir ] </a> ";
echo "<br />";
echo "<br />";
}
?>
<h2>Confirma exclusão do registro ?</h2>   
<form name="dados" action="../php/exec_excluir.php" method="POST">
<input type="hidden" name="cod" value="<?php if (isset ($_GET['cod'])) echo $_GET['cod'] ?>" />
         
Frase:<input type="text" name="frase" size="150" readonly value="<?php if (isset ($_GET['frase'])) echo $_GET['frase'] ?>" />  
<br /> <br />
<input type="submit" name="excluir" value="Excluir" />
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
