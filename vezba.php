<?php

$cena = 500;
$iznosPoreza = 0.22;
$porez = $cena*$iznosPoreza;

$totalnaCena = $cena+$porez;
echo "Cena bez poreza: $cena, iznos poreza: $iznosPoreza, totalna cena: $totalnaCena";

$proizvod = "Hleb ";
$proizvod .= "Rezani";
echo $proizvod;