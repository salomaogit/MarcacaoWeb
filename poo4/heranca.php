<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Herança</title>
</head>

<body>

<?php
    //Classe mãe ou SuperClasse

    class FormaGeometrica{
        public $base;
        
        public function calculoArea(){
            return $this->base * $this->base;
        }
    }

    $forma = new FormaGeometrica;

    $forma->base = 10;


    // Classe Filha ou subclass

    class Quadrado extends FormaGeometrica{

    }

    $quadrado = new Quadrado;

    $quadrado->base = 20;

    

    class Triangulo extends FormaGeometrica{
        public $altura;

        public function calculoArea(){
            return $this->base * $this->altura / 2;
        }

    }

    $triangulo = new Triangulo;
    $triangulo->base = 30;
    $triangulo->altura = 15;
?>

    <div class="container">
       <div class="row">
           <div class="col-sm-4 py-3">
               <div class="card mx-1">
                   <div class="card-header bg-primary text-center display-4 ">
                        <?php
                            echo $forma->calculoArea();
                        ?>
                   </div>
                   <div class="card-body" style="height:13.5rem">
                       <p>Calculo da Área</p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 py-3">
               <div class="card mx-1">
                   <div class="card-header bg-primary text-center display-4  ">
                        <?php
                            echo $quadrado->calculoArea();
                        ?>
                    </div>
                   <div class="card-body" style="height:13.5rem" >
                       <p>Cálculo do Quadrado.</p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 py-3">
               <div class="card mx-1">
                   <div class="card-header bg-primary text-center display-4  ">
                        <?php
                            echo $triangulo->calculoArea();
                        ?>
                    </div>
                   <div class="card-body" style="height:13.5rem" >
                       <p>Cálculo do Triângulo.</p>
                   </div>
               </div>
           </div>
       </div>
    </div>
</body>
</html>
<a href="index.php">Index</a>