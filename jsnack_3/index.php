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

    // foreach ($posts as $row => $innerArray) {
    //   foreach ($innerArray as $innerRow => $info) {
    //     echo $row.' ' .':' .' ';
    //     echo $info['title']. "<br>";
    //   }
    // }

     ?>
  </p>

  <?php

  $post_keys = array_keys($posts);

  for ($i=0; $i < count($post_keys) ; $i++) {
    // var_dump($posts[$post_keys[$i]]);
    
    $posts_by_key = $posts[$post_keys[$i]];

    for ($j=0; $j < count($posts_by_key) ; $j++) {
      $post = $posts_by_key[$j];

      // var_dump($posts_by_key[$j]);
      echo $post_keys[$i] .'<br>';
      echo $post['title'] .'<br>';
      echo $post['author'] .'<br>';
      echo $post['text'] .'<br>';
    }
  }

   ?>

  </body>
</html>
