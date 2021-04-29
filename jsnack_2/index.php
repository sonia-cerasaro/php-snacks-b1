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

    // $emailValidate = filter_var($mail, FILTER_VALIDATE_EMAIL);
    // $agevalidate = filter_var($age, FILTER_VALIDATE_INT)

    // echo $name;
    // echo $email;
    // echo $age;
    // var_dump($name);
    // var_dump($ageNumber);

    if (strlen($name)< 3) && (filter_var($email, FILTER_VALIDATE_EMAIL)) && (filter_var($age, FILTER_VALIDATE_INT)) {
    echo("I dati sono corretti.");
    } else {
    echo("C'e' un errore, inserisci di nuovo i dati.");
    }

    // if (filter_var($age, FILTER_VALIDATE_INT)) {
    // echo("$age is a number");
    // } else {
    // echo("$age is not a number");
    // }

    // if (strlen($name)< 3) {
    // echo("$name troppo corto");
    // } else {
    // echo("$name va bene");
    // }
    ?>


  </body>
</html>
