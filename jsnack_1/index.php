<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $prima_tappa= [
        'Milano' => [
          'location' => 'Olimpia',
          'squadra_casa' => 'Milano',
          'squadra_ospite' => 'Cantu',
          'punteggio_casa' => '6',
          'punteggio_ospite' => '7'
        ],
        'Roma' => [
          'location' => 'Olimpico',
          'squadra_casa' => 'Roma',
          'squadra_ospite' => 'Lecce',
          'punteggio_casa' => '9',
          'punteggio_ospite' => '4',
        ],
    ];
    ?>

    <p>
    <?php

    for ($i=1; $i < count($prima_tappa) ; $i++) {
      echo $prima_tappa['Milano']['location'].' ' .':' .' ';
      echo $prima_tappa['Milano']['squadra_casa'].' ' .'-' .' ';
      echo $prima_tappa['Milano']['squadra_ospite'].' ' .'|' .' ';
      echo $prima_tappa['Milano']['punteggio_casa'].' ' .'-' .' ';
      echo $prima_tappa['Milano']['punteggio_ospite'].' ';
      ?>

      <br>

      <?php
      echo $prima_tappa['Roma']['location'].' ' .':' .' ';
      echo $prima_tappa['Roma']['squadra_casa'].' ' .'-' .' ';
      echo $prima_tappa['Roma']['squadra_ospite'].' ' .'|' .' ';
      echo $prima_tappa['Roma']['punteggio_casa'].' ' .'-' .' ';
      echo $prima_tappa['Roma']['punteggio_ospite'];
    }
    ?>
  </p>

  </body>
</html>
