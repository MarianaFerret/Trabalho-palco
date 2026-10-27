<html>

<head>
  <meta charset="UTF-8">
  <title>Atualizar Show</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased">

  <header class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-slate-900 py-24 text-center px-4">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-white mb-4">Formulário para Atualizar
        shows</h1>
    </div>
  </header>

  <br />

  <form name="dados" action="exec_atualizar_show.php" method="POST" enctype="multipart/form-data">
    <prep class="text-2xl font-bold text-amber-400 mb-2"> id_show: </prep> <br />
    <?php
    require_once('./conectar.php');
    $sql = "SELECT id_show, titulo FROM shows";
    $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());
    $num = mysqli_num_rows($res);
    while ($linha = mysqli_fetch_assoc($res)) {
      ?> <input type='radio' name='id_show' value=" <?php echo (INT) $linha['id_show'] ?> "><?php echo $linha['titulo'];
    }
    ?>
    <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> Categotia: </prep> <br />
    <?php
    require_once('./conectar.php');
    $sql = "SELECT*FROM categorias";
    $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());
    $num = mysqli_num_rows($res);
    while ($linha = mysqli_fetch_assoc($res)) {
      ?> <input type='radio' name='categ_id' value=" <?php echo (INT) $linha['id_categ'] ?> "><?php echo $linha['nome_show'];
    }
    ?>
    <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> Titulo: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="titulo" size="100" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> Descricao: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="descricao" size="96" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> Data do show: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="datetime-local" name="data_show" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> Local: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="locals" size="99" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> Preço: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="number" name="preco" step="any" min="0" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> Capacidade: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="number" name="capacidade" min="0" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> Ingressos disponiveis: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="number" name="ing_disponiveis" min="0" /> <br /> <br />
    <label for="imagem"
    class="inline-block cursor-pointer bg-amber-500 hover:bg-white
           text-slate-950 font-bold px-8 py-3 rounded-full transition">
    Escolher imagem
</label>

<input type="file" name="imagem" id="imagem"
       accept="image/*" class="hidden">
    <input
      class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition"
      type="submit" name="btn" value="Atualizar" />
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