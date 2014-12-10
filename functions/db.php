<?php
require_once  './config.php';
config();

//выборка всех новостей
function DBQuery($sql)
{  
    $res = mysql_query($sql);
    if (!$res) 
		die(mysql_error());
      
    $ret = array();
    while ($row = mysql_fetch_assoc($res))
    {
        $ret[] = $row;
    }
    return $ret;
}

//добавление новости
function ADD($title, $text)
{
    $res = mysql_query("INSERT INTO news (title, text) VALUES ('$title', '$text')");
    if (!res) die("DB error: ".mysql_error());
        else
        echo 'Статья добавлена. ID:' .mysql_insert_id();
}

//Получение конкретной статьи
function DBArticle($sql)
{
    $res = mysql_query($sql);
    if (!$res)
        die(mysql_error());

    $ret = mysql_fetch_assoc($res);
    return $ret;
}
?>