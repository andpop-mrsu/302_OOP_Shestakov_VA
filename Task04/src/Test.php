<?php

use App\Stack;

function runTest()
{

    echo PHP_EOL . "TEST1 (To String test)" . PHP_EOL;
    $steck1 = new Stack(100, 200, 300);
    $correct = '300->200->100';
    echo 'Ожидается: ' . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $steck1 . PHP_EOL;
    if ($steck1 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST2 (Constructor test)" . PHP_EOL;
    $steck1 = new Stack(15, 25, 35);
    $correct = '35->25->15';
    echo 'Ожидается: ' . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $steck1 . PHP_EOL;
    if ($steck1 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST3 (push test)" . PHP_EOL;
    $steck1->push(45, 55);
    $correct = '55->45->35->25->15';
    echo 'Ожидается: ' . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $steck1 . PHP_EOL;
    if ($steck1 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST4 (pop test)" . PHP_EOL;
    $element = $steck1->pop();
    $correct = '45->35->25->15';
    echo 'Ожидается: ' . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $steck1 . PHP_EOL;
    if ($steck1 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
    $correct = '55';
    echo 'Ожидается: ' . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $element . PHP_EOL;
    if ($element == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST5 (top test)" . PHP_EOL;
    $element = $steck1->top();
    $correct = '45->35->25->15';
    echo 'Ожидается: ' . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $steck1 . PHP_EOL;
    if ($steck1 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
    $correct = '45';
    echo 'Ожидается: ' . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $element . PHP_EOL;
    if ($element == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST6 (empty test)" . PHP_EOL;
    $element = $steck1->isEmpty();
    $correct = false;
    if ($element == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
    $steck1->pop();
    $steck1->pop();
    $steck1->pop();
    $steck1->pop();
    $element = $steck1->isEmpty();
    echo $steck1;
    $correct = true;
    if ($element == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
	
    echo PHP_EOL . "TEST7 (To String test)" . PHP_EOL;
    $steck1 = new Stack(111, 222, 333);
    $steck2 = $steck1->copy();
    echo 'Ожидается: ' . PHP_EOL . $steck1 . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $steck2 . PHP_EOL;
    if ($steck1 == $steck2) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
    $steck1->pop();
    echo 'Ожидается: ' . PHP_EOL . $steck1 . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $steck2 . PHP_EOL;
    if ($steck1 != $steck2) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
    echo PHP_EOL . "TEST8 (checkIfBalanced test)" . PHP_EOL;
    $answerd = checkIfBalanced('[{p(q)r}]');
    $correct = true;
    if ($answerd == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
    $answerd = checkIfBalanced('[{p(q)r)');
    $correct = false;
    if ($answerd == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
    $answerd = checkIfBalanced('[{p(q]r})');
    $correct = false;
    if ($answerd == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
}
