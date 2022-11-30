<?php
  $parola_1 = $_GET['parola_1'];
  $bandita = $_GET['bandita'];

  echo $parola_1 . '<br>';
  echo 'La lunghezza è di ' . strlen($parola_1) . ' caratteri<br>';

  echo str_replace($bandita,'***',$parola_1);