<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
</head>
<body>
    <?php
        include "view/cabecalho.php";
    ?>
    <main>
        <?php
            $nome = "majo";
        ?>
        <p> <?=$nome?> </p>
        <?php
            $partiu = false;
            if ($partiu){
                echo "<p>$nome foi para o Japão</p>";
            }else{
                echo "<p>$nome Ficou em casa</p>";
                $acum = 0;
                for($i = 0; $i < 4; $i++){
                    $acum += 10;
                    if($i == 0){
                        echo "<p>".$nome." Ficou triste</p>";
                    }else{
                        echo "<p>Triste</p>";
                    }
                    
                }
                echo "<p>Percentual de Tristeza: $acum%</p>";
            
            }
        ?>
    </main>
    <?php
        include "view/rodape.html";
    ?>
</body>
</html>