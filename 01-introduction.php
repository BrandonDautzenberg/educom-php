<!-- SYNTAX -->

<?php
echo "Hello World!"; 
?>

<?php
echo "This is php";
?>

<!-- COMMENTS -->

<?php
// This is a single line comment
?>

<?php
/* This is a multi 
line comment */
?>

<?php
echo "Hello World!";
// end statements with ";"!
?>

<!-- VARIABLES -->

<?php
$txt = "Hello";
// Always use a $ before the variable name!
?>

<?php
$x = "5";
$y = "7";
echo $x + $y;
?>

<!-- STRINGS -->

<?php
echo strlen("Hello World!"); // prints the length of the string
echo strrev("Hello World!"); // prints the reverse of the string

$oldtxt = "Hello World!";
$newtxt = str_replace("World", "Dolly", "$oldtxt"); // Replaces the word "World" wirth "Dolly' in $oldtxt
?>

<!-- OPERATORS -->

<?php
echo 10 * 5;
echo 10 / 2;
var_dump($a == $b);
var_dump($a != $b);
?>

<!-- IF... ELSE -->

<?php
$a = 50;
$b = 10;
if ($a > $b) {
  echo "Hello World!";
}

if ($a != $b) {
  echo "Hello World!";
}

if ($a == $b) {
  echo "Yes";
} else {
  echo "No";
}

if ($a == $b) {
  echo "1";
} elseif ($a > $b) {
  echo "2";
} else {
  echo "3";
}
?>

<!-- SWITCH STATEMENTS -->

<?php
switch ($color) {
  case "red":
    echo "Hello";
    break;
  case "green":
    echo "Welcome";
    break;
}

switch ($color) {
  case "red":
    echo "Hello";
    break;
  case "green":
    echo "Welcome";
    break;
  default:
    echo "Hello World!";
    break;
}
?>

<!-- LOOPS -->

<?php
$i = 1;

while ($i < 6) {
  echo $i;
  $i++;
}
?>

<?php
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);
?>

<?php
for ($i = 0; $i < 10; $i++) {
  echo $i;
}
?>

<?php
$colors = array("red", "green", "blue", "yellow ");

foreach ($colors as $x) {
  echo $x;
}
?>

<!-- FUNCTIONS -->

<?php
function myFunction() {
  echo "Hello World!";
}

myFunction();
?>

<?php
function myFunction2($fname, $lname) {
  echo $fname;  
  return $lname;
}
?>

<!-- ARRAYS -->

<?php
$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);
echo $fruits[1];
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Ben is " . $age["Ben"] . " years old.";
foreach ($age as $x => $y) {
  echo "Key=" . $x . ", Value=". $y;
}
?>

<?php
$colors = array("red", "green", "blue", "yellow ");
sort($colors);
rsort($colors);
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
?>


