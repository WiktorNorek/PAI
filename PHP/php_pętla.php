<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />  
		<title>Test</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<?php
		for($count = 1; $count <= 10; ++$count)
		{
			for($licz = 1; $licz <= 10; ++$licz){
			$wyn = $count*$licz;
			echo $count, "*", $licz, " = ", $wyn, "<br>";
			}
			echo "<br>";
		}
		?>
	</body>
