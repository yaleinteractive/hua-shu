<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<?php
		$loggedIn = false;

		if($loggedIn == true){
			echo"you are logged in";
		}else{
			echo"please loggin";
		}
	?>
	<form action = "process.php" method = 'post'>
		<!--post the data to process.php-->
		Enter your name<input name ="name" type ='text'>
		<input type ='submit'>
	</form>

</body>
</html>
