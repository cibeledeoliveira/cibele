
<?php
function imprimirMensagens() 
{
    echo "Vamos aprender a programar? <br>";
    echo "Iremos aprender funções em PHP!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

echo "<br>";

$variavel = 2;

function trocaValor() 
{
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

echo "<br>";

function trocaValorDeVerdade() 
{
    global $variavel;
    $variavel = 10;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";