<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ケーキ検索</title>
  </head>
  <body>
    <?php
      $cake_searchWord = htmlspecialchars($_POST["cake_searchWord"],ENT_QUOTES);
      $cake_searchPriceMin = htmlspecialchars($_POST["cake_searchPriceMin"],ENT_QUOTES);
      $cake_searchPriceMax = htmlspecialchars($_POST["cake_searchPriceMax"],ENT_QUOTES);

      $db = new PDO("mysql:host=k2pdcy98kpcsweia.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=e15c99a3pvrcyx7h","v4ve7yaxpa2rgsm2","clzlpibcmu6fn5ks");

      $ps = $db->query("SELECT * FROM cakes WHERE title like '%$cake_searchWord%' OR explain like '%$cake_searchWord%');

      while ($r = $ps->fetch()){
        print "{$r['shop']} {$r['title']} {$r['price']} {$r['explanation']} {$r['url']}<hr>";
      }
      ?>

    </body>
  </html>
