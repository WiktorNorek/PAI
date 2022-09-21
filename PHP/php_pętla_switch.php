<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />  
		<title>Test</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<?php
		$ocena = 22;
		$wynik = 0;
		
			if ($ocena >= 0 && $ocena <= 39){
				$wynik = 1;
			}
			elseif ($ocena >= 40 && $ocena <= 54){
			$wynik = 2;}
			elseif ($ocena >= 55 && $ocena <= 69){
			$wynik = 3;}
			elseif ($ocena >= 70 && $ocena <= 84){
			$wynik = 4;}
			elseif ($ocena >= 85 && $ocena <= 94){
			$wynik = 5;}
			elseif ($ocena >= 95 && $ocena <= 100){
			$wynik = 6;}
			else {
			echo "bląd";}
			
		switch($wynik):
		case 1:
		echo "Twoja ocena to: ", $wynik;
		break;
		
		case 2:
		echo "Twoja ocena to: ", $wynik;
		break;
		
		case 3:
		echo "Twoja ocena to: ", $wynik;
		break;
		
		case 4:
		echo "Twoja ocena to: ", $wynik;
		break;
		
		case 5:
		echo "Twoja ocena to: ", $wynik;
		break;
		
		case 6:
		echo "Twoja ocena to: ", $wynik;
		break;
		
		endswitch;
		?>
	</body>
