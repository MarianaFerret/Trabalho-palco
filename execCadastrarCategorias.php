<?php
require_once('./conectar.php');
$categoria = $_POST['categoria'];

$sql= "insert into categorias (nome_show) values 
('$categoria')";



if (mysqli_query($conn, $sql)) {
    header("Location: painelRestrito.php");
    exit;
}

$msg= urlencode('Sucesso!');
header("location: ./form_cadastrar_show.php?retorno=$msg");
?>   