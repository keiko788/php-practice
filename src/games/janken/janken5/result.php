<?php
session_start();
if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
}
if (!isset($_SESSION["win"])) {
    $_SESSION["win"] = 0;
}
if (!isset($_SESSION["lose"])) {
    $_SESSION["lose"] = 0;
}

$player = $_GET['hand'];
$hands = ["グー", "チョキ", "パー"];
$computer = $hands[rand(0, 2)];

$current_round = $_SESSION['count'] + 1;
$_SESSION['count']++;

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>
</head>

<body>
    <h1>結果</h1>
    <p><?php echo $current_round; ?>回目</p>
        <p>あなた：<?php echo $player ?></p>
        <p>コンピューター：<?php echo $computer ?></p>
        <p> <?php
            if ($player == $computer) {
                echo 'あいこ！！';
            } elseif (($player == 'グー' && $computer == 'チョキ') ||
                ($player == 'チョキ' && $computer == 'パー') ||
                ($player == 'パー' && $computer == 'グー')
            ) {
                echo 'あなたの勝ち🏅！！';
                $_SESSION["win"]++;
            } else {
                echo 'あなたの負け';
                $_SESSION["lose"]++;
            }
            ?>
        </p>
        <p><?php
            if ($_SESSION['count'] < 5) {
            ?>
                <a href="index.php"><button>次へ</button></a>
            <?php
            } else {
            ?>
        <h2>最終結果</h2>
        <?php
                if ($_SESSION['win'] > $_SESSION['lose']) {
                    echo 'あなたの勝ち🏆！！';
                } elseif ($_SESSION['lose'] > $_SESSION['win']) {
                    echo 'あなたの負け・・・';
                } else {
                    echo '引き分け！！';
                }
                session_destroy();
        ?>
        </p>
        <br />
        <br />
        <a href="index.php"><button>もう一度勝負</button></a>
    <?php
            }
    ?>
</body>

</html>