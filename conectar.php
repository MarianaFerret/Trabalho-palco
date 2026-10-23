<?php
$host = "localhost";
$usuario = "root";
$senha = "C4r1c14#";
$banco = "palco";
$conn = new mysqli($host, $usuario, $senha, $banco);
if($conn -> connect_error){
    die("Falha na conexão: " .$conn-> connect_error);
}
?>