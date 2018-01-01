<?php
 
//lendo  o arquivo
$lista = file_get_contents("lista.txt");

$linhas = explode("\n", $lista);

$total = count($linhas);

$n = rand(0, $total-1);

echo "ganhador é: ".$linhas[$n]."<br/>";

echo "total de participantes: " .$total;
