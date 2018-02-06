<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<?php
		$people = array('Alice', 'Bob', 'Catherine');
		$numbers = array(5,3,7);
		$sum = 0;
		foreach ($numbers as $number){
			$sum = $sum + $number;
		}
		echo $sum;
	?>

</body>
</html>
