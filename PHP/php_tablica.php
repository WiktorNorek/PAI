<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />  
		<title>Test</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
<?php
    /* $tytul[] = "1984";
    $tytul[] = "Nowy, wspaniały świat";
    $tytul[] = "Don Kichot z La Manchy";

    for($j=2; $j>=0; $j--){
        echo "$j: $tytul[$j] <br>";
    } */
	
	$właść = array('tekst' => "Tak",
	'teksto' => "Nie",
	'text' => "Może");
	$j = 0;
	
	foreach($właść as $item){
        echo "$j: $item <br>";
        ++$j;
    }
?>
	</body>
