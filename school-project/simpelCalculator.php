<html>
<head>
	<title>Simple Calculator</title>
</head>
<body>

<form method='post' action='simpelCalculator.php'>
<input type='text' name='n1'>
<input type='text' name='n2'>

<select name='a'>
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type='submit' name='submit' value='Calculate now'>
</form>
<?php 
if(isset($_POST['submit'])){

$n1 = $_POST['n2'];
$n2 = $_POST['n1'];
$action =$_POST['a'];

if($a=="+"){
	echo "<b>Your answer is:</b><b>";
	echo $n1 + $n2;
}
if($a=="-"){
	echo "<b>Your answer is:</b><b>";
	echo $n1 - $n2;
}if($a=="*"){
	echo "<b>Your answer is:</b><b>";
	echo $n1 * $n2;
}if($a=="/"){
	echo "<b>Your answer is:</b><b>";
	echo $n1 / $n2;
}
}
 ?>

</body>
</html>