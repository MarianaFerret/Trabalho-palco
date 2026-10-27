<?php
$ID= $_GET["cod"]??null;
$show_id = $_POST['show_id'] ?? null;
$nome_comprador = $_POST['nome_comprador'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$qtd_ing = $_POST['qtd_ing'];

if($ID == null){
    $ID = $show_id;
}

require_once('./conectar.php');
$sql = "SELECT preco FROM shows where id_show=". (INT)$ID;
$res = mysqli_query($conn, $sql) or die(mysqli_connect_error());
$num = mysqli_num_rows($res);
while ($linha = mysqli_fetch_assoc($res)) {
    $preco = (float)$linha['preco'];
}
$valor_total = $qtd_ing * $preco;
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

  <prep class="text-2xl font-bold text-amber-400 mb-2">Preço Total: </prep> <prep class="text-2xl font-bold text-White mb-2"> <?php echo $valor_total?> </prep>
  <br />
  <br />
  <form action="./exec_compra.php" method="POST">

    <input type="hidden" name="ID" value="<?php echo $ID; ?>">
    <input type="hidden" name="show_id" value="<?php echo $show_id; ?>">
    <input type="hidden" name="nome_comprador" value="<?php echo $nome_comprador; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
    <input type="hidden" name="qtd_ing" value="<?php echo $qtd_ing; ?>">
    <input type="hidden" name="valor_total" value="<?php echo $valor_total; ?>">

    <button class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-6 py-2 rounded-full shadow-lg transition" type="submit" name="btn" value="Ver mais"> comprar</button>

</form>
  <br />
  <br />

  <footer class="bg-black border-t border-slate-800 text-center py-30 text-slate-500 text-sm">
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
