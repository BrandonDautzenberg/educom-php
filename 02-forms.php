<!-- The PHP superglobals $_GET and $_POST are used to collect form-data.

Proper validation of form data is important to protect your form from hackers and spammers!

GET should NEVER be used for sencind passwords or other sensitive information!

-->

<!-- EXERCISE 1 -->
<form action="welcome.php" method="get">
First name: <input type="text" name ="fname">
</form>

<html>
<body>
Welcome <?php echo $_GET["fname"];?>
</body>
</html>

<!-- EXERCISE 2 -->
<form action="welcome.php" method="post">
First name: <input type="text" name ="fname">
</form>

<html>
<body>
Welcome <?php echo $_POST["fname"];?>
</body>
</html>

<!-- Additional information 

The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.

The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.