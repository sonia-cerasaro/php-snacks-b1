<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $prima_tappa= [
      'Olimpia' => [
        'Milano' => [
          'location' => 'Olimpia',
          'squadra_casa' => 'Milano',
          'squadra_ospite' => 'Cantu',
          'punteggio_casa' => '6',
          'punteggio_ospite' => '7'
        ],
      ],
      'Olimpico' => [
        'Roma' => [
          'location' => 'Olimpico',
          'squadra_casa' => 'Roma',
          'squadra_ospite' => 'Lecce',
          'punteggio_casa' => '9',
          'punteggio_ospite' => '4',
        ],
      ],
    ];
    // echo $prima_tappa['Olimpia']['Verona']['squadra_ospite'];
    // var_dump($prima_tappa);
    ?>

    <p>
    <?php

    for ($i=1; $i < count($prima_tappa) ; $i++) {
      echo $prima_tappa['Olimpia']['Milano']['location'].' ' .':' .' ';
      echo $prima_tappa['Olimpia']['Milano']['squadra_casa'].' ' .'-' .' ';
      echo $prima_tappa['Olimpia']['Milano']['squadra_ospite'].' ' .'|' .' ';
      echo $prima_tappa['Olimpia']['Milano']['punteggio_casa'].' ' .'-' .' ';
      echo $prima_tappa['Olimpia']['Milano']['punteggio_ospite'].' ';
      ?>

      <br>

      <?php
      echo $prima_tappa['Olimpico']['Roma']['location'].' ' .':' .' ';
      echo $prima_tappa['Olimpico']['Roma']['squadra_casa'].' ' .'-' .' ';
      echo $prima_tappa['Olimpico']['Roma']['squadra_ospite'].' ' .'|' .' ';
      echo $prima_tappa['Olimpico']['Roma']['punteggio_casa'].' ' .'-' .' ';
      echo $prima_tappa['Olimpico']['Roma']['punteggio_ospite'];
    }
    ?>
  </p>

  </body>
</html>
