<?php
    require_once '../connect/connection.php';

    class ContaDAO{

        public $cont;

        public function __construct(){
            $this->conn = Conexao::conectar();
        }

        public function salvar($conta){
            $sql = 'insert into conta(con_numero, con_dt_abertura) values(:numero, :abertura)';

            $instrucao = $this->conn->prepare($sql);

            $instrucao->bindValue(':numero',$conta->numero);
            $instrucao->bindValue(':abertura',$conta->abertura);
           
            $instrucao->execute();

            return $this->conn->lastInsertId();
        }

        public function associar($idCliente, $idConta){
            $sql = 'insert into cliente_conta(cli_id, con_id) values(:cli,:con)';
            $instrucao = $this->conn->prepare($sql);
            $instrucao->bindValue(':cli', $idCliente);
            $instrucao->bindValue(':con', $idConta);
            $instrucao->execute();
        }
    }
?>