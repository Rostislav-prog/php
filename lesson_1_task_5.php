<?php

  $a = 1;
  $b = 2;

  echo "variable a = {$a}";
  echo "<br>";
  echo "variable b = {$b}";
  echo "<br>";
  
  $a = $b + $a;
  $b = $a - $b;
  $a = $a - $b;
  
  echo "changed variable a = {$a}";
  echo "<br>";
  echo "changed variable b = {$b}";