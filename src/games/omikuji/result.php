<?php
$omikuji = ["大吉","中吉","小吉","吉","末吉","凶","大凶"];
$result = $omikuji[rand(0,7)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おみくじ結果</title>
</head>
<body>
<h1>結果</h1>
<p>あなたの運勢は・・・</p>
<h2><?php echo $result;?></h2>
<a href="index.php"><button>もう一度</button></a>
</body>
</html>