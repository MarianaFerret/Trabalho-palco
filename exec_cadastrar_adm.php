<?php
require_once('./conectar.php');
//pegamos os dados que vieram do formulario no vetor $_POST 
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//pegar o nome do arquivo da foto do cliente

//montar o comando SQL que vai gravar os dados na tabela cadastro
$sql= "insert into usuarios (nome_usuario, email_usuario, senha) values 
('$nome', '$email', '$senha')";
//executar/gravar os dados na tabela
mysqli_query($conn,$sql) or die(mysqli_connect_error());


//faz o upLoad da foto


//voltar para form_cadastrar e passsar parâmetro por GET com mensagem de: 
// Frase Famosa Cadastrada com Sucesso!!!
$msg= urlencode('Sucesso!');
header("location: ./login.php?retorno=$msg");
?>   
