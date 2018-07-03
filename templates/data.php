<?
$categories = ['Доски и лыжи', "Крепления", "Ботиники", "Одежда", "Инструменты", "Разное"];
$stuff = [
   [
    'ID' => 1,
   'NAME' => 'Rossingol district snowboadr',
   'CATEGORY' => 'Доски и лыжи',
   'PRICE'     => '1099',
   'URL'   => '/img/lot-1.jpg'
   ],
   [
    'ID' => 2,
   'NAME' => 'DC ply mens snowboard',
   'CATEGORY' => 'Доски и лыжи',
   'PRICE'     => '159999',
   'URL'   => '/img/lot-2.jpg'
   ],
   [
    'ID' => 3,
   'NAME' => 'Крепления Union',
   'CATEGORY' => 'Крепления',
   'PRICE'     => '8000',
   'URL'   => '/img/lot-3.jpg'
   ],
   [
     'ID' => 4,
   'NAME' => 'Ботинки для сноуборда',
   'CATEGORY' => 'Ботинки',
   'PRICE'     => '10999',
   'URL'   => '/img/lot-4.jpg'
   ],
   [
     'ID' => 5,
   'NAME' => 'Куртка для сноуборда',
   'CATEGORY' => 'Одежда',
   'PRICE'     => '7500',
   'URL'   => '/img/lot-5.jpg'
   ],
   [
    'ID' => 6,
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
