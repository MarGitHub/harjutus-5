<! DOCKTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-5
	</title>
</head>

<body>
	<h2>Booleans</h2>
		<?php $result1 = True?>
		<?php $result2 = False?>
		<?php echo $result1?><br>
		<?php echo $result2?>
		<?php echo "Result 1: {$result1}"?><br>
		<?php echo "Result 2: {$result2}"?><br>
		<?php echo "Kas result 1 on boolean? " .  is_bool($result1)?><br>
		<?php echo "Kas result 2 on boolean? " .  is_bool($result2)?><br>
	
	<h2>Andmetüüpide olekud</h2>
		<h3>NULL</h3>
		<?php $var1=null?><br>
		<?php $var2=""?><br>
		<?php $var3=0?><br>
		<?php echo "Var1 on null? " .  is_null($var1)?><br>
		<?php echo "Var2 on null? " .  is_null($var2)?><br>
		<?php echo "Var3 on null? " .  is_null($var3)?><br>
		<?php echo "Var4 on null? " .  is_null($var4)?><br>
	
	
</body>

</html>