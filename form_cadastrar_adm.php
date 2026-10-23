<html>

<head>
  <meta charset="UTF-8">
  <title>Cadastrar Adm</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased">

  <header class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-slate-900 py-24 text-center px-4">
      <div class="max-w-4xl mx-auto">
          <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-white mb-4">Formulário para Cadastrar novos adm</h1>
      </div>
  </header>
 
  <br />

  <form name="dados" action="exec_cadastrar_adm.php" method="POST" enctype="multipart/form-data">
    <prep class="text-2xl font-bold text-amber-400 mb-2">nome: </prep> <input class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition" type="text" name="nome" size="150" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2"> email: </prep> <input class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition" type="text" name="email" size="150" /> <br /> <br />
    <prep class="text-2xl font-bold text-amber-400 mb-2">senha: </prep> <input class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition" type="text" name="senha" size="150" /> <br /> <br />
    <input class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition" type="submit" name="btn" value="Cadastrar" />
  </form>

 <br />

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

  <footer class="bg-black border-t border-slate-800 text-center py-9 text-slate-500 text-sm">
      <p>&copy; Feito por Mariana Ferret Copello- 3i</p>
    </footer>

</body>

</html>