<html>

<head>
    <meta charset="UTF-8">
    <title>Formulário exluir</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased">
    <header class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-slate-900 py-24 text-center px-4">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-white mb-4">Formulário para excluir
        shows</h1>
    </div>
  </header>
    <br />
    <h2 class="text-2xl font-bold text-amber-400 mb-2" >Show a ser excluido:</h2>

    <form name="dados" action="./exec_excluir.php" method="POST">
        <?php
    require_once('conectar.php');
    $sql = "select id_show, titulo from shows";
    $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());
    $num = mysqli_num_rows($res);
    while ($linha = mysqli_fetch_assoc($res)) {
        ?> <input type='radio' name='id_show' value=" <?php echo (INT) $linha['id_show'] ?> "><?php echo $linha['titulo'];
    }
    ?>
    <br />
    <br />
            <input class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition" type="submit" name="excluir" value="Excluir" />
        </form>
        <br />
        <footer class="bg-black border-t border-slate-800 text-center py-21 text-slate-500 text-sm">
    <p>&copy; Feito por Mariana Ferret Copello- 3i</p>
  </footer>

        <?php
        if (isset($_GET['retorno'])) {
            $msg = $_GET['retorno'];
            echo "<br />";
            echo "<font face='Arial' size='3' color='#F00'>";
            echo $msg;
            $msg = "";
            echo "</font>";
        }
        ?>
</body>

</html>