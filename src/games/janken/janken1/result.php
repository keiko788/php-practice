<?php
$player = htmlspecialchars($_GET['hand'], ENT_QUOTES);
$hands = ["グー", "チョキ", "パー"];
$computer = $hands[rand(0, 2)];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけん結果</title>
</head>

<body>
    <h1>結果</h1>
    <p>あなた：<?php echo $player; ?></p>
    <p>コンピューター：<?php echo $computer; ?></p>
    <p><?php if ($player == $computer) {
            echo "あいこ";
        } elseif (($player == "グー" && $computer == "チョキ") ||
            ($player == "チョキ" && $computer == "パー") ||
            ($player == "パー" && $computer == "グー")
        ) {
            echo "あなたの勝ち🏅";
        } else {
            echo "あなたの負け";
        }
        ?></p>
    <br />
    <a href="index.php"><button>もう１回</button></a>
</body>

</html>