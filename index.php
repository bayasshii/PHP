<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>送信</title>
  </head>
  <body>
    <p>何か喋ってよ</p>
    <form action="sns_1.php" method="post">
      <p>名前</p>
      <input type="text" name="name">
      <p>値段</p>
      <input type="text" name="price">
      <p>説明</p>
      <textarea type="text" name="eplain"></textarea>
      <input type="submit" value="送信！">
    </form>

    <?php

      $db = new PDO("mysql:host=us-cdbr-iron-east-02.cleardb.net;dbname=heroku_82cd1d27322e58c","b1f581c6e88461","77723a9e");

      $ps = $db->query("SELECT * FROM products");

      $r = $ps->fetch();

      print "{$r['id']} {$r['name']} {$r['price']} {$r['eplain']}";
    ?>
  </body>
</html>
