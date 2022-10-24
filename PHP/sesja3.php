<?php
session_start();
?>
<!DOCTYPE html>
    <head>
        <title>sesja3</title>
        <meta charset="utf-8">
    </head>
    <body>
	<form action="sesja3.php" method="POST">
	Login<input type="text" name="tekst" />
	Hasło <input type="password" name="haslo"/>
	<input type="submit" name="sumb" />
	</form>
	<br>
        <?php
		if(isset($_POST['tekst'])){
		$_SESSION["login"] = $_POST['tekst'];}
		
		if(isset($_POST['haslo'])){
		$_SESSION["haslo"] = sha1($_POST['haslo']);}
		?>
    </body>
</html>
