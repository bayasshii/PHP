<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>受信</title>
  </head>
  <body>
    <?php
      print $_POST["my_text"];
    ?>
    <?php
      $db = new mysqli('us-cdbr-iron-east-02.cleardb.net','b1f581c6e88461','77723a9e','heroku_82cd1d27322e58c');

      if ($db->connect_error) {
        echo $db->connect_error;
        exit ();
      } else {
        $db->set_charset ( "utf8" );
        echo 'ok';
      }

      $ps = $db->query(" SELECT * FROM tb ");

      while ($r = $ps->fetch()){
        print "{$r[]}"
      }
    ?>
    <?php
    phpinfo();
    ?>

  </body>
</html>
