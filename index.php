<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>送信</title>
  </head>
  <body>
    <form action="cakeWrite.php" method="post">
      <div>
        <p>商品画像URL</p>
        <input type="text" name="cake_url">
      </div>
      <div>
        <p>商品タイトル</p>
        <input type="text" name="cake_title">
      </div>
      <div>
        <p>説明文</p>
        <input type="text" name="cake_explain">
      </div>
      <div>
        <p>値段</p>
        <input type="text" name="cake_price">
      </div>
      <div>
        <input type="submit" value="送信！">
      </div>
    </form>

    <?php
      print "FirstHoge";
      $db = new PDO("mysql:host=k2pdcy98kpcsweia.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=e15c99a3pvrcyx7h","v4ve7yaxpa2rgsm2","clzlpibcmu6fn5ks");

      print "SecondHoge";
      $tb = $db->query("SELECT * FROM cakes");

      print "ThirdHoge";

      while ($newtd = $tb->fetch()){
        print "YonHoge";
        $jsoncalm = $newtb['details'];
        $calm = mb_convert_encoding($jsoncalm, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $r = json_decode($calm, true);
        print "GoHoge";
        print "{$r['url']} {$r['price']} {$r['title']} {$r['explain']} <hr>";
        print "RokuHoge";
      }
    ?>
  </body>
</html>
