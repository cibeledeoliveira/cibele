
<?php
function obterMensagem() 
{
    return "Seja bem vindo(a)!";
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo "<br>", obterMensagem();
echo "<br>";

echo "<br>";

function obterMensagemComNome($nome) 
{
    return "Bem vindo, {$nome}!";
}

echo "<br>", obterMensagemComNome("Cibele");
echo "<br>", obterMensagemComNome("de Oliveira");

echo "<br>";

function soma($a, $b) 
{
    return $a + $b;
    
}

$x = 15;
$y = 6;
echo "<br>", soma(19, 30);
echo "<br>", soma($x, $y);

