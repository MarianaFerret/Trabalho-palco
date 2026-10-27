<?php
    $ID= $_GET["id_show"]??null;
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Comprar</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased">

  <header class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-slate-900 py-24 text-center px-4">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-white mb-4">Comprar ingresso</h1>
    </div>
  </header>

  <br />

  <form name="dados" action="exec_continuar.php" method="POST" enctype="multipart/form-data">
    <?php
    if ($ID != null) {
        echo '<input type="hidden" name="show_id" value="' . (int)$ID . '">';
    }

    if ($ID == null){
        echo '<prep class="text-2xl font-bold text-amber-400 mb-2"> Shows: </prep> <br />';
        require_once('./conectar.php');
        $sql = "SELECT*FROM shows";
        $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());
        $num = mysqli_num_rows($res);
        while ($linha = mysqli_fetch_assoc($res)) {
            $agora = new DateTime();
            $dataShow = new DateTime($linha['data_show']);
            if ($dataShow >= $agora){
                ?> <input type='radio' name='show_id' value=" <?php echo (INT) $linha['id_show'] ?> "><?php echo $linha['titulo'];
            }
        }
    }
    
    ?>
    <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> nome_comprador: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="nome_comprador" size="100" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> email: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="email" size="96" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> cpf: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="cpf" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> quantidade de ingressos: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="number" name="qtd_ing" size="99" /> <br /> <br />
    <input class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-6 py-2 rounded-full shadow-lg transition" type="submit" name="btn" value="continuar" />
  </form>

  <br />

  <footer class="bg-black border-t border-slate-800 text-center py-6 text-slate-500 text-sm">
    <p>&copy; Feito por Mariana Ferret Copello- 3i</p>
  </footer>

  <?php
  if (isset($_GET['retorno'])) {
    $msg = $_GET['retorno'];
    echo "<br />";
    echo "<font size='5' color='#F00'>";
    echo $msg;
    $msg = "";
    echo "</font>";
  }
  ?>
</body>

</html>