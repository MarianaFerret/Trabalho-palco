<?php
require_once './verifica_sessao.php';
?>
<!DOCTYPE html>
    <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <title>Área do adm</title>
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        </head>
        <body class="bg-slate-950 text-slate-100 font-sans antialiased">
            <nav class="sticky top-0 z-50 bg-black/80 backdrop-blur-md border-b border-slate-800 px-6 py-4">
                <div class="max-w-7xl mx-auto flex items-center justify-between">
                    <p class="text-xl font-black text-amber-400 tracking-wider"> Área do adm </p>
                    <div class="hidden md:flex items-center gap-6">
                        <a href="./painelPrincipal.php" class="text-sm font-semibold hover:text-amber-400 transition">painel principal</a>
                        <a href="./form_cadastrar_show.php" class="text-sm font-semibold hover:text-amber-400 transition">Criar show</a>
                        <a href="./formCadastrarCategoria.php" class="text-sm font-semibold hover:text-amber-400 transition">Cadastrar categoria</a>
                        <a href="./painelPrincipal" class="bg-amber-400 hover:bg-amber-500 text-slate-950 font-bold px-4 py-2 rounded-lg transition">Logout</a>
                    </div>
                </div>
            </nav>
 <!-- BANNER -->
            <header class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-slate-900 py-24 text-center px-4">
                <div class="max-w-4xl mx-auto">
                    <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-white mb-4">Olá adm</h1>
                    <a href="./form_cadastrar_adm.php" class="inline-block bg-white hover:bg-slate-200 text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition">Cadastrar novos adms</a>
                </div>
            </header>
 <!-- CARDS -->
            <main class="max-w-7xl mx-auto py-16 px-6" id="lineup">
                <h2 class="text-3xl font-black text-center text-amber-400 mb-12 uppercase">Shows</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
 <!-- Card 1 -->
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl hover:border-amber400/50 transition">
                        <h3 class="text-2xl font-bold text-amber-400 mb-2">Criar novo Show</h3>
                        <a href="./form_cadastrar_show.php" class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition">Criar show</a>
                    </div>
 <!-- Card 2 -->
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl hover:border-amber400/50 transition">
                        <h3 class="text-2xl font-bold text-amber-400 mb-2">Atualizar show</h3>
                        <a href="./formAtualizarShow.php" class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition">Atualizar show</a>
                    </div>
 <!-- Card 3 -->
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl hover:border-amber400/50 transition">
                        <h3 class="text-2xl font-bold text-amber-400 mb-2">Remover show</h3>
                        <a href="./form_excluir_show.php" class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition">Remover show</a>
                    </div>

                    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl hover:border-amber400/50 transition">
                        <h3 class="text-2xl font-bold text-amber-400 mb-2">Lista de shows</h3>
                        <a href="./fazerArquivoPDF.php" class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition">Gerar Lista</a>
                    </div>
                </div>
                <h2 class="text-3xl font-black text-center text-amber-400 mb-12 uppercase">categorias</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8"> 

                    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl hover:border-amber400/50 transition">
                        <h3 class="text-2xl font-bold text-amber-400 mb-2">Criar nova Categoria</h3>
                        <a href="./formCadastrarCategoria.php" class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition">Criar categoria</a>
                    </div>

                    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl hover:border-amber400/50 transition">
                        <h3 class="text-2xl font-bold text-amber-400 mb-2">Atualizar Categoria</h3>
                        <a href="./form_atualizar_categoria.php" class="inline-block bg-amber-500 hover:bg-white text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition">Atualizar categoria</a>
                    </div>

                </div>
            </main>
 <!-- FOOTER -->
            <footer class="bg-black border-t border-slate-800 text-center py-6 text-slate-500 text-sm">
                <p>&copy; Feito por Mariana Ferret Copello- 3i</p>
            </footer>
        </body>
    </html>