<?php
require_once('conectar.php');
//pegar os dados que veio do formulário no vetor $_POST
$cod = $_POST['cod'];
$frase = $_POST['frase'];
$autor = $_POST['autor'];
//montar o sql que irá atualizar o registro 
$sql="update cadastro set frase='$frase', autor='$autor' where codigo=$cod";
mysqli_query($conexao,$sql) or die(mysqli_connect_error());
//voltar para form_atualizar.php e passar parâmetro com a mensagem de: Cadastro atualizado com sucesso
$msg=urlencode('Registro atualizado com sucesso ! ! ! ');
header ("location: ../php/form_atualizar.php?retorno=$msg");
?>