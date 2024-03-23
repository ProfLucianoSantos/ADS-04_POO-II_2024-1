<?php

$idade = 23;

if ($idade > 18) {
    echo "Você tem $idade anos. Pode entrar <BR>";
    echo "Você é maios de idade";
}



// || signica OU   && este é o E
if ($idade == 18 || $idade > 18) {
    echo "Você tem $idade anos.<br>";
    echo "Pode entrar";
}

$idade = 17;

echo "Você só pode entrar se tiver a partir de 18 anos <br>";

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}
echo "Você só tem $idade anos. Você não pode entrar";


$idade = 21;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . "<br>";

if ($idade >= 18) {
    echo "Você tem $idade anos." . "<br>";
    echo "Pode entrar";
    echo "<br>";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
    echo "<br>";
}

echo "<br>";
echo "Adeus!";

?>