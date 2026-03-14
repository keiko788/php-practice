<?php
session_start();

if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
    $_SESSION["win"] = 0;
    $_SESSION["lose"] = 0;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけん5回勝負</title>
</head>
<body>
    
<h1>じゃんけん(５回勝負)</h1>
<p><?php echo ($_SESSION["count"] ?? 0) + 1;?> 回目</p>
<form action="result.php" method="get">
    <input type="submit" name="hand" value="グー">
    <input type="submit" name="hand" value="チョキ">
    <input type="submit" name="hand" value="パー">
</form>
</body>
</html>