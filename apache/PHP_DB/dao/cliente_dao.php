<?php
    require_once '../connect/connection.php';
    class ClienteDAO{
        public $conn;

        public function __construct(){
            $this->conn = Conexao::conectar();
        }

        public function salvar($cliente){
            $sql = 'insert into cliente(cli_nome, cli_fone) values(:nome,:fone)';
            $instrucao = $this->conn->prepare($sql);
            
            $instrucao->bindValue(':nome',$cliente->nome);
            $instrucao->bindValue(':fone',$cliente->telefone);

            $instrucao->execute();
        }
        
        public function listarClientes(){
            $sql = 'select cli_id, cli_nome from cliente';
            $instrucao = $this->conn->prepare($sql);
            $instrucao->execute();
            return $instrucao->fetchAll(PDO::FETCH_ASSOC);
            
        }
    }
?>