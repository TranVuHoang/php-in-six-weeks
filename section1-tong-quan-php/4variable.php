<?php

/**
 * Biến trong PHP
 */

#1. Biến toàn cục
$fullname = 'Hoàng Trần';
$age = 25;

echo $fullname;
echo '<br/>';
echo $age;

$int = 1;

#2. Biến cục bộ
function testVariable()
{
    global $int;

    $int = 10;
    $age = 0;
    echo 'Giá trị của biến $age trong hàm là: ' . $age;
}

echo '<br/>';
testVariable();
echo '<br/>';
echo 'Giá trị của biến $age ngoài hàm là: ' . $age;
echo '<br/>';
echo 'Giá trị của biến $int: ' . $int;
