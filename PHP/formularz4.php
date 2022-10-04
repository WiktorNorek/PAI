<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
	<form action="./formularz4.php" method="POST">
	Psuedonim<input type="text" name="imie" />
	Komentarz<textarea name='opis'>Treść <b>pogrubiona</b> i zwykła.</textarea>
	<input type="submit" />
	</form>
		
		
        <?php
		if(isset($_POST['imie'])){
			echo "<br>", $_POST['imie'],"<br>";}
		
		if(isset($_POST['opis'])){
			echo $_POST['opis'],"<br>";
			echo htmlspecialchars($_POST['opis']);}
        ?>
    </body>
</html>
