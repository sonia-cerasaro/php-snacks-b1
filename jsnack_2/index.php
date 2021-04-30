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
    echo("Your info are correct. Thank you.");
    } else {
    echo("An error was detected, please fill out the form again.");
  }

    ?>

  </body>
</html>
