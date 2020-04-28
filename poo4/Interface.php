
<?php
    interface IConta{
        public function getSaldo();
        public function sacar($valor);
        public function depositar($valor);
        public function transferir($valor,$outraConta);        
    }
    
    class Conta implements IConta{
        public $numero;
        public $saldo;
        public $cliente;

        public function Conta($numero,$cliente){
            $this->numero = $numero;
            $this->cliente = $cliente;
        }

        public function getSaldo(){
            return $this->saldo;
        }
        public function sacar($valor){
            return $this->saldo -= $valor;
        }
        public function depositar($valor){
            return $this->saldo += $valor;
        }
        public function transferir($valor,$outraConta){
            $this->sacar($valor);
            $outraConta->depositar($valor);
        }        

    }

    $conta1 = new Conta(123,"Majo");
    $conta2 = new Conta(124,"Kevin");
    echo $conta1->getSaldo();
    echo $conta2->getSaldo();
    $conta1->depositar(1000);
    echo $conta1->getSaldo();
    echo $conta2->getSaldo();
    $conta1->transferir(500,$conta2);
    echo $conta1->getSaldo();
    echo $conta2->getSaldo();
    echo "<br>"

?>

<a href="index.php">Index</a>