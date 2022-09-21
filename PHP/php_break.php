<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />  
		<title>Test</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<?php
		for($count = -11; $count <= 11; ++$count){
		if($count % 5 == 0) continue;
		echo $count, " <br>";}
		
		?>
	</body>
