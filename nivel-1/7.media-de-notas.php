<?php

$notas = [10, 9, 7];

$media = array_sum($notas) / 3;

echo "\n A média das notas foi de: ".number_format($media, 2, ",", ".");