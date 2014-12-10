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
    <a href="article.php">Показ одной статьи</a>  |
    <a>Редактирование статьи</a>  |
    <form method="post">
        Название:
        <br>
        <input type="text" name="title" value="<?=$title?>">
        <br>
        <br>
        <textarea name="text"><?=text?></textarea>
        <br>
        <input type="submit" value="Изменить" />
		<input type="submit" name ="delete" value="Удалить" />
    </form>
    <hr>
</body>
</html>