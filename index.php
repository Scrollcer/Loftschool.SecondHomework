<?php
require('src/functions.php');

$array = ["Hello", "I", "Am", "Denis"];
task1($array);

task2('+', 1, 2, 3, 5.2);

echo "</br></br>";

task3(8, 8);

echo "</br></br>";

task4();

echo "</br></br>";

task5();

echo "</br></br>";

file_put_contents('test.txt', 'Hello again!');
task6('test.txt');