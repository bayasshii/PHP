<?php
require_once('config.php');
require_once('functions.php');

mb_language("uni");
mb_internal_encoding("utf-8"); //内部文字コードを変更
mb_http_input("auto");
mb_http_output("utf-8");

$dbh = connectDb();

$sth = $dbh->prepare("SELECT * FROM cakes");
$sth->execute();

$cakeData = array();

while($row = $sth->fetch(PDO::FETCH_ASSOC)){
    $cakeData[]=array(
    'shopName'=>$row['shopName'],
    'detail'=>$row['detail']
    );
}

//jsonとして出力
header('Content-type: application/json');
echo json_encode($userData);
