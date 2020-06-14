<?php

$peso=65;
$altura=1.65;

  
$alturax2=$altura^2;
$imc=$peso/$alturax2;

echo("su índice de masa corporal es");
echo("<br>");
echo($imc);
echo("<br>");
echo("<br>");
echo("La clasificación del IMC, es la siguiente:");
echo("<br>");
echo("• IMC <= 18,4 =Insuficiencia de peso");
echo("<br>");
echo("• 18,5<=IMC<=24,9=Peso normal");
echo("<br>");
echo("• 25<=IMC<=29,9=Sobrepeso");
echo("<br>");

echo("• 30<=IMC<=34,9=Obesidad 1");
echo("<br>");

echo("• 35<=IMC<=39,9=Obesidad 2");
echo("<br>");

echo("• IMC>=40=Obesidad 3");



?>
