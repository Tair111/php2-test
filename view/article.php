<!DOCTYPE html>
<html>
<head>
    <title>Добавление новости</title>
    <meta content="text/html; charser=utf-8" http-equiv="content-type"
</head>
<body>
<h1>PHP2</h1>
<a href="index.php">Главная</a>  |
<a href="add.php">Добавление статьи</a>  |
<a>Показ одной статьи</a>  |
<a href="editor.php">Редактирование статьи</a>  |
<hr>

    <article>
        <h1><?=$news['title'];?></h1>
        <div><?=$news['text'];?></div>
    </article>

<hr>
</body>
</html>

