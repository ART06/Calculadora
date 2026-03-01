<?php

    $a = $_POST["a"];
    $b = $_POST["b"];
    $operacao = $_POST['operacao'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch($operacao){
        case 'soma':
            $resultado = $a + $b;
            break;
        case 'subtracao':
            $resultado = $a - $b;
            break;
        case 'multiplicacao':
            $resultado = $a * $b;
            break;
        case 'divisao':
            $resultado = $a / $b;
            break;
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<h1><?php echo 'Minha Calculadora!';?></h1>

<form method='POST' action='calculadora.php'>
    a:<input type=text name='a'><br>
    b:<input type=text name='b'>
    <hr>
    <input type=submit value='soma' name="operacao">
    <input type=submit value='subtracao' name="operacao">
    <input type=submit value='multiplicacao' name="operacao">
    <input type=submit value='divisao' name="operacao">
    <br><br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo 'Resultado: ' . $resultado; 
}
?>
    
</body>
</html>