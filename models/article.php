<?php

require_once __DIR__ . '/../functions/db.php';

function article(){
    $id = $_GET['id'];
    return DBArticle("
    SELECT * FROM news WHERE id = $id
    ");
}