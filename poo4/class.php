<?php
    // Definição
    class pessoa {
        public $nome;
        public $idade;
    }
    //Criar uma instância
    $p = new pessoa();
    var_dump($p);
    $p->nome="Majo";
    $p->idade=20;
    echo"<br>";
    var_dump($p);
    // Classe com métodos
    class cauculo{
        function somar(){
            echo "<br> O resultado da soma é: ";
            echo 1+1;
        }
    }
    $c = new cauculo;
    $c->somar();
    echo "<br>"
?>
<a href="index.php">Index</a>