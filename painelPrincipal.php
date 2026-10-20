<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Planeta Atlântida 2027 - Tailwind</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-slate-950 text-slate-100 font-sans antialiased">
        <nav class="sticky top-0 z-50 bg-black/80 backdrop-blur-md border-b border-slate-800 px-6 py-4">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <a href="#" class="text-xl font-black text-amber-400 tracking-wider">PLANETA ATLÂNTIDA 2027</a>
                <div class="hidden md:flex items-center gap-6">
                    <a href="#" class="text-sm font-semibold hover:text-amber-400 transition">Início</a>
                    <a href="#lineup" class="text-sm font-semibold hover:text-amber-400 transition">Line-up</a>
                    <a href="#ingressos" class="text-sm font-semibold hover:text-amber-400 transition">Ingressos</a>
                    <a href="#ingressos" class="bg-amber-400 hover:bg-amber-500 text-slate-950 font-bold px-4 py-2 rounded-lg transition">Garantir Ingresso</a>
                </div>
            </div>
        </nav>
        <header class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-slate-900 py-24 text-center px-4">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-white mb-4">O Maior Festival do Sul do País</h1>
                <p class="text-lg md:text-xl text-slate-300 mb-8">05 e 06 de Fevereiro de 2027 • Saba - Praia de Atlântida/RS</p>
                <a href="#lineup" class="inline-block bg-white hover:bg-slate-200 text-slate-950 font-bold px-8 py-3 rounded-full shadow-lg transition">Ver Atrações Confirmadas</a>
            </div>
        </header>
        <main class="max-w-7xl mx-auto py-16 px-6" id="lineup">
            <h2 class="text-3xl font-black text-center text-amber-400 mb-12 uppercase">Palcos & Experiências</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl hover:border-amber400/50 transition">
                    <h3 class="text-2xl font-bold text-amber-400 mb-2">Palco Planeta</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Os maiores nomes do Pop, Rock, Funk e Sertanejo nacional e internacional.</p>
                </div>
                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl hover:border-amber400/50 transition">
                    <h3 class="text-2xl font-bold text-amber-400 mb-2">Palco Atlantis</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Espaço dedicado à cena Hip-Hop, Rap, Trap e música eletrônica.</p>
                </div>
                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl hover:border-amber400/50 transition">
                    <h3 class="text-2xl font-bold text-amber-400 mb-2">Arena Premium</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Área VIP com open bar, experiência gastronômica exclusiva e vista privilegiada.</p>
                </div>
            </div>
        </main>
        <footer class="bg-black border-t border-slate-800 text-center py-6 text-slate-500 text-sm">
            <p>&copy; 2027 Planeta Atlântida - Exercício Prático LP II</p>
        </footer>
    </body>
</html>