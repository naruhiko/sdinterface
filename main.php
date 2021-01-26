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
fwrite($myfile, $_POST['name'] . ", " . date("Y-m-d H:i:s") . ", " . $_POST['soundfile'] . ", " . $_POST['beautiful'] . ", " . $_POST['strong'] . ", " . $_POST['metal'] . ", " . $_POST['good'] . ", " . $_POST['noisy'] . ", " . $_POST['kinkin'] . ", " . $_POST['dirty'] . ", " . $_POST['rich'] . ", " . $_POST['spike'] . "\n");
?>

<?php
fclose($myfile);
?>

<div class="registered">
    Thanks.
</div>
</body>
</html>