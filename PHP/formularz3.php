<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
	<form action="./formularz3.php" method="POST">
		<p>Rasa:</p>
		<p><input type="checkbox" name="gry[]" value="Człowiek" />Człowiek</p>
		<p><input type="checkbox" name="gry[]" value="Elf" />Elf</p>
		<p><input type="checkbox" name="gry[]" value="Krasnolud" />Krasnolud</p>

		<p>Profesja:</p>
		<p><input type="radio" name="plec" value="Rycerz" />Rycerz</p>
		<p><input type="radio" name="plec" value="Mag" />Mag</p>
		<p><input type="radio" name="plec" value="Złodziej" />Złodziej</p>

	<select name="perk">
    <option value="+1 siła">+1 siła</option>
    <option value="+1 zręczność">+1 zręczność</option>
    <option value="+1 intelekt">+1 intelekt</option>
</select>
		
		<input type="submit" />
		</form>
		
		
        <?php
        if(isset($_POST['gry'])){
            for($i=0; $i<count($_POST['gry']); $i++){
				echo "<br>", "Wybrana rasa: ";
                echo $_POST['gry'][$i] . "<br />";
            }
        }else{
            echo "Nie wybrano klasy";
        }
            if(isset($_POST['plec'])){
                if($_POST['plec'] == 'Rycerz') echo "Wybrana profesja: Rycerz", "<br>";
                elseif($_POST['plec'] == 'Mag') echo "Wybrana profesja: Mag", "<br>";
			else echo "Wybrana profesja: Złodziej", "<br>"; }
			
		if(isset($_POST['perk'])){
		echo "Wybrany Perk: " . $_POST['perk'];}
        ?>
    </body>
</html>
