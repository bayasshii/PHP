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
        <p>ケーキの名前</p>
        <input type="text" name="cake_title">
      </div>
      <div>
        <p>特徴</p>
        <input type="text" name="cake_explanation">
      </div>
      <div>
        <p>値段</p>
        <input type="text" name="cake_price">
      </div>
      <div>
        <p>ケーキの画像URL</p>
        <input type="text" name="cake_url">
      </div>
      <div>
        <input type="submit" value="送信！">
      </div>
    </form>

    <form action="cakeSearch.php" method="post">
      <div>
        <p>ケーキ検索！</p>
        <input type="text" name="cake_searchWord">
      </div>
      <div>
        <p>価格検索！</p>
        <input type="text" name="cake_searchMin">
        <p>〜</p>
        <input type="text" name="cake_searchMax">
      </div>
      <div>
        <input type="submit" value="検索！">
      </div>
    </form>

    <?php

      $db = new PDO("mysql:host=k2pdcy98kpcsweia.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=e15c99a3pvrcyx7h","v4ve7yaxpa2rgsm2","clzlpibcmu6fn5ks");
      $tb = $db->query("SELECT * FROM cakes");

      while ($r = $tb->fetch()){
        print "
        <div class="cakeContents__header">
          <div>{$r['title']}</div>
          <div>{$r['price']}</div>
        </div>
        <div>
          <div><img src=$r['url'] alt="cakeImg"/></div>
        </div>
        <div class="cakeContents__text">
          <div>{$r['explanation']}</div>
        </div>
        ";
      }
    ?>
  </body>
</html>
