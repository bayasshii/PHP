<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ケーキ検索</title>
  </head>
  <body>
    <?php
      $cake_search = htmlspecialchars($_POST["cake_search"],ENT_QUOTES);

      $db = new PDO("mysql:host=k2pdcy98kpcsweia.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=e15c99a3pvrcyx7h","v4ve7yaxpa2rgsm2","clzlpibcmu6fn5ks");

      print "{$cake_search}の検索結果";

      $ps = $db->query("SELECT * FROM cakes where title like '%$cake_search%'");

      while ($r = $ps->fetch()){
        print "{$r['shop']} {$r['title']} {$r['price']} {$r['explanation']} {$r['url']}<hr>";
      }
      ?>

    </body>
  </html>
