<?php

// Autoload Corrigido
spl_autoload_register(function ($class) {
    // REMOVEMOS a barra '/' do começo. 
    // Se o seu arquivo "fruta.php" estiver na MESMA PASTA deste arquivo aqui, deixe assim:
    $caminhoArquivo = str_replace('\\', '/', $class) . '.php';
    echo "<br>Buscando o arquivo em: " . __DIR__ . '/' . $caminhoArquivo;

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});


use My\fruta;

// CORREÇÃO: Como você já usou o "use Teste\fruta" lá em cima,
// aqui embaixo você deve chamar apenas "new fruta()", sem repetir o Teste\
$outro = new fruta();
$outro->nome = "laranja";
$outro->especie = "doce";
$outro->info();
