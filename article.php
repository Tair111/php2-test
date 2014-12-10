<?php

require_once 'models/article.php';

$news = article();

include '/view/article.php';