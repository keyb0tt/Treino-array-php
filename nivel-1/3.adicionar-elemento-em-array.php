<?php

$numeros = ["<br>", 1, 2, 3, 4, 5,];

foreach ($numeros as $x){
  echo "$x <br>";
  if($x == 5){
    $numeros[] = 6;
    foreach($numeros as $x){
      echo "$x <br>";
    }
  }
}