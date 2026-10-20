<html>
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Show</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased">
  <h1 class="text-3xl font-black text-center text-amber-400 mb-12 uppercase"> Formulário para Cadastrar shows</h1>
  <form name="dados" action="exec_cadastrar_show.php" method="POST" enctype="multipart/form-data">
    <prep class="text-2xl font-bold text-amber-400 mb-2"> categ_id: </prep> <br />
    <?php
    require_once('./conectar.php');
    $sql = "SELECT*FROM categorias";
    $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());
    $num = mysqli_num_rows($res);
    while ($linha = mysqli_fetch_assoc($res)) {
      ?> <input type='radio' name='categ_id' value=" <?php echo (INT)$linha['id_categ'] ?> "><?php echo $linha['nome_show'];
    }
    ?>
    <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> titulo: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="titulo" size="100" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> descricao: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="descricao" size="96" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> data_show: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="datetime-local" name="data_show" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> locals: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="locals" size="99" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> preco: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="number" name="preco" step="any" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> capacidade: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="number" name="capacidade" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> ing_disponiveis: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="number" name="ing_disponiveis" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> img: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="img" size='100' /> <br> <br> <br />
    <input
      class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition"
      type="submit" name="btn" value="Cadastrar" />
  </form>

  <?php
  if (isset($_GET['retorno'])) {
    $msg = $_GET['retorno'];
    echo "<br />";
    echo "<font size='5' color='#F00'>";
    echo $msg;
    $msg = "";
    echo "</font>";
    //echo '<script type="text/javascript"> alert("Frase Famosa cadastrada com Sucesso!!!"); </script>';
  }
  ?>
</body>

</html>