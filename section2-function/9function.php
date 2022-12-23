<?php

/**
 * Hàm và các tham trị, tham chiếu trong hàm
 */

#1. truyền tham trị
function showMyName($name = '', $age, $address = 'vietnam')
{
    echo $name . '<br/>';
    echo $age . '<br/>';
}

showMyName('Hoàng', 25, 'Thai Binh');

#2. Truyền tham trị
function changeValue($value)
{
    $value = 20;
    return $value;
}

$number = 10;
echo changeValue($number); // 20
echo '<br/>';
echo $number; // 10
echo '<br/>';

#2. Truyền tham chiếu
function changeValue2(&$value)
{
    $value = 20;
    return $value;
}

$number = 10;
echo changeValue2($number); // 20
echo '<br/>';
echo $number; // 20