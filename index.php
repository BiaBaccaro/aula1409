<?php
$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2");
$opera = filter_input(INPUT_POST, "slOperacao");
$resul = "";

if($num01 && $num02){
    switch($opera){
        case "+";
        $resul = ($num01 + $num02);
        break;
        case "-";
        $resul = ($num01 - $num02);
        break;
        case "*";
        $resul = ($num01 * $num02);
        break;
        case "/";
        $resul = ($num01 / $num02);
        break;
    }
}
?>

<DOCTYPE html>
<html lang="en" dir="Itr">
    <head>
    <meta charset="utf-8">
    <title>Operações</title>
    <style>
    input, select{padding: 10px; margin: 5px;}
    </style>
    </head>
    <body>
    <link rel="stylesheet" href="style.css">
        <h1><?=$resul;?></h1>
        <form method="post">
           <h2><label>Número 1: <input type="text" name="txtNumero1"/></label><br></h2>
           <h3><label>Número 2: <input type="text" name="txtNumero2"/></label><br></h3>
           <h4><label>Operação:</h4>
                <select name="slOperacao">
                <option value="+">Adição</option>
                <option value="-">Subtração</option>
                <option value="*">Multiplicação</option>
                <option value="/">Divisão</option>
                </select>
            </label><br>
    <input type="submit" name="btnCelular" value="Calcular">
        </form>
    </body>
</html>







