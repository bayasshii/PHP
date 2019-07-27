<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>ケーキ検索サイト</title>
  </head>
  <body>
    <div class="wrap">
      <header class="header">
        <h1>美味しいケーキの検索サイト</h1>
        <div class="header__search">
          <form action="cakeSearch.php" method="post">
            <div class="flex">
              <input type="text" name="cake_searchWord" placeholder="検索したい単語を入力してね" class="input__word">
              <!--
              TODO: 料金も絡ませた検索体験
              <div>
                <div class="flex center">
                  <input type="text" name="cake_searchMin" class="input__price">
                  <p>〜</p>
                  <input type="text" name="cake_searchMax" class="input__price">
                </div>
              </div>
              -->
              <input type="submit" value="検索" class="btn_submit">
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
      </main>

        <?php

          $db = new PDO("mysql:host=k2pdcy98kpcsweia.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=e15c99a3pvrcyx7h","v4ve7yaxpa2rgsm2","clzlpibcmu6fn5ks");

          $tb = $db->query("SELECT * FROM cakes");

          while ($r = $tb->fetch()){
            print "
            <div class='cakeContents'>
              <div class='flex'>
                <div class='cakeContents__left'>
                  <div class='cakeContents--title'>
                    <h2>{$r['title']}</h2>
                  </div>
                  <div class='cakeContents--shop'>
                    <p>{$r['shop']}</p>
                  </div>
                  <div class='cakeContents--explanation'>
                    <p>{$r['explanation']}</p>
                  </div>
                </div>
                <div class='cakeContents__right'>
                  <div class='cakeContents--url'><img src='https://treeethreee.s3-ap-northeast-1.amazonaws.com/ichigoFTHG4922_TP_V.jpg' alt='cakeImg'></div>
                  <div class='cakeContents--price'>{$r['price']}円</div>
                </div>
              </div>
            </div>
            ";
          }
        ?>
    </div>
  </body>
</html>
