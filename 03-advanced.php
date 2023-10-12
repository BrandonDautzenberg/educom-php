<!-- DATES -->

<?php
echo date("l");
?>

<?php
echo date("Y.m.d");
?>

<?php
echo date("H:i:s");
?>

<!-- FILE HANDLING 
It's a good programming practice to close all files after you have finished with them. 
You don't want an open file running around on your server taking up resources! -->

<?php
include footer.php;
?>

<?php
readfile("webdict.txt");
?>

<?php
$myfile = fopen("webdict.txt", "r");
while (!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>

<!-- COOKIES --
A cookie is used to identify a user. A cookie is a smell file that the server embeds on the user's computer. 
Each time the same computer requests a page with a browser, it will send the cookie too. -->

<?php
setcookie("username", "John", time() + (86400 * 30), "/");
?>

<!-- SESSIONS --
A session is a way to store information (in variables) to be used across multiple pages. 
Unlike a cookie, the information is not stored on the user's computer. 

The session_start() function must be the very first thing in your document. Before any HTML tags. -->

<?php
session_start();
$_SESSION["favcolor"] = "green";
?>

<?php
echo $_SESSION["favcolor"];	
?>

<!-- PHP FILTERS --
You should always validate external data!
Invalid submitted data can lead to security problems and break your webpage!
By using PHP filters you can be sure your application gets the correct input! -->

<!-- PHP JSON --
The json_encode() function is used to encode a value to JSON format.
The json_decode() function is used to decode a JSON object into a PHP object or an associative array. -->

<!-- PHP EXCEPTION --
An exception is an object that describes an error or unexpected behaviour of a PHP script. 
Exceptions are thrown by many PHP functions and classes. User defined functions and classes can also throw exceptions.

Exceptions are a good way to stop a function when it comes across data that it cannot use.

The throw statement allows a user defined function or method to throw an exception. 
When an exception is thrown, the code following it will not be executed.