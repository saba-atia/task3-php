<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<h1> Task1 
<hr>
<?php 
$x = 12;
$y = 10;
function swaper($num1, $num2)
{
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
    return "x = $num1 y= $num2";
};

echo swaper($x, $y);
?> 



<br>
<h1>Task2
<hr>
<?php 

$armstrong = "380";

function armstronger($num)
{
    $splited = str_split($num);
    if ($splited[0] ** 3 + $splited[1] ** 3 + $splited[2] ** 3 == $num) {
        return "Armstrong number";
    } else {
        return "Not an Armstrong number";
    }
};
echo armstronger($armstrong);

?>

<br>
<h1>Task3
<hr>
<?php

$words = "Eva, can I see bees in a cave?";
function isPalindrome($str)
{
    $clean = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($str));
    $reversedStr = strrev($clean);
    return $clean === $reversedStr;
}
if (isPalindrome($words)) {
    echo "Yes, it is a palindrome";
} else {
    echo "No, it is not a palindrome";
}

?>

<br>
<h1>Task4
<hr>
<?php 


function removeDuplicates($array) {
    return array_unique($array);
}

$array1 = array(2, 4, 7, 4, 8, 4);
$result = removeDuplicates ($array1);


print_r($result);
?>

<br>
<h1>Task5
<hr>
<?php 

$str = "remove";
$rev = strrev($str);

echo $rev;
?>



<br>
<h1>Task6
<hr>
<?php 

$lower = "remove";
$splited = str_split($lower);
if ($splited == str_split(strtolower($lower))) {
    echo "Your string is ok";
} else {
    echo "Your string is not ok";
}
?>

<br>
<h1>Task7
<hr>
<?php

$text = "group orange coding3";
echo strtoupper ($text);
echo '<br>';
echo strtolower ($text);
echo '<br>';
echo ucfirst ($text);
echo '<br>';
echo ucwords($text);
echo '<br>';

?>

<br>
<h1>Task8
<hr>
<?php

$number = "085119";
$result =str_split($number,2);

echo implode (" :",$result);

?>

<br>
<h1>Task9
<hr>
<?php 

$text = 'I am a full stack developer at orange coding academy';
$word = 'orange';
if (strpos ($text,$word)!==false)
{echo "Word Found!";
}else {echo "Word Not Found!";}
?>

<br>
<h1>Task10
<hr>
<?php 
$url = 'www.orange.com/index.php';
$path = basename ($url);
echo $path;

?>

<br>
<h1>Task11
<hr>
<?php


function findFirstDifference($str1, $str2) {
    $minLength = min(strlen($str1), strlen($str2));

    for ($i = 0; $i < $minLength; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            return "First difference between two strings at position " . ($i + 1) . ": \"" . $str1[$i] . "\" vs \"" . $str2[$i] . "\"";
        }
    }

    return "No difference found within the common length.";
}
$string1 = "dragonball";
$string2 = "dragonboll";

echo findFirstDifference($string1, $string2);

?>


<br>
<h1>Task12
<hr>
<?php

function getNextLetter($char) {
    return ($char === 'z') ? 'a' : chr(ord($char) + 1);
}

echo getNextLetter('a') . "\n"; 
echo getNextLetter('z') . "\n"; 


?>


<br>
<h1>Task13
<hr>
<?php

function removeLeadingZeros($num) {
    return ltrim($num, '0');
}

$input = '0000657022.24';
echo removeLeadingZeros($input);
?>




$every = '"\1+2/3*2:2-3/4*3';
$cleaning = preg_replace("/[^a-zA-Z0-9]/", " ", $every);
echo $cleaning;




?>




<br>
<h1>Task15
<hr>
<?php

echo "<br/>";
$str = "the quick brown fox jumps over the lazy dog";
$a = preg_split("~\s+~", $str);
echo $a[0] . " " . $a[1] . " " . $a[2] . " " . $a[3] . " " . $a[4];

?>





</body>
</html>