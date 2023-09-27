<?php
/*
Task 1: String Manipulation

Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:
Convert the string to all lowercase.
Replace "brown" with "red" in the string.
Print the modified text.
*/
echo "<strong>Task 1: String Manipulation <br></strong>".PHP_EOL;
$text = "The quick brown fox jumps over the lazy dog.";

function makeLowercase($text){
    $lowerText = strtolower($text);
    return "<strong>Text in lowercase: </strong> {$lowerText}";
}

$newText = makeLowercase($text);
echo "{$newText} <br>";

echo "<br>".PHP_EOL;

$replacedText = str_replace("brown", "red", $text);
echo "<strong>The Replaced Text: </strong>{$replacedText} <br>";


echo "<br>".PHP_EOL;
echo "<br>".PHP_EOL;

/*
Task 2: Array Manipulation

Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
*/
echo "<strong>Task 2: Array Manipulation <br></strong>".PHP_EOL;

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// function isOdd($numbers){
//     foreach($numbers as $number){
//         if($number % 2 !=0){
//             return $number;
//         }
//     }
// }
// print_r(isOdd($numbers));







echo "<br>".PHP_EOL;
echo "<br>".PHP_EOL;

/*
Task 3: Array Sorting  

Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.
*/
echo "<strong>Task 3: Array Sorting  <br></strong>".PHP_EOL;

$grades = [85, 92, 78, 88, 95];
echo "Array Sortted in Descending Order: <br>";
function arraySortD($grades){
    $result = rsort($grades);
    print_r($grades);
}
arraySortD($grades);




echo "<br>".PHP_EOL;
echo "<br>".PHP_EOL;

/*
Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/
echo "<strong>Task 4: Multidimensional Array  <br></strong>".PHP_EOL;


$studentGrades = [
    ["Abdullah", 85, 92, 95],
    ["Abdur Rahman", 88, 82, 94],
    ["Sakib", 78, 84, 98],
];

// function averageGrades($studentGrades){

//     $arrayLength = count($studentGrades);
//     for($i = 0; $i < $arrayLength; $i++) {
//         echo "<br>";
//         foreach($studentGrade) {
            
//         }
//         echo "<br>";
//     }
// }


echo "<br>".PHP_EOL;
echo "<br>".PHP_EOL;
/*
Task 5: Password Generator

Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
*/
echo "<strong>Task 5: Password Generator  <br></strong>".PHP_EOL;

function generatePassword($length = 12)
{

    $password = '';
    $passwordSets = ['1234567890', '%^&@*#(){}', 'ABCDEFGHJKLMNPQRSTUVWXYZ', 'abcdefghjkmnpqrstuvwxyz'];

    //Get random character from the array
    foreach ($passwordSets as $passwordSet) {
        $password .= $passwordSet[array_rand(str_split($passwordSet))];
    }

    // 6 is the length of password we want
    while (strlen($password) < $length) {
        $randomSet = $passwordSets[array_rand($passwordSets)];
        $password .= $randomSet[array_rand(str_split($randomSet))];
    }
    echo $password;
}
generatePassword(12);