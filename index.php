<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>送信</title>
  </head>
  <body>
    <form action="sns_1.php" method="post">
      <div>
        <p>名前</p>
        <input type="text" name="name">
      </div>
      <div>
        <p>値段</p>
        <input type="text" name="price">
      </div>
      <input type="submit" value="送信！">
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
        $r = json_decode($jsoncalm, true);
        print "GoHoge";
        echo "-----------------";
        echo $r;
        echo "-----------------";
        print "{$r['url']} {$r['price']} {$r['title']} {$r['explain']}<hr>";
      }
    ?>
  </body>
</html>
