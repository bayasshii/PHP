<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ケーキ検索</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body class="center">
    <?php
      $cake_searchWord = htmlspecialchars($_POST["cake_searchWord"],ENT_QUOTES);
      /*
      TODO: 料金も絡ませた検索体験
      $cake_searchPriceMin = htmlspecialchars($_POST["cake_searchPriceMin"],ENT_QUOTES);
      $cake_searchPriceMax = htmlspecialchars($_POST["cake_searchPriceMax"],ENT_QUOTES);
      */

      $db = new PDO("mysql:host=k2pdcy98kpcsweia.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=e15c99a3pvrcyx7h","v4ve7yaxpa2rgsm2","clzlpibcmu6fn5ks");

      print "<h1>『{$cake_searchWord}』に関連するケーキの検索結果</h1>";

      $ps = $db->query("SELECT * FROM cakes WHERE title like '%$cake_searchWord%'");

      if (isset($ps)){
        while ($r = $ps->fetch()){
          print "
          <div class='cakeContents'>
            <div class='flex'>
              <div class='cakeContents__left'>
                <div class='cakeContents--title'>
                  <h2>{$r['title']}</h2>
                </div>
                <div class='cakeContents--shop'>{$r['shop']}</div>
                <div class='cakeContents--price'>{$r['price']}円</div>
              </div>
              <div class='cakeContents__right'>
                <div class='cakeContents--url'><img src='https://treeethreee.s3-ap-northeast-1.amazonaws.com/ichigoFTHG4922_TP_V.jpg' alt='cakeImg'></div>
              </div>
            </div>
            <div class='cakeContents--explanation'>
              <p>{$r['explanation']}</p>
            </div>
          </div>
          ";
        }
      }else{
        print"検索できませんでした。";
      }
      ?>

      <a href="/">一覧に戻る！</a>

    </body>
  </html>
