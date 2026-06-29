<?php
// função makerange guarda variavel lenght
function makerange($length)
{   // para i igual a 0 ; enauqnto i for menor que length; incrementa
    for ($i = 0; $i < $length; $i++) {
        yield $i; // gerar i
    }
}
// para a função makerange guarde o valor e alia com 1
foreach (makerange(1000000) as $i) {
    // imprime o valor de i e quebra a linha   
    echo $i, PHP_EOL;
}
