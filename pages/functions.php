<? function arshow ($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    return $array;
}

function priceFormat($price){
$newInt = ceil($price);
    if($newInt > 1000){
        $newInt = number_format($newInt, 0, ' ' ,' ');
    }
        $newInt .= ' ₽';
         return $newInt;
}