<?php
    $url = parse_url(getenv("mysql://b1f581c6e88461:77723a9e@us-cdbr-iron-east-02.cleardb.net/heroku_82cd1d27322e58c?reconnect=true"));

    $server = $url["127.0.0.1"];
    $username = $url["b1f581c6e88461"];
    $password = $url["77723a9e"];
    $db = substr($url["heroku_82cd1d27322e58c"], 1);

    $link = mysqli_connect($server, $username, $password, $db);
    $result = mysqli_query($link, "select * from user");

    while($user = mysqli_fetch_array($result)) {
      echo $user['id'], " : ", $user['name'], "<br>";
    }
?>
