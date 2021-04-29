<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $name = $_GET['getName'];
    $email = $_GET['getMail'];
    $age = $_GET['getAge'];

    if (strlen($name) > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($age, FILTER_VALIDATE_INT)) {
    echo("I dati sono corretti.");
    } else {
    echo("C'e' un errore, inserisci di nuovo i dati.");
  }
  
    ?>


  </body>
</html>
