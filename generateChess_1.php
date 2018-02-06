<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<?php

		// chess pieces
		$column = ['a','b', 'c', 'd', 'e', 'f', 'g'];
		$row = ['1','2', '3', '4', '5', '6', '7', '8'];
		$pieces = ['P', 'B', 'N', 'Q', 'R', 'K', 'O'];

		$newColumn = ['Africa','South America', 'North America', 'Australia', 'Asia', 'Europe', 'Mars', 'Ganymedes'];
		$newRow = ['Mountain', 'Canyon', 'Stream', 'Waterfall', 'River', 'Wetlands', 'Reg', 'Desert'];
		$newPieces = ['Human', 'Bird', 'Snake', 'Forest', 'Butterfly', 'Home','Casting'];


		// here are the moves from the battle
		$battleMoveW = ['Pe4', 'Bc4', 'Pa4', 'Nc3', 'Pd3', 'Ne2', 'O-O', 'Pf4', 'Bd2', 'Bb3', 'Nxd4', 'Kh1', 'exd5', 'Bxc3', 'Bf6', 'Pf5', 'Rxf5', 'Qh5', 'Qh6', 'Qxf6'];


		$battleMoveB = ['Pc5', 'Pa6', 'Nc6', 'Pe6', 'Pg6', 'Bg7', 'Ne7', 'O-O', 'Pd5', 'Nd4',
		'Bxd4+', 'Bd7', 'Bxc3', 'exd5', 'Be6', 'Bxf5', 'gxf5', 'Qd6', 'Qxf6', '1-0'];


		$newGameplayB = array();
		$BMOVE1 = array();
		$BMOVE2 = array();
		$BMOVE3 = array();

		for ($i = 0; $i < sizeof($battleMoveB); $i++){
			$move = [$battleMoveB[$i]];
			array_push($newGameplayB, $move);
		}

		for ($j = 0; $j < sizeof($newGameplayB); $j++){
			$len = strlen($newGameplayB[$j][0]);
			// need to search for string containing x to add kill
			$moveP = $newPieces[array_search($newGameplayB[$j][0][0], $pieces)];
			array_push($BMOVE1, $moveP);
			$moveC = $newColumn[array_search($newGameplayB[$j][0][1], $column)];
			array_push($BMOVE2, $moveC);
			$moveR = $newRow[array_search($newGameplayB[$j][0][2], $row)];
			array_push($BMOVE3, $moveR);
		};

		for ($k = 0; $k<sizeof($BMOVE1); $k++){
			system(escapeshellcmd("say I am taking my $BMOVE1[$k]to$BMOVE2[$k]$BMOVE3[$k]"));
		  echo 'I moved the ' . $BMOVE1[$k] .' to '. $BMOVE2[$k] .' '. $BMOVE3[$k].'.'.'<br>';
		};
	?>



</body>
</html>
