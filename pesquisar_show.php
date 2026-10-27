<html>

<head>
  <meta charset="UTF-8">
  <title>Pesquisar shows</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased">

  <header class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-slate-900 py-24 text-center px-4">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-white mb-4">Pesquisar shows</h1>
    </div>
  </header>
<br />
  <form name="dados" action="pesquisar_show.php" method="POST" enctype="multipart/form-data">
    <prep class="text-2xl font-bold text-amber-400 mb-2"> Categoria: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="nome_show" size="100" /> <br /> <br />
      <prep class="text-2xl font-bold text-amber-400 mb-2"> Nome do show: </prep> <input
      class="bg-slate-900 border border-slate-800 rounded-2xl p-1 shadow-xl hover:border-amber400/50 transition"
      type="text" name="titulo" size="100" /> <br /> <br />
      <input
      class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition"
      type="submit" name="btn" value="Pesquisar" />
  </form>
  <br />
  <br />

  <?php

  use FontLib\Table\Type\prep;

$titulo = $_POST['titulo'] ?? '';
$categoria = $_POST['nome_show'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once('./conectar.php');
    if ($titulo != "") 
        $titulo = mysqli_real_escape_string($conn, $titulo);
        $sql = "SELECT shows.titulo, categorias.nome_show
                FROM categorias
                INNER JOIN shows
                ON shows.categ_id = categorias.id_categ
                WHERE shows.titulo LIKE '%".$titulo."%'";
        $res = mysqli_query($conn, $sql)
            or die(mysqli_error($conn));
    }
    else if ($categoria != "") {
        $categoria = mysqli_real_escape_string($conn, $categoria);
        $sql = "SELECT shows.titulo, categorias.nome_show
                FROM categorias
                INNER JOIN shows
                ON shows.categ_id = categorias.id_categ
                WHERE categorias.nome_show LIKE '%".$categoria."%'";
        $res = mysqli_query($conn, $sql)
            or die(mysqli_error($conn));
    }
    if (isset($res)) {
        $num = mysqli_num_rows($res);
        if ($num > 0) {
            while ($linha = mysqli_fetch_assoc($res)) {
                echo '<div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl hover:border-amber400/50 transition">';
                echo '<prep class="text-2xl font-bold text-amber-400 mb-2"> Nome do Show: </prep> <prep class="text-2xl font-bold text-white-400 mb-2">'.($linha['titulo']).'</prep>';
                echo "<br />";
                echo '<prep class="text-2xl font-bold text-amber-400 mb-2"> Categoria: </prep> <prep class="text-2xl font-bold text-white-400 mb-2">' .($linha['nome_show']). '</prep>';
                echo '</div>';
                echo "<br /><br />";
            }
        }
    }

?>
  <br />

  <footer class="bg-black border-t border-slate-800 text-center py-15 text-slate-500 text-sm">
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