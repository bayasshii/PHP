<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>送信</title>
  </head>
  <body>
    <form action="cakeWrite.php" method="post">
      <div>
        <p>お店</p>
        <input type="text" name="cake_shop">
      </div>
      <div>
        <p>商品タイトル</p>
        <input type="text" name="cake_title">
      </div>
      <div>
        <p>説明文</p>
        <input type="text" name="cake_explanation">
      </div>
      <div>
        <p>値段</p>
        <input type="text" name="cake_price">
      </div>
      <div>
        <p>商品画像URL</p>
        <input type="text" name="cake_url">
      </div>
      <div>
        <input type="submit" value="送信！">
      </div>
    </form>

    <?php
      $db = new PDO("mysql:host=k2pdcy98kpcsweia.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=e15c99a3pvrcyx7h","v4ve7yaxpa2rgsm2","clzlpibcmu6fn5ks");
      $tb = $db->query("SELECT * FROM cakes");

      while ($r = $tb->fetch()){
        print "{$r['shop']} {$r['title']} {$r['price']} {$r['explanation']} {$r['url']}<hr>";
      }
    ?>
  </body>
</html>
