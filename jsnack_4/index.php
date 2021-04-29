<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $students = [
      1 => [
        'name' => 'Harry',
        'surname' => 'Potter',
        'votes' => [3, 4, 2, 8, 6]
      ],
      2 => [
        'name' => 'Hermione',
        'surname' => 'Granger',
        'votes' => [10, 12, 500, 2]
      ],
      3 => [
        'name' => 'Ronald',
        'surname' => 'Weasley',
        'votes' => [1, 1, 1, 10, 9, 7]
      ],
    ];

    foreach ($students as $student => $infos) {
      $average = array_sum($infos['votes']) / count($infos['votes']);
      echo $infos['name'].' ';
      echo $infos['surname'].' ';
      echo ceil($average). "<br>";
    }
     ?>

  </body>
</html>
