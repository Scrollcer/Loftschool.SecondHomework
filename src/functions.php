<?php
function task1($array, $return = false)
{
    if ($return) {
        return implode(' ', $array);
    } else {
        foreach ($array as $value) {
            echo "<p>$value</p>";
        }
    }
}

function task2(...$args)
{
    $operator = $args[0];
    $result = 0;
    if ($operator == '+') {
        for ($i = 1; $i < sizeof($args); $i++) {
            $result += $args[$i];
        }
    } elseif ($operator == '-') {
        for ($i = 1; $i < sizeof($args); $i++) {
            $result -= $args[$i];
        }
    } elseif ($operator == '*') {
        for ($i = 1; $i < sizeof($args); $i++) {
            $result *= $args[$i];
        }
    } elseif ($operator == '/') {
        for ($i = 1; $i < sizeof($args); $i++) {
            $result /= $args[$i];
        }
    } else {
        echo "Unknown operator!";
    }
    echo $result;
    return $result;
}

function task3($a, $b)
{
    if (is_int($a) & is_int($b)) {
        echo "<table>";
        for ($i = 1; $i <= $b; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $a; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Error! Arguments are not numeric!";
    }
}

function task4()
{
    echo date('d.m.Y H:i') . "</br>";
    echo strtotime('24.02.2016 00:00:00.');
}

function task5()
{
    $string1 = "Карл у Клары украл Кораллы";
    $string2 = "Две бутылки лимонада";
    echo str_replace('К', '', $string1);
    echo "</br></br>";
    echo str_replace('Две', 'Три', $string2);
}

function task6($name)
{
    $file = fopen($name, 'r');
    if (!$file) {
        return false;
    }

    $string = '';
    while (!feof($file)) {
        $string .= fgets($file, 1024);
    }

    echo $string;
}