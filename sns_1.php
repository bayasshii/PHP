<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>受信</title>
  </head>
  <body>
    <?php
      $product_name = htmlspecialchars($_POST["name"], END_QUOTES);
      $product_price = htmlspecialchars($_POST["price"], END_QUOTES);

      print $_POST["name"];
      print $_POST["price"];

      $db = new PDO("mysql:host=us-cdbr-iron-east-02.cleardb.net;dbname=heroku_82cd1d27322e58c","b1f581c6e88461","77723a9e");

      $db->query("INSERT INTO products (id,name,price)) VALUES (10, '$product_name', '$product_price')");

      print "書き込みに成功しました！";
      print "<p><a href='/'>一覧表示へ</a></p>"
    ?>

  </body>
</html>
