<?php
include '../logic.php';
$answer = [
    'test_4' => [4, 'Нет', 'Курлык']
];
$userAnswer = $_SESSION["test_{$_POST['testId']}"];
if ( !array_diff($userAnswer, $answer["test_{$testId}"])) {
    echo 'Ты почти голубь';
} else {
    echo 'Ты совсем голубь';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ваш ответ</title>
</head>
<body>
    </br><a href="page_three.php">Назад</a>
</body>
</html>
