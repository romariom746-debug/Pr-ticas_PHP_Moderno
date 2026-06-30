<?php

/**
 * @deprecated CÓDIGO RUIM: Não utilize em produção.
 * MOTIVO: Alto consumo de memória RAM. Esta função armazena todo o dataset 
 * na memória antes de retornar, causando estouro de limite (Memory Limit Exceeded) 
 * caso o valor de $length seja muito grande.
 * SOLUÇÃO: Substituir pelo uso de Generators (yield).
 */

// Funçcão makerange guarda varialvel length
function makerange($length)
{
    $dataset = [];// dataset e um array vazio
    // para i igual a 0; enquanto 1 for menor que length; incrementa i
    for ($i = 0; $i < $length; $i++) {
        $dataset[] = $i; // dataset recebe o valor de i
    }
    // ***ERROR: o erro critiro aconte aqui: alocação total de memória RAM de um vez só
    return $dataset; // retorna o dataset
}
// chamando a função makerange e passando o valor 1000
$customrange = makerange(1000);
// para cada valor do customarange junta value
foreach ($customrange as $value) {
    // imprime o valor de value e quebra a linha
    echo $value . PHP_EOL;
}
