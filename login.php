<?php
session_start();
require_once './conectar.php';
$erro = "";
if (isset($GET['erro']) && $_GET['erro'] == 'expirada') {
    $erro = "Sua sessão expirou por inatividade. Faça login novamente.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT id_usuario, nome_usuario, senha FROM usuarios WHERE email_usuario = '$email' AND senha = '$senha'";
    $resultado = $conn->query($sql);
    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nome_usuario'] = $usuario['nome_usuario'];
        $_SESSION['ultimo_acesso'] = time();

        print ("funcionou");
        header("Location: ./painelRestrito.php");
        exit;
    } else {
        $erro = "E-mail ou senha incorretos!";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased">
    <header class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-slate-900 py-24 text-center px-4">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-white mb-4">Login para adm's</h1>
        </div>
    </header>
    <br />
    <form action="./login.php" method="POST">
        <prep class="text-2xl font-bold text-amber-400 mb-2">email: </prep> <input
            class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
            type="text" name="email" size="150" /> <br> <br>
        <prep class="text-2xl font-bold text-amber-400 mb-2">senha: </prep> <input
            class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
            type="text" name="senha" size="150" /> <br> <br>
        <input
            class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition"
            type="submit" value="Entrar" /> </b>
    </form>

    <br />
    <footer class="bg-black border-t border-slate-800 text-center py-23 text-slate-500 text-sm">
        <p>&copy; Feito por Mariana Ferret Copello- 3i</p>
    </footer>
</body>

</html>