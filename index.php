<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ay:-)</title>
  </head>
  <body>
    <?php
    $V = 0;
    do {
      $naklad = rand(1,5);
      $V += $naklad;
      echo "Přidáno: " . $V . " tun nákladu. <br>";
    } while ($V <= 60);
      echo "Jsem naložený, odjíždím.";
     ?>
  </body>
  </html>
