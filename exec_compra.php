<?php
require_once('./conectar.php');
$ID= $_GET["cod"]??null;
$show_id = $_POST['show_id'] ?? null;
$nome_comprador = $_POST['nome_comprador'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$qtd_ing = $_POST['qtd_ing'];
$valor_total = $_POST['valor_total'];

if($ID == null){
    $ID = $show_id;
}

$sql1="SELECT ing_disponiveis FROM shows where id_show =". $ID;
$res = mysqli_query($conn, $sql1) or die(mysqli_connect_error());
$num = mysqli_num_rows($res);
while ($linha = mysqli_fetch_assoc($res)) {
    $ing_disponiveis = (int)$linha['ing_disponiveis'];
}
$nova_ing_disponiveis = $ing_disponiveis - $qtd_ing;
$sql2="update shows set ing_disponiveis='$nova_ing_disponiveis' where id_show='$ID'";
$res = mysqli_query($conn, $sql2) or die(mysqli_connect_error());

$sql3= "insert into vendas (show_id, nome_comprador, email, cpf, qtd_ing, valor_total) values 
('$ID','$nome_comprador', '$email', '$cpf', '$qtd_ing', '$valor_total')";

if (mysqli_query($conn, $sql3)) {
    header("Location: compra_concluida.php");
    exit;
}



$msg= urlencode('Sucesso!');
header("location: ../php/form_cadastrar.php?retorno=$msg");
?>   