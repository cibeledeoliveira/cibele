
<?php

$soma = function ($a, $b) 
{
    return $a + $b;
};

echo $soma(3, 24) . "<br>";


echo "<br>";


function executar($a, $b, $op, $funcao) 
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}

executar(3, 24, '+', $soma);


echo "<br>";


$multiplicacao = function($a, $b) 
{
    return $a * $b;
};

executar(3, 24, '*', $multiplicacao);

