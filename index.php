<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ay:-)</title>
  </head>
  <body>

    <?php
    $objem = 0;
    echo "Prázdný objem:";
    while ($objem < 60){
      $naklad = rand(1,5);
      ?>  <div style="display: block; border: 1px solid #000; width: 60px; height: 10px;">
          <div style="display: block; width:<?php echo $objem; ?>px; height: 10px; background-color: green;">
            </div>
            </div>
    <?php  if  (($objem + $naklad) >= 60) {
        $naklad= 60 - $objem;
      }
      echo "Přidáno: " . $naklad . " tun nákladu. <br>";
      ?>  <?php
      $objem += $naklad;
    }
    ?>
    <div style="display: block; border: 1px solid #000; width: 60px; height: 10px;">
        <div style="display: block; width:60px; height: 10px; background-color: green;">
        </div>
    </div>
    <?php
    echo "Jsem naložený: " . $objem . " a odjíždím.";
     ?>
  </body>
  </html>
