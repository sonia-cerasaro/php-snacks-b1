<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $posts = [
      '10/01/2019' => [
          [
              'title' => 'Post 1',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 1'
          ],
          [
              'title' => 'Post 2',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 2'
          ],
      ],
      '10/02/2019' => [
          [
              'title' => 'Post 3',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 3'
          ]
      ],
      '15/05/2019' => [
          [
              'title' => 'Post 6',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 6'
          ]
      ],
  ];

  ?>

  <p>
    <?php
    foreach ($posts as $row => $innerArray) {
      foreach ($innerArray as $innerRow => $info) {
        echo $row.' ' .':' .' ';
        echo $info['title']. "<br>";
      }
    }
     ?>
  </p>


  </body>
</html>
