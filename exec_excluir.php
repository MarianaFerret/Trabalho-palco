<?php
require_once('conectar.php');
//pegar os dados que veio do formulário no vetor $_POST
$cod = $_POST['cod'];
$frase = $_POST['frase'];

//rotina para excluir a foto do Autor(a) 
$exclui_foto='../fotos/'.$cod.'.jpg';
unlink($exclui_foto); //comando que exclui a foto do Autor(a)

//montar o sql e executar que irá exclusão da frase famosa
$sql="delete from cadastro where codigo='$cod'";
mysqli_query($conexao,$sql) or die (mysql_connect_error());
//voltar para form_excluir.php e passar parâmetro com a mensagem de: Registro excluído com sucesso
$msg=urlencode('Registro excluído com sucesso ! ! ! ');
header ("location: ../php/form_excluir.php?retorno=$msg");
?>