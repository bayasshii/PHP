<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>受信</title>
  </head>
  <body>
    <?php
      $cake_shop = htmlspecialchars($_POST["cake_shop"],ENT_QUOTES);
      $cake_title = htmlspecialchars($_POST["cake_title"],ENT_QUOTES);
      $cake_price = htmlspecialchars($_POST["cake_price"],ENT_QUOTES);
      $cake_explanation = htmlspecialchars($_POST["cake_explanation"],ENT_QUOTES);
      $cake_url = htmlspecialchars($_POST["cake_url"],ENT_QUOTES);

      print $cake_shop;
      print "<hr>";
      print $cake_title;
      print "<hr>";
      print $cake_price;
      print "<hr>";
      print $cake_explanation;
      print "<hr>";
      print $cake_url;
      print "<hr>";

      $db = new PDO("mysql:host=k2pdcy98kpcsweia.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=e15c99a3pvrcyx7h","v4ve7yaxpa2rgsm2","clzlpibcmu6fn5ks");

      $db->query("INSERT INTO cakes (shop,title,price,explanation,url) VALUES ('$cake_shop','$cake_title','$cake_price','$cake_explanation','$cake_url')");

      print "書き込みに成功しました！";

      print "<p><a href='/'>一覧表示へ</a></p>";
    ?>

  </body>
</html>
