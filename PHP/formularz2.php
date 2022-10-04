<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="./formularz2.php" method="POST">
        Login <input type="text" name="login" /><br><br>
		Hasło <input type="password" name="hasło" /><br>
		<p>Czy zapamiętać hasło?</p>
<p><input type="checkbox" name="gry1" value=1 />Tak</p>
        <input type="submit" /><br>
    </form>
        <?php
           if(isset($_POST['login'])){
            echo "<br>Cześć " . htmlspecialchars($_POST['login']) . ". ";
        }else{
			echo "Cześć nieznajomy.";}
			
			if(isset($_POST['hasło'])){
            echo "<br>", "Zaszyfrowane hasło: ";
			echo sha1($_POST['hasło']);
			echo "<br><br>";}
			if(isset($_POST['gry1']) == 'Tak'){
            echo "Hasło zostanie zapamiętanie. ";
        }else{
			echo "<br>", "Hasło nie zostanie zapamiętanie.";}
        ?>
    </body>
</html>
