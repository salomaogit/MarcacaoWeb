<form action="teste.php" method="get">
    
    <label>Conta 1: Núnero</label>
    <input type="text" name="numero_conta1">
    <label>Nome</label>
    <input type="text" name="nome_conta1">
    
    <br><br>
    <label>Conta 2: Núnero</label>
    <input type="text" name="numero_conta2">
    <label>Nome</label>
    <input type="text" name="nome_conta2">
    <button type="submit">Enviar</button>
    <br><br>

</form>

<form action="teste.php" method="get">
    
    <label>Valor: </label>
    <input type="text" name="deposito">
    <button type="submit">Depositar</button>
    <br><br>

</form>

<form action="teste.php" method="get">
    
    <label>Valor: </label>
    <input type="text" name="saque">
    <button type="submit">Sacar</button>
    <br><br>
    
</form>

<form action="teste.php" method="get">
    
    <label>Valor: </label>
    <input type="text" name="trans">
    <button type="submit">Transferir</button>
    <br><br>
    
</form>

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

    $conta1 = new Conta($_GET["numero_conta1"],$_GET["nome_conta1"]);
    $conta2 = new Conta($_GET["numero_conta2"],$_GET["nome_conta2"]);
    echo $conta1->numero;
    echo $conta1->cliente;
    echo $conta2->numero;
    echo $conta2->cliente;
    echo $conta1->getSaldo();
    echo $conta2->getSaldo();
    $conta1->depositar($_GET["deposito"]);
    echo $conta1->getSaldo();
    echo $conta2->getSaldo();
    $conta1->sacar($_GET["saque"]);
    echo $conta1->getSaldo();
    echo $conta2->getSaldo();
    $conta1->transferir($_GET["trans"],$_GET["numero_conta2"]);
    echo $conta1->getSaldo();
    echo $conta2->getSaldo();
    echo "<br>"

?>

<a href="index.php">Index</a>