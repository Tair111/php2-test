<!DOCTYPE html>
<html>
<head>
    <title>Добавление новости</title>
    <meta content="text/html; charser=utf-8" http-equiv="content-type"
</head>
<body>
    <h1>PHP2</h1>
    <a href="index.php">Главная</a>  |
    <a>Добавление статьи</a>  |
    <a href="article.php">Показ одной статьи</a>  |
    <a href="editor.php">Редактирование статьи</a>  |
    <form method="post">
        Название:
        <br>
        <input type="text" name="title" value="">
        <br>
        <br>
        <textarea name="text"></textarea>
        <br>
        <input type="submit" name="ok" value="Добавить">
    </form>
    <hr>
</body>
</html>