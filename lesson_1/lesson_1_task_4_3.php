<?php

$h1 = "Информация обо мне";
$title = "Главная страница - страница обо мне";
$date = date('Y');
$imageName = rand(1,2);

$content = file_get_contents("site.html");
$content = str_replace("{{ title }}", $title, $content);
$content = str_replace("{{ h1 }}", $h1, $content);
$content = str_replace("{{ date }}", $date, $content);
$content = str_replace("{{ imageName }}", $imageName, $content);

echo $content;