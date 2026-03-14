<?php
$num1 = htmlspecialchars($_GET['num1'], ENT_QUOTES);
$num2 = htmlspecialchars($_GET['num2'], ENT_QUOTES);
$answer = htmlspecialchars($_GET['answer'], ENT_QUOTES);
$result = $num1 * $num2;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>
</head>

<body>
    <h1>結果</h1>
    <p><?php
        if ($answer == $result) {
            echo '正解！！';
        } else {
            echo '残念！！';
        }
        ?>
    </p>
    <p><?php echo $num1 . "　×　" . $num2 . "　=　" . $result; ?></p>

    <a href="index.php"><button>もう一回</button></a>
</body>

</html>