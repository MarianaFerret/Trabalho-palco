<?php
require_once('./conectar.php');
//pegamos os dados que vieram do formulario no vetor $_POST 
$categ_id = $_POST['categ_id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data_show = $_POST['data_show'];
$locals = $_POST['locals'];
$preco = $_POST['preco'];
$capacidade = $_POST['capacidade'];
$ing_disponiveis = $_POST['ing_disponiveis'];
$img = $_POST['img'];
//pegar o nome do arquivo da foto do cliente

//montar o comando SQL que vai gravar os dados na tabela cadastro
$sql= "insert into shows (categ_id, titulo, descricao, data_show, locals, preco, capacidade, ing_disponiveis, imagem) values 
('$categ_id','$titulo', '$descricao', '$data_show', '$locals', '$preco', '$capacidade', '$ing_disponiveis', '$img ')";
//executar/gravar os dados na tabela
mysqli_query($conn,$sql) or die(mysqli_connect_error());

//rotina php para UPLOAD da foto do cliente
//pegar o ultimo código gerado pelo mySQL
//modificar o nome do arquivo para codigo+extenção .jpg

//faz o upLoad da foto


//voltar para form_cadastrar e passsar parâmetro por GET com mensagem de: 
// Frase Famosa Cadastrada com Sucesso!!!
$msg= urlencode('Sucesso!');
header("location: ../php/form_cadastrar.php?retorno=$msg");
?>   
