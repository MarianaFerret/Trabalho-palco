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
$imagem = $_FILES["imagem"]["tmp_name"];
//pegar o nome do arquivo da foto do cliente

if ($categ_id === null) {
    header("Location: formCadastrarCategoria.php");
    exit;
}

//montar o comando SQL que vai gravar os dados na tabela cadastro
$sql = "insert into shows (categ_id, titulo, descricao, data_show, locals, preco, capacidade, ing_disponiveis) values 
('$categ_id','$titulo', '$descricao', '$data_show', '$locals', '$preco', '$capacidade', '$ing_disponiveis')";
//executar/gravar os dados na tabela

if (mysqli_query($conn, $sql)) {
    $ultimocod = mysqli_insert_id($conn);

    if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] === UPLOAD_ERR_OK) {
        $imagem = $_FILES["imagem"]["tmp_name"];
        $arquivo = $ultimocod . '.jpg';
        $local = './fotos/' . $arquivo;

        if (move_uploaded_file($imagem, $local)) {
            $sql = "update shows set imagem = '$arquivo' where id_show = $ultimocod";
            mysqli_query($conn, $sql);
        }
    }

    header("Location: painelRestrito.php");
    exit;
}

$msg = urlencode('Sucesso!');
header("location: ../php/form_cadastrar.php?retorno=$msg");
?>