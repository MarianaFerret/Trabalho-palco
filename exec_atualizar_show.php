<?php
require_once('conectar.php');
//pegar os dados que veio do formulário no vetor $_POST
$id_show = $_POST['id_show'];
$categ_id = $_POST['categ_id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data_show = $_POST['data_show'];
$locals = $_POST['locals'];
$preco = $_POST['preco'];
$capacidade = $_POST['capacidade'];
$ing_disponiveis = $_POST['ing_disponiveis'];
$imagem = $_FILES["imagem"]["tmp_name"];
//montar o sql que irá atualizar o registro 
$sql="update shows set categ_id='$categ_id', titulo='$titulo', descricao='$descricao', data_show='$data_show', locals='$locals', preco='$preco', capacidade= '$capacidade', ing_disponiveis='$ing_disponiveis' where id_show=$id_show";

if (mysqli_query($conn, $sql)) {
if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] === UPLOAD_ERR_OK) {
        $imagem = $_FILES["imagem"]["tmp_name"];
        $arquivo = $id_show . '.jpg';
        $local = './fotos/' . $arquivo;

        if (move_uploaded_file($imagem, $local)) {
            $sql = "update shows set imagem = '$arquivo' where id_show = $id_show";
            mysqli_query($conn, $sql);
        }
    }

    header("Location: painelRestrito.php");
    exit;
}

$msg=urlencode('Registro atualizado com sucesso ! ! ! ');
header ("location: ../php/form_atualizar.php?retorno=$msg");
?>