<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

       // Creare una variabile con un paragrafo di testo
        $paragrafo = "Questo è un esempio di paragrafo di testo.";

      // Stampare a schermo il paragrafo e la sua lunghezza
        echo $paragrafo;
        echo "<br>";
        echo strlen($paragrafo);
        echo "<br>";


       // Una parola da censurare viene passata dall'utente tramite parametro GET
          $parola_censurata = $_GET['parola'];

       // Sostituire con tre asterischi tutte le occorrenze della parola da censurare
           $paragrafo_censurato = str_replace($parola_censurata, '***', $paragrafo);

       // Stampare di nuovo il paragrafo censurato e la sua lunghezza
          echo $paragrafo_censurato;
          echo "<br>";
          echo strlen($paragrafo_censurato);

    ?>
</body>
</html>