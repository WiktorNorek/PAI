<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
	<form action="./funkcje.php" method="POST">
	Podaj swój wiek<input type="number" name="wiek" />
	<input type="submit" />
	</form>
		
		
        <?php
		
			function funkcja($inna){
			if($inna >= 0 && $inna <= 18){
			echo "Jesteś młody";}
			elseif($inna >= 19 && $inna <= 60){
				echo "Jesteś dorosły";}
			else{
			echo "Jesteś stary";}}
			
			
			if(isset($_POST['wiek'])){
				$inna = $_POST['wiek'];
				funkcja($inna);}
        ?>
    </body>
</html>
