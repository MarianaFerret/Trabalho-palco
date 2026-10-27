<?php
    $ID= $_GET["id_show"];
    require_once('./conectar.php');
    $sql1 = 'SELECT*FROM shows where id_show ='.$ID;
    $res1 = mysqli_query($conn, $sql1) or die(mysqli_connect_error());
    $num1 = mysqli_num_rows($res1);

    $sql2='SELECT categorias.nome_show FROM categorias INNER JOIN shows ON shows.categ_id = categorias.id_categ WHERE shows.id_show ='.$ID;
    $res2 = mysqli_query($conn, $sql2) or die(mysqli_connect_error());
    $num2 = mysqli_num_rows($res2);
    while($linha2 = mysqli_fetch_array($res2)){
        $categoria = $linha2['nome_show'];
    }

    $local='./fotos/';

    while ($linha1 = mysqli_fetch_assoc($res1)) {
      echo '<html>';
      echo '<head>';
      echo '</head>';
      echo '<meta charset="UTF-8">';
      echo '<title>'.$linha1["titulo"].'</title>';
      echo '<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>';
      echo '<body class="bg-slate-950 text-slate-100 font-sans antialiased">';
      echo '<header class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-slate-900 py-24 text-center px-4">';
      echo '<div class="max-w-4xl mx-auto">';
      echo '<h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight text-white mb-4">'.$linha1["titulo"].'</h1>';
      echo '</div>';
      echo '</header>';
      echo '<br />';
      echo '<prep class="text-2xl font-bold text-amber-400 mb-2"> Categoria: </prep> <prep class="text-2xl font-bold text-white-400 mb-2">'.$categoria.'</prep>';
      echo '<br />';
      echo '<prep class="text-2xl font-bold text-amber-400 mb-2"> Descricao: </prep> <prep class="text-2xl font-bold text-white-400 mb-2">'.$linha1['descricao'].'</prep>';
      echo '<br />';
      echo '<prep class="text-2xl font-bold text-amber-400 mb-2"> Data do show: </prep> <prep class="text-2xl font-bold text-white-400 mb-2">'.$linha1['data_show']. '</prep>';
      echo '<br />';
      echo '<prep class="text-2xl font-bold text-amber-400 mb-2"> Local: </prep> <prep class="text-2xl font-bold text-white-400 mb-2">'.$linha1['locals']. '</prep>';
      echo '<br />';
      echo '<prep class="text-2xl font-bold text-amber-400 mb-2"> Preço: </prep> <prep class="text-2xl font-bold text-white-400 mb-2">'.$linha1['preco'].'</prep>';
      echo '<br />';
      echo '<prep class="text-2xl font-bold text-amber-400 mb-2"> Capacidade: </prep> <prep class="text-2xl font-bold text-white-400 mb-2">'.$linha1['capacidade']. '</prep>';
      echo '<br />';
      echo '<prep class="text-2xl font-bold text-amber-400 mb-2"> Ingressos disponiveis: </prep> <prep class="text-2xl font-bold text-white-400 mb-2">'.$linha1['ing_disponiveis']. '</prep>';
      echo '<br />';
      if ($linha1['imagem']) {
    echo '<img src="' . $local . $linha1['imagem'] . '" class=" max-h-96 object-cover rounded-xl mb-6">';
}
      echo '<br />';
      echo '<footer class="bg-black border-t border-slate-800 text-center py-6 text-slate-500 text-sm">';
      echo '<p>&copy; Feito por Mariana Ferret Copello- 3i</p>';
      echo ' </footer>';
      echo '</body>';
      echo '</html>';
    }
?>