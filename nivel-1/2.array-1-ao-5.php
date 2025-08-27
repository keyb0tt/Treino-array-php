<?php

  $numeros = [1, 2, 3, 4, 5];

  foreach($numeros as $x){
    if($x != 1 && $x != 5){
      $x = "";
    }
    echo "$x <br>";
  }