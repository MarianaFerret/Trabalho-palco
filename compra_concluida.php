<html>

<head>
  <meta charset="UTF-8">
  <title> Compra concluida</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased">

  <header class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-slate-900 py-24 text-center px-4">
      <div class="max-w-4xl mx-auto">
          <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-white mb-4">Sua compra foi concluida</h1>
      </div>
  </header>
 
  <br />

    <div class= 'flex justify-center'>
        <a href="./painelPrincipal.php" class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-10 py-8 rounded-full shadow-lg transition" type="submit" name="btn" value=""> Voltar para o Site principal </a>
    </div>
  <br />
  <br />

    <footer class="bg-black border-t border-slate-800 text-center py-24 text-slate-500 text-sm">
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
    //echo '<script type="text/javascript"> alert("Frase Famosa cadastrada com Sucesso!!!"); </script>';
  }
  ?>
</body>

</html>