<?php
include '../logic.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="POST">
        <input type="hidden" name="testId" value="4">
        <input type="hidden" name="questionNumber" value="3">
        <p>Если ты знаешь сколько 2 + 2 и ты не голубь то ты?</p>
        <input type="text" name="answer">
        <input type="submit" name="send" value="next">
    </form>
    </br><a href="page_two.php">Назад</a>
</body>
</html>
