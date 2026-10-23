<?php
require_once('conectar.php');
//pegar os dados que veio do formulário no vetor $_POST
$id_categ = $_POST['id_categ'];
$nome_show = $_POST['nome_show'];
//montar o sql que irá atualizar o registro 
$sql="update categorias set nome_show='$nome_show' where id_categ=$id_categ";

if (mysqli_query($conn, $sql)) {
    header("Location: painelRestrito.php");
    exit;
}

$msg=urlencode('Registro atualizado com sucesso ! ! ! ');
header ("location: ../php/form_atualizar.php?retorno=$msg");
?>