<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />  
		<title>Test</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
<?php	
	$zdanie = "Ala ma kota a kot ma ale";
	$tablica = array(15, 30, 43, 40, 10, 60, 70, 77, 55, 75);

    foreach($tablica as $wynik){
		echo $wynik;
        echo "<br>";
    }
    echo "<br>";
	echo $zdanie, "<br>", "<br>";
	
	$zdanie2 = explode(' ', "Ala ma kota a kot ma Ale");
    print_r($zdanie2);
	echo "<br>", "<br>", "Ilość elementów zdania: ";
	echo count($zdanie2);
	echo "<br>", "<br>", "Ilość elementów tablicy z liczbami: ";
	echo count($tablica);
	echo "<br>", "<br>";
	
	sort($tablica, SORT_NUMERIC);
	foreach($tablica as $wynik){
		echo $wynik;
        echo "<br>";
    }
	echo "<br>", "<br>";
	sort($zdanie2, SORT_STRING);
	foreach($zdanie2 as $wynik){
		echo $wynik;
        echo "<br>";
    }
	echo "<br>", "<br>";
	shuffle($tablica);
	foreach($tablica as $wynik){
	echo "<br>";
	echo $wynik;}
	echo "<br>", "<br>";
	shuffle($zdanie2);
	foreach($zdanie2 as $wynik){
		echo $wynik;
	echo "<br>";}
	echo "<br>", "<br>";
	
	$tablica2 = array("a", "b", "c", "d", "e");
	echo current($tablica2) . "<br>";
	next($tablica2);
	next($tablica2);
	echo current($tablica2) . "<br>";
	echo reset($tablica2);
?>
	</body>
