<?$categories = ['Доски и лыжи', "Крепления", "Ботиники", "Одежда", "Инструменты", "Разное"];
$stuff = [
   [
   'NAME' => 'Rossingol district snowboadr',
   'CATEGORY' => 'Доски и лыжи',
   'PRICE'     => '1099',
   'URL'   => '/img/lot-1.jpg'
   ],
   [
   'NAME' => 'DC ply mens snowboard',
   'CATEGORY' => 'Доски и лыжи',
   'PRICE'     => '159999',
   'URL'   => '/img/lot-2.jpg'
   ],
   [
   'NAME' => 'Крепления Union',
   'CATEGORY' => 'Крепления',
   'PRICE'     => '8000',
   'URL'   => '/img/lot-3.jpg'
   ],
   [
   'NAME' => 'Ботинки для сноуборда',
   'CATEGORY' => 'Ботинки',
   'PRICE'     => '10999',
   'URL'   => '/img/lot-4.jpg'
   ],
   [
   'NAME' => 'Куртка для сноуборда',
   'CATEGORY' => 'Одежда',
   'PRICE'     => '7500',
   'URL'   => '/img/lot-5.jpg'
   ],
   [
   'NAME' => 'Маска Oakley',
   'CATEGORY' => 'Разное',
   'PRICE'     => '5400',
   'URL'   => '/img/lot-6.jpg'
   ],


];
date_default_timezone_set("Europe/Moscow");
$ts = time();
$toMidnightTime = strtotime('tomorrow');
$secsToMindight = ($toMidnightTime - $ts);
$hours = floor($secsToMindight / 3600);
$minutes = floor(($secsToMindight % 3600) / 60);
$timeDiff = floor($toMidnightTime - $unixtime) % 3600;


?>
