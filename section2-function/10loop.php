<?php

/**
 * Vòng lặp trong PHP
 * #1. Vòng lặp for
 * #2. Vòng lặp while
 */

#1. Vòng lặp foreach
$colors = ['red', 'green', 'blue'];

foreach ($colors as $color) {
    echo $color . '| ';
}

echo '<br/>';

foreach ($colors as $key => $color) {
    echo '[key' . $key  . '] => ' . $color . '<br/>';
}

#2. Vòng lặp while
$a = 1;

while ($a < 10) {
    echo 'Giá trị của a= ' . $a . '<br/>';
    $a++;
}

#3. Vòng lặp do while
$a = 1;

do {
    echo '[Giá trị của a: ' . $a . ' ] ';
    $a++;
} while ($a < 10);
