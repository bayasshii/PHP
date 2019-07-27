<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>送信</title>
  </head>
  <body>
    <div class="wrap">
      <header class="header">
        <h1>美味しいケーキの検索サイト</h1>
        <div class="header__search">
          <form action="cakeSearch.php" method="post">
            <div>
              <input type="text" name="cake_searchWord" placeholder="検索したい単語を入力してね" class="input__word">
            </div>
            <div>
              <p>価格検索！</p>
              <div class="flex center">
                <input type="text" name="cake_searchMin" class="input__price">
                <p>〜</p>
                <input type="text" name="cake_searchMax" class="input__price">
              </div>
            </div>
            <div class="m-auto">
              <input type="submit" value="検索！" class="btn_submit">
            </div>
          </form>
        </div>
      </header>

      <main class="main">
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

        <?php

          $db = new PDO("mysql:host=k2pdcy98kpcsweia.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=e15c99a3pvrcyx7h","v4ve7yaxpa2rgsm2","clzlpibcmu6fn5ks");

          $tb = $db->query("SELECT * FROM cakes");

          while ($r = $tb->fetch()){
            print "
            <div class='cakeContents__header'>
              <div>{$r['title']}</div>
              <div>{$r['price']}</div>
            </div>
            <div>
              <div><img src={$r['url']} alt='cakeImg'></div>
            </div>
            <div class='cakeContents__text'>
              <div>{$r['explanation']}</div>
            </div>
            ";
          }

        ?>
      <main>
    </div>
  </body>
</html>
