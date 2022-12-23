<?php

/**
 * Mảng trong PHP
 */

#1. Mảng 1 chiều tuần tự
$arr = [1, 2, 3, 4, 5];
echo $arr[0]; //1
echo '<br/>';

echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<pre>';
var_dump($arr);
echo '</pre>';

#1.2 Mảng 1 chiều k tuần tự
$arr2 = [
    'key1' => 1,
    'key2' => 'hello',
    'Learn PHP'
];
echo '<pre>';
print_r($arr2);
echo '</pre>';

#2 Mảng đa chiều
$arr3 = [
    'fullname'  => 'Tran Vu Hoang',
    'age'  => 25,
    'point'  => [
        'math_point'        => 8.25,
        'physical_point'    => 8.25,
        'chemistry_point'   => 6.75
    ]
];
echo '<pre>';
print_r($arr3);
echo '</pre>';

#Thêm phần tử vào mảng đa chiều
$arr3['point']['english_point'] = 4;
echo '<pre>';
print_r($arr3['point']);
echo '</pre>';