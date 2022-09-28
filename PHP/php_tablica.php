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
	
	/* $właść = array('tekst' => "Tak",
	'teksto' => "Nie",
	'text' => "Może");
	$j = 0;
	
	foreach($właść as $item){
        echo "$j: $item <br>";
        ++$j;
    }*/
	
	 /*$products = array(
                'paper' => array(
                    'copier' => "Do kserokopiarek i uniwersalny",
                    'inkjet' => "Do drukarek atramentowych",
                    'laser' => "Do drukarek laserowych",
                    'photo' => "Papier fotograficzny"),
                'pens' => array(
                    'ball' => "Długopisy",
                    'hilite' => "Markery przezroczyste",
                    'marker' => "Markery zwykłe"),
                'misc' => array(
                    'tape' => "Taśmy klejące",
                    'glue' => "Kleje",
                    'clips' => "Spinacze")
                );
            echo "<pre>";
        
            echo $products['paper']['copier']," <br>";
			echo $products['pens']['ball']," <br>";
			echo $products['misc']['tape']," <br>";
			
			    foreach($products as $section => $items)
                foreach($items as $key => $value)
					if ($key == 'copier' OR $key == 'ball' OR $key == 'tape')
                    echo "$section: \t $key \t ($value)<br>";
            echo "</pre>";  */
			
			
			
			
			
			
		
			    $chessboard = array(
        array('w','s','g','h','k','g','s','w'),
        array('p','p','p','p','p','p','p','p'),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array('P','P','P','P','P','P','P','P'),
        array('W','S','G','H','K','G','S','W'),
    );
    $chessboard[6][4] = ' ';
	$chessboard[4][4] = 'P';

    echo "<pre>";
    foreach($chessboard as $row)
    {
        foreach($row as $piece)
            echo "$piece ";
        echo "<br>";
    }
    echo "</pre>";
?>
	</body>
