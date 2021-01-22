<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content=" 1; url=./index.html">
    <title>音環境実験</title>
    <style>
        .registered {
            text-align: center;
            margin-top: 300px;
            font-family: "DIN Alternate";
            font-size: large;
        }
    </style>
</head>
<body>

<?php
$myfile = fopen("./otoexam.txt", "a")  //fileを上書きモードで開く
?>

<?php
date_default_timezone_set('Asia/Tokyo');
fwrite($myfile, "名前: " . $_POST['name'] . ", " . "日付: " . date("Y-m-d H:i:s") . ", " . "ファイル: " . $_POST['soundfile'] . "\n" . "美しい: " . $_POST['beautiful'] . ", " . "力強い: " . $_POST['strong'] . ", " . "弾みのある: " . $_POST['metal'] . ", " . "快い: " . $_POST['good'] . ", " . "静かな: " . $_POST['noisy'] . ", " . "落ち着いた: " . $_POST['kinkin'] . ", " . "澄んだ: " . $_POST['dirty'] . ", " . "迫力のある: " . $_POST['rich'] . ", " . "丸みのある: " . $_POST['spike'] . "\n\n");
?>

<?php
fclose($myfile);
?>

<div class="registered">
    Thanks.
</div>
</body>
</html>