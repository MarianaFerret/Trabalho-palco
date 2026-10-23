<?php
require_once('conectar.php');
//pegar os dados que veio do formulário no vetor $_POST
$id_show = $_POST['id_show'];

//montar o sql e executar que irá exclusão da frase famosa
$sql="delete from shows where id_show='$id_show'";

if (mysqli_query($conn, $sql)) {
    header("Location: painelRestrito.php");
    exit;
}

$msg=urlencode('Registro excluído com sucesso ! ! ! ');
header ("location: ../php/form_excluir.php?retorno=$msg");
?>