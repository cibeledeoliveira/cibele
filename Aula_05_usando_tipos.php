
<?php
function somar1($a, $b) 
{

    return $a + $b;
}

echo somar1(4, 8) . "<br>";
echo somar1(1.5, 2.8) . "<br>";

echo "<br>";

function somar2(int $a, int $b)
{
    return $a + $b;
}

echo somar2(4, 8) . "<br>";
echo somar2(1.5, 2.8) . "<br>";

echo "<br>";

