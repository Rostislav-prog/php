<?php

// 1. С помощью цикла while вывести все числа в промежутке от 0 до 100,
//   которые делятся на 3 без остатка.

$i = 0;
while($i <= 100)
{
    echo ($i % 3 === 0)? $i: ' ';
    $i++;
}

// 2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, 
// чтобы результат выглядел так:
// 0 – ноль.
// 1 – нечетное число.
// 2 – четное число.
// 3 – нечетное число.
// …
// 10 – четное число.

echo "<br>";
echo "<br>";

$a = 0;
do {
    if ($a === 0){
        echo "$a - ноль.";
        $a++;
    } else{
        echo ($a % 2 == 0)? "<br>$a - четное число.": "<br>$a - нечетное число.";
        $a++;
    }
} while ($a <= 10);

// 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей,
// а в качестве значений – массивы с названиями городов из соответствующей области.
// Вывести в цикле значения массива, чтобы результат был таким:
// Московская область:
// Москва, Зеленоград, Клин.
// Ленинградская область:
// Санкт-Петербург, Всеволожск, Павловск, Кронштадт.
// Рязанская область … (названия городов можно найти на maps.yandex.ru)
// строго соблюдать формат вывода выше, т.е. двоеточие и точка в конце.

$arrRegion =[
"Московская область" => ["Москва", "Зеленоград", "Клин"],
"Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
"Рязанская область" => ["Рязань", "Касимов", "Скопин", "Сасово", "Ряжск", "Новомичуринск", "Рыбное", "Кораблино", "Михайлов", "Спасск-Рязанский", "Шацк", "Спас-Клепики"],
];


function foo($arr)
{
    foreach($arr as $val_1 => $val_2){
        echo "$val_1 : <br>" . implode(", ", $val_2) . ". <br>"; 
    }
}

echo "<br>";
echo "<br>";
foo($arrRegion);

//  4. Объявить массив, индексами которого являются буквы русского языка,
//  а значениями – соответствующие латинские буквосочетания
//   (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
// Написать функцию транслитерации строк. Она должна учитывать и заглавные буквы.



    $stroka = "Балалайка";
    $abc = [
	"а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "yo",
	"ж" => "zh", "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l", "м" => "m",
    "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "у" => "u",
    "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "s'h", "ъ" => "",
    "ы" => "i", "ь" => "'", "э" => "e", "ю" => "yu", "я" => "ya", " " => " "
    ];

    function translate($string, $abc)
    {
        echo strtr(mb_strtolower($string), $abc);
    }
    
    echo "<br>";
    echo "<br>";
    translate($stroka, $abc);

    // 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и
    // возвращает видоизмененную строчку. Можно через str_replace

    function strReplace($str){
        return str_replace(" ", "_", $str);
    }

    $str = "hhg jhg jjh jhh";

    echo "<br>";
    echo "<br>";
    echo strReplace($str);

    // 6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
    // Необходимо представить пункты меню как элементы массива и вывести их циклом.
    // Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
    // Важное, при желании можно сделать на движке 3. ВАЖНОЕ!
    
    $menu = [
        ["url" => "#", "name" => "Меню1"],
        ["url" => "#", "name" => "Меню2"],
        ["url" => "#", "name" => "Меню3"],
        ["url" => "#", "name" => "Меню4"],
    ];

    ?>

    <ul>
        <?php foreach($menu as $key => $val): ?>
        <li><a href="<?=$val["url"]?>"><?=$val["name"]?></a></li>
        <?php endforeach; ?>
    </ul>
    
    
    














