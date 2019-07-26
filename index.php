<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>送信</title>
  </head>
  <body>
    <p>何か喋ってよ</p>
    <form action="sns_1.php" method="post">
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
      print "~~~~~~~~~~fin~~~~~~";
    ?>
  </body>
</html>
