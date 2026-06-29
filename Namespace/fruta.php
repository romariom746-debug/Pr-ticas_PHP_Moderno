<?php
/* Nomespace é um recurso do PHP que permite organizar o código em grupos lógicos, 
evitando conflitos de nomes entre classes, funções e constantes. 
Ele é especialmente útil em projetos grandes ou quando se utiliza bibliotecas de terceiros.     
namespace Teste;
*/

namespace My;

class fruta
{
    public $nome;
    public $especie;

    public function info()
    {
        echo "<br>A fruta: $this->nome";
        echo "<br>A especia: $this->especie";
    }
}

// Descoberta nova .
// Esse código SÓ roda se você abrir o arquivo "Namespace.php" direto.
// Se for puxado por require no "meu.php", o PHP ignora isso aqui
if (basename($_SERVER["PHP_SELF"]) === basename(__FILE__)) {
    $outro = new fruta();
    $outro->nome = "GOIABA";
    $outro->especie = "NÃO SEI";
    $outro->info();
}
