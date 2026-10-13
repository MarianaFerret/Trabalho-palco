<?php
 session_start();
 if(!isset($_SESSION['id_usuario'])){
    header("Location: ./login.php");
    exit();
 }
 $tempo_limite = 120;
 if(isset($_SESSION['ultimo_acesso'])){
    $tempo_decorrido = time() -$_SESSION['ultimo_acesso'];
    if($tempo_decorrido > $tempo_limite){
        session_unset();
        session_destroy();
        header("Location: ./login.php?erro=expirada");
        exit();
    }
 }
 $_SESSION['ultimo_acesso'] = time();
?>