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
      $db = new mysqli('us-cdbr-iron-east-02','b9e1f717777aa7:','d99be634','heroku_537e9386d49f912?reconnect=true');
      print $db;
    ?>
    <?php
    phpinfo();
    ?>

  </body>
</html>
