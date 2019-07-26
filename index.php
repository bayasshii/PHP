<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>送信</title>
  </head>
  <body>
    <p>何か喋ってよ</p>
    <form action="/" method="post">
      <div>
        <p>名前</p>
        <input type="text" name="name">
      </div>
      <div>
        <p>値段</p>
        <input type="text" name="price">
      </div>
      <div>
        <p>説明</p>
        <textarea type="text" name="eplain"></textarea>
      </div>
      <input type="submit" value="送信！">
    </form>

    <?php
      $product_name = htmlspecialchars($_POST["name"], END_QUOTES);
      $product_price = htmlspecialchars($_POST["price"], END_QUOTES);
      $product_eplain = htmlspecialchars($_POST["eplain"], END_QUOTES);

      print $_POST["name"];
      print $_POST["price"];
      print $_POST["eplain"];

      $db = new PDO("mysql:host=us-cdbr-iron-east-02.cleardb.net;dbname=heroku_82cd1d27322e58c","b1f581c6e88461","77723a9e");

      $db->query("INSERT INTO products (id,name,price,eplain))
                  VALUES (NULL, '$product_name', '$product_price', '$product_eplain')");
      print "書き込みに成功しました！";
      print "<p><a href='/'>一覧表示へ</a></p>"
    ?>
  </body>
</html>
