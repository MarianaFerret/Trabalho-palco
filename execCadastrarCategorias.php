<?php
require_once('./conectar.php');
$categoria = $_POST['categoria'];

$sql= "insert into categorias (nome_show) values 
('$categoria')";

mysqli_query($conn,$sql) or die(mysqli_connect_error());

$msg= urlencode('Sucesso!');
header("location: ./form_cadastrar_show.php?retorno=$msg");
?>   