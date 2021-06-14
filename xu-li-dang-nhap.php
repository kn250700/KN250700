<?php
$dulieuUsername_client_goi_den = $_GET['username'];
$dulieuPassword_client_goi_den = $_GET['password'];
$ghinho = isset($_GET['chkghinho'])  $_GET['chkghinho'] :'no';
if(isset($_GET['chkghinho'])) {
    $ghinho = $_GET['chkghinho'];
} else {
    $ghinho = 'no';
}



//xu li logic
// in ra thong tin ma sever nhan duoc

?>

<h1> Username: <?= $dulieuUsername_client_goi_den; ?></h1>
<h1> Username: <?= $dulieuPassword_client_goi_den; ?></h1>
<h1> co ghi nho: <?= $ghinho ?></h1>