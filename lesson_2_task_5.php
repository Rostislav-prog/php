<?php

$content = renderTemplate("about", 1234);
$main = renderTemplate("menu");
$title = "главная";

echo renderTemplate("layout", $content, $main, $title);

function renderTemplate($page, $content = '', $main = '', $title = '')
{
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}