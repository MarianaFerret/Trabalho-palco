 <?php
session_start();
require_once './conectar.php';
$erro="";
if(isset($GET['erro']) && $_GET['erro'] == 'expirada'){
    $erro = "Sua sessão expirou por inatividade. Faça login novamente.";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT id_usuario, nome_usuario, senha FROM usuarios WHERE email_usuario = '$email' AND senha = '$senha'";
    $resultado = $conn->query($sql);
    if($resultado->num_rows > 0){
        $usuario = $resultado -> fetch_assoc();
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nome_usuario'] = $usuario['nome_usuario'];
        $_SESSION['ultimo_acesso'] = time();

        print("funcionou");
        header("Location: ./painelRestrito.php");
        exit;
    } 
    else{
        $erro = "E-mail ou senha incorretos!";
    }
}
?>
 
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Olá</h1>
            <form action = "./login.php" method = "POST">
                email: <input type="text" name="email" size="150"/> <br> <br>
                senha: <input type="text" name="senha" size="150"/> <br> <br>
                <input type="submit" value="Entrar" /> </b> 
            </form>
    </body>
    </html>