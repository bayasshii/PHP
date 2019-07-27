<?php
require_once('config.php');
require_once('functions.php');

mb_language("uni");
mb_internal_encoding("utf-8");
mb_http_input("auto");
mb_http_output("utf-8");

$dbh = connectDb();

$sth = $dbh->prepare("SELECT * FROM cakes");
$sth->execute();

$cakeData = array();

while($row = $sth['detail']->fetch(PDO::FETCH_ASSOC)){
    $cakeData[]=array(
    'url'=>$row['cake_url'],
    'price'=>$row['cake_price'],
    'title'=>$row['cake_title'],
    'explain'=>$row['cake_explain']
    );
}

//jsonとして出力
header('Content-type: application/json');
print json_encode($cakeData);
