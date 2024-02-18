<?php

//Question 1
function getGrade($cgpa) {
    if ($cgpa >= 4.0) {
        return "Excellent (A)";
    } elseif ($cgpa >= 3.5 && $cgpa < 4.0) {
        return "Very Good (B+)";
    } elseif ($cgpa >= 3.0 && $cgpa < 3.5) {
        return "Good (B)";
    } elseif ($cgpa >= 2.5 && $cgpa < 3.0) {
        return "Fair (C+)";
    } elseif ($cgpa >= 2.0 && $cgpa < 2.5) {
        return "Pass (C)";
    } else {
        return "Fail (F)";
    }
}

$cgpa = 3.7;
echo "CGPA: $cgpa - " . getGrade($cgpa);

//question 2

function validateDate($year, $month, $day) {
    return checkdate($month, $day, $year);
}

function isLeapYear($year) {
    return ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0));
}

function getDayOfWeek($year, $month, $day) {
    $timestamp = strtotime("$year-$month-$day");
    return date('l', $timestamp);



//Question 3 
function twoSum($nums, $target) {
    $map = array();
    for ($i = 0; $i < count($nums); $i++) {
        $complement = $target - $nums[$i];
        if (isset($map[$complement])) {
            return [$map[$complement], $i];
        }
        $map[$nums[$i]] = $i;
    }
    return null; 
}

$nums = [2, 7, 11, 15];
$target = 9;
$result = twoSum($nums, $target);
if ($result !== null) {
    echo "Indices: " . $result[0] . ", " . $result[1] . "\n";
} else {
    echo "No valid answer found.\n";
}

//question 4

function isPalindrome($s) {
    
    $cleaned_s = preg_replace("/[^A-Za-z0-9]/", '', strtolower($s));
    return $cleaned_s === strrev($cleaned_s);
}


$string = "A man, a plan, a canal: Panama";
if (isPalindrome($string)) {
    echo "'$string' is a palindrome.\n";
} else {
    echo "'$string' is not a palindrome.\n";
}


?>