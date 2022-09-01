<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculator</title>
</head>

<body>
<center>
<form>
	<input type="text" name="num1">
	<input type="text" name="num2">
	<select name="operator">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
		<option>Modulo</option>
	</select>
</center>
	<br>
	<button type="pass" name="pass" value="pass">Calculate</button>		
</form>

<p>Answer:</p>

<?php
	if (isset($_GET['pass'])) {
		$res1 = $_GET['num1'];
		$res2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator) {
			case "None":
				echo "You need to select an Operator.";
			break;
			case "Add":
				echo $res1 + $res2;
			break;
			case "Subtract":
				echo $res1 - $res2;
			break;
			case "Multiply":
				echo $res1 * $res2;
			break;
			case "Divide":
				echo $res1 / $res2;
			break;
			case "Modulo":
				echo $res1 % $res2;
			break;

		}
	}
?>


</body>
</html>