<?php

//Question 1

echo "Enter three numbers:\n";
$numbers = [];
for ($i = 0; $i < 3; $i++) {
    $numbers[] = readline("Number " . ($i + 1) . ": ");
}


sort($numbers);

echo "Numbers in ascending order: " . implode(", ", $numbers) . "\n";

//Question 2

function smallestindex($arr, $size) {
    $smallest_index = 0;
    for ($i = 1; $i < $size; $i++) {
        if ($arr[$i] < $arr[$smallest_index]) {
            $smallest_index = $i;
        }
    }
    return $smallest_index;
}

$arr = [5, 3, 8, 2, 9];
$size = count($arr);
$index = smallestindex($arr, $size);
echo "Index of the smallest element in the array: " . $index . "\n";

//Question 3 

$string = readline("Enter a string: ");


$length = strlen($string);
$uppercased_string = "";
for ($i = 0; $i < $length; $i++) {
    $char = $string[$i];
    if (ctype_alpha($char) && ctype_lower($char)) {
        $char = strtoupper($char);
    }
    $uppercased_string .= $char;
}


echo "String in uppercase: " . $uppercased_string . "\n";

// question 4

function createMatrix($rows, $cols) {
    $matrix = [];
    for ($i = 0; $i < $rows; $i++) {
        $matrix[$i] = [];
        for ($j = 0; $j < $cols; $j++) {
            $matrix[$i][$j] = readline("Enter element at position ($i, $j): ");
        }
    }
    return $matrix;
}

function addMatrices($matrix1, $matrix2, $rows, $cols) {
    $result = [];
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    return $result;
}

$rows = (int)readline("Enter the number of rows: ");
$cols = (int)readline("Enter the number of columns: ");


echo "Enter elements for the first matrix:\n";
$matrix1 = createMatrix($rows, $cols);


echo "Enter elements for the second matrix:\n";
$matrix2 = createMatrix($rows, $cols);

$result = addMatrices($matrix1, $matrix2, $rows, $cols);


echo "The result of adding the two matrices is:\n";
foreach ($result as $row) {
    echo implode(" ", $row) . "\n";
}

//question 5

$alpha = array_fill(0, 50, 0.0);

for ($i = 0; $i < 25; $i++) {
    $alpha[$i] = pow($i, 2); 
}

for ($i = 25; $i < 50; $i++) {
    $alpha[$i] = 3 * $i; 

$count = 0;
foreach ($alpha as $element) {
    echo $element . " ";
    $count++;
    if ($count % 10 == 0) {
        echo "\n";
    }
}
?>