<?php echo "This is a PHP Statement"; ?>


<html>
<head>
<title>Test</title>
</head>

<body>
<h1>
	HELLO
</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</body>

</html>
