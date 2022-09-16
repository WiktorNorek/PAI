<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />  
		<title>Test</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<?php
		for($count = 1; $count <= 6; ++$count)
		{
			for($licz = 1; $licz <= 5; ++$licz){
				if ($licz==1 || $licz==5){
					echo "*";
					}
				elseif ($count==1 || $counts==6){
					echo "*";
					}
				else {
					echo "#";
					}
		}
		echo "<br>";
		}
		?>
	</body>
