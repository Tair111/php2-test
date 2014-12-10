<?php

require_once __DIR__ . '/../functions/db.php';

if(isset($_POST['ok'])and isset($_POST['title'])and isset($_POST['text'])) {
    $title = $_POST['$title'];
    $text = $_POST['$text'];

   ADD($title, $text);
} else{
    echo "Заполните форму";

}


?>