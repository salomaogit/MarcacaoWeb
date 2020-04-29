<?php
    class Conexao{
        public static function conectar(){
            $host = 'localhost';
            $bdName = 'mybank';
            $userName = 'root';
            $password = '';
            $stn = "mysql:host=$host;dbname=$bdName";
            try{
                $conn = new PDO($stn,$userName,$password);
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $conn;             
            }   catch (Exception $e){
                echo $e->getMessage();
            }
        }
    }
    
    // PHP Data Object
    // echo "sucesso!";
?>