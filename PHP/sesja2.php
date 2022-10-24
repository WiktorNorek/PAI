<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
        <title>sesja2</title>
        <meta charset="utf-8">
    </head>
<body>
<form action="sesja2.php" method="POST">
usuń <input type="submit" name="usun" />
</form>

<?php
echo "Ile? " . $_SESSION["favcolor"] . ".<br>";
echo "Czego? " . $_SESSION["favanimal"] . ".";


if(isset($_POST["usun"])) {
	session_unset();
	session_destroy();}
?>

</body>
</html>


</body>
</html>