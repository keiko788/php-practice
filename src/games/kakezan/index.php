<?php
$num1 = rand(1,9);
$num2 = rand(1,9);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九計算</title>
</head>
<body>
    <h1>九九計算</h1>
<p>
<?php echo $num1 . " × " . $num2. " =  ? "?>
</p>
<form action="result.php" method="get">
    <input type="number" name="answer">
    <input type="hidden" name="num1" value="<?php echo $num1; ?>" >
    <input type="hidden" name="num2" value="<?php echo $num2; ?>">
    <input type="submit" value="回答">
</form>
</body>
</html>