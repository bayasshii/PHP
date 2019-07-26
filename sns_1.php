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
      $product_eplain = htmlspecialchars($_POST["eplain"], END_QUOTES);

      print $_POST["name"];
      print $_POST["price"];
      print $_POST["eplain"];

      $db = new PDO("mysql:host=us-cdbr-iron-east-02.cleardb.net;dbname=db_ex1","b1f581c6e88461","77723a9e");

      $db->query("INSERT INTO products (id,name,price,eplain))
                  VALUES (NULL, '$product_name', '$product_price', '$product_eplain')");
      print "書き込みに成功しました！";
      print "<p><a href='/'>一覧表示へ</a></p>"
    ?>

  </body>
</html>
