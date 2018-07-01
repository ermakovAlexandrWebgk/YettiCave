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

function template($__view, $__data)
{
    extract($__data);

    ob_start();

    require $__view;

    $output = ob_get_clean();

    return $output;
}
