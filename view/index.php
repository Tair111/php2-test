<html>
<head>
    <title>Новости</title>
</head>
<body>
    <h1>PHP2</h1>
    <a>Главная</a>  |
    <a href="add.php">Добавление статьи</a>  |
    <a href="article.php">Показ одной статьи</a>  |
    <a href="editor.php">Редактирование статьи</a>  |
    <?php foreach ($news as $article): ?>
    <article>
        <h1><?=$article['title'];?></h1>
        <div><?=$article['text'];?></div>
		<hr>
    </article>
    <?php endforeach; ?>
</body>
</html>