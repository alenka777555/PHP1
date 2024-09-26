<?php
header('Content-Type: text/html; charset=utf-8');

// 1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.

echo 'Задание 1 !' . PHP_EOL;
$num = 0;
echo 'Числа, которые делятся на 3 без остатка: ' . PHP_EOL;;
while ( $num <= 100) {
    $a = 3;
    if ( $num % $a === 0) {
        echo $num . PHP_EOL;
        $num++;
    } else{
        $num++; 
    }
}
echo $number . PHP_EOL;

// 2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
// 0 – это ноль.
// 1 – нечетное число.
// 2 – четное число.
// 3 – нечетное число.
// …
// 10 – четное число.

echo 'Задание 2 !' . PHP_EOL;

function number ($c) {
	do {
    	if ($c === 0) {
			echo "0 - это ноль" . PHP_EOL;
		}
		else if ( $c !== 0 && $c % 2 === 0) {
			echo  $c . " - четное число" . PHP_EOL;
		}
		else {
			echo  $c . " - нечетное число" . PHP_EOL;
		}	
  	$c++;
	} while ($c <= 10);
};

number(0);

// 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями 
//городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
// Московская область:
// Москва, Зеленоград, Клин
// Ленинградская область:
// Санкт-Петербург, Всеволожск, Павловск, Кронштадт
// Рязанская область … (названия городов можно найти на maps.yandex.ru)
echo 'Задание 3 !' . PHP_EOL;

$regionArr = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Новгородская область:' => ['Великий Новгород', 'Старая Русса', 'Боровичи', 'Пестово', 'Окуловка']
];

foreach ($regionArr as $key => $value) {
    echo $key . PHP_EOL;
    $count = count($value);
    for ($i = 0; $i < $count; $i++) {
        if ($i !== $count - 1) {
            echo $value[$i] . ', ';
        } else {
            echo $value[$i] . PHP_EOL;
        }
    }
}

// 4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания
// (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
// Написать функцию транслитерации строк.
echo 'Задание 4 !' . PHP_EOL;

function trancslit ($name) {
    $alfavit = array('а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'ye', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 
    'к'=>'k', 'л'=>'l','м'=>'m', 'н'=>'n','о'=>'o', 'п'=>'p','р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u','ф'=>'f','х'=>'kh', 'ц'=>'ts', 
    'ч'=>'ch', 'ш'=>'sh','щ'=>'tch', 'ъ'=>'"', 'ы'=>'y', 'ь'=>'`', 'э'=>'e', 'ю'=>'yu', 'я'=>'ya');

    $nameArr = preg_split('//u', $name,-1, PREG_SPLIT_NO_EMPTY);
    $count = count($nameArr);
    foreach($nameArr as $val) {
        $text .= (isset($alfavit[$val])) ? $alfavit[$val] : $val; 
    }
    return $text . PHP_EOL;
}

echo trancslit ($name = 'фатима');

// 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
echo 'Задание 5 !' . PHP_EOL;

echo changeSpaces('Здесь типа есть какой-то текст очень интересный');
function changeSpaces($str, $separator = '_') {
  $arr = explode(' ', $str);
  return implode($separator, $arr) . PHP_EOL;
}

// 6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню 
//как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
echo 'Задание 6 !' . PHP_EOL;

$menu = [
    'Главная',
	'Меню' => ['Subitem 1', 'Subitem 2', 'Subitem 3'],
	'Контакты'
];

$count = count($menu);
$countSubmenu = count($menu[1]);

foreach ($menu as $key => $value) {
	if (is_numeric($key)) {
		echo $value . PHP_EOL;
	} 
	else {
		echo $key . PHP_EOL;
		foreach ($menu[$key] as $key1 => $value1) {
			echo $value1 . PHP_EOL;
		}
	}
};


// 7. *Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так:
//for (…){ // здесь пусто}

echo 'Задание 7 !' . PHP_EOL;

for ($i = 0; $i < 10 ; print $i++ . ' ' . PHP_EOL) {
    // здесь пусто
}

// 8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
echo 'Задание 8 !' . PHP_EOL;
$regionArr = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Новгородская область:' => ['Великий Новгород', 'Крестцы', 'Боровичи', 'Пестово', 'Окуловка']
];

$let = 'К';

foreach ($regionArr as $key => $value) {
    echo $key . PHP_EOL;
    $count = count($value);
    for ($i = 0; $i < $count; $i++) {
        $explodeArr = preg_split('//u', $regionArr[$key][$i], 0, PREG_SPLIT_NO_EMPTY);
        if ($i !== $count) {
            if ($explodeArr[0] == $let) {
                echo $value[$i] . ' ' . PHP_EOL;
            } 
        } else {
            echo "Что-то пошло не так";
       }
    }
}


// 9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, 
// производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании 
// url-адресов на основе названия статьи в блогах).

echo 'Задание 9 !' . PHP_EOL;


function trancslitText ($str, $separator = '_') {

    $alfavit = array('а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'й'=>'iy',
    'к'=>'k', 'л'=>'l','м'=>'m', 'н'=>'n','о'=>'o', 'п'=>'p','р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u','ф'=>'f','х'=>'kh', 'ц'=>'ts', 
    'ч'=>'ch', 'ш'=>'sh','щ'=>'tch', 'ъ'=>'"', 'ы'=>'y', 'ь'=>'`', 'э'=>'e', 'ю'=>'yu', 'я'=>'ya');

    $strArr = preg_split('//u', $str,-1, PREG_SPLIT_NO_EMPTY);
    $count = count($strArr);
    
    $text = '';

    foreach($strArr as $val) {
        $text .= (isset($alfavit[$val])) ? $alfavit[$val] : $val; 
    }

    $arr = explode(' ', $text);
    $text = implode($separator, $arr);
    return $text;
}

echo trancslitText($str = 'здесь типа есть какой-то текст очень интересный');

?>




