<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Principal</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-slate-950 text-slate-100 font-sans antialiased">
        <nav class="sticky top-0 z-50 bg-black/80 backdrop-blur-md border-b border-slate-800 px-6 py-4">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <p class="text-xl font-black text-amber-400 tracking-wider">Eventualist</p>
                <div class="hidden md:flex items-center gap-6">
                    <a href="./login.php" class="text-sm font-semibold hover:text-amber-400 transition">área do adm</a>
                    <a href="./pesquisar_show.php" class="text-sm font-semibold hover:text-amber-400 transition">Pesquisar por show</a>
                    <a href="./compra_ingresso.php" class="bg-amber-400 hover:bg-amber-500 text-slate-950 font-bold px-4 py-2 rounded-lg transition">Comprar ingresso</a>
                </div>
            </div>
        </nav>
        <header class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-slate-900 py-24 text-center px-4">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-white mb-4">Eventualist</h1>
                <p class="text-lg md:text-xl text-slate-300 mb-8">Compre seus ingressos aqui</p>
                <a href="#lineup" class="inline-block bg-white hover:bg-slate-200 text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition">Ver shows Confirmadas</a>
            </div>
        </header>
        <main class="max-w-7xl mx-auto py-16 px-6" id="lineup">
            <h2 class="text-3xl font-black text-center text-amber-400 mb-12 uppercase">Shows</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                require_once('./conectar.php');
                $sql = "SELECT*FROM shows";
                $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());
                $num = mysqli_num_rows($res);
                while ($linha = mysqli_fetch_assoc($res)) {
                    $agora = new DateTime();
                    $dataShow = new DateTime($linha['data_show']);
                    if ($dataShow >= $agora){
                        echo '<div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl hover:border-amber400/50 transition">';
                        echo '<h3 class="text-2xl font-bold text-amber-400 mb-2">' . $linha['titulo'] . '</h3>';
                        echo '<p class="text-slate-400 text-sm leading-relaxed">' . $linha['descricao'] . '</p>';
                        echo '<p class="text-1xl font-bold text-amber-400 mb-2">'. $linha['data_show']. '</p>';
                        echo '<p class="text-1xl font-bold text-amber-400 mb-2"> R$'. $linha['preco']. '</p>';
                        echo '<a href="./compra_ingresso.php?id_show='.$linha['id_show'].'" class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-6 py-2 rounded-full shadow-lg transition" type="submit" name="btn" value="Comprar ingresso"> Comprar ingresso </a> <br /> <br />' ;
                        echo '<a href="./pagina_show.php?id_show='.$linha['id_show'].'" class="inline-block hover:bg-amber-500 text-slate-0 font-bold px-5 py-2 rounded-full shadow-lg transition" type="submit" name="btn" value="Ver mais"> Ver mais </a>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </main>
        <footer class="bg-black border-t border-slate-800 text-center py-6 text-slate-500 text-sm">
            <p>&copy; Mariana Ferret Copello - 3i</p>
        </footer>
    </body>
</html>