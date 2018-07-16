<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница 1</title>
</head>
<body>
    <form action="page_two.php" method="POST">
        <input type="hidden" name="testId" value="4">
        <input type="hidden" name="questionNumber" value="1">
        <p>2 + 2 = ?</p>
        <input type="text" name="answer">
        <input type="submit" name="send" value="next">
    </form>
    </br><a href="../index.php">Назад</a>
</body>
</html>