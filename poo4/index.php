<form action="Index.php" method="get">
    <label>Núnero</label>
    <input type="text" name="n">
    <button type="submit">Enviar</button>
</form>

<a href="class.php">Classe</a>
<a href="interface.php">Interface</a>
<a href="heranca.php">Herança</a>
<a href="Teste.php">Teste</a>

<?php
    echo $_GET["n"];
    echo "<br>";
    var_dump($_GET);
    echo "<br>";
    echo "Olá, Mundo! <br>";
    print "Olá, Mundo de Deus!<br>";
    $texto = "Olá, olha eu aqui de novo!";
    
    var_dump($texto);
    
    print "<br>";

    $numero = 8;
    
    var_dump($numero);

    $Cumprimento = "Bom";
    $Cumprimento .= " Dia";

    echo "$Cumprimento";
?>