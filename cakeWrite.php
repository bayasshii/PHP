<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>受信</title>
  </head>
  <body>
    <?php
      $cake_shop = htmlspecialchars($_POST["shop"],ENT_QUOTES);
      $cake_title = htmlspecialchars($_POST["title"],ENT_QUOTES);
      $cake_price = htmlspecialchars($_POST["price"],ENT_QUOTES);
      $cake_expain = htmlspecialchars($_POST["explain"],ENT_QUOTES);
      $cake_url = htmlspecialchars($_POST["url"],ENT_QUOTES);

      print $cake_shop;
      print "<hr>";
      print $cake_title;
      print "<hr>";
      print $cake_price;
      print "<hr>";
      print $cake_explain;
      print "<hr>";
      print $cake_url;
      print "<hr>";

      $db = new PDO("mysql:host=k2pdcy98kpcsweia.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=e15c99a3pvrcyx7h","v4ve7yaxpa2rgsm2","clzlpibcmu6fn5ks");

      $db->query("INSERT INTO cakes (shop,title,price,explain,url) VALUES (NULL,'$cake_shop','$cake_title','$cake_price','$cake_explain','$cake_url')");

      print "書き込みに成功しました！";

      print "<p><a href='/'>一覧表示へ</a></p>";
    ?>

  </body>
</html>
