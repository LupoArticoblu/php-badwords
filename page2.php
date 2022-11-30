<?php
  $variabile = $_GET['parola_1'];
  $badWord = $_GET['bandita'];

  echo $variabile;
  echo strlen('$variabile');

  echo str_replace('$badWord','***','$variabile');