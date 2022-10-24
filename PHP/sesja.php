<?php
session_start();
?>
<!DOCTYPE html>
    <head>
        <title>sesja1</title>
        <meta charset="utf-8">
    </head>
    <body>
		
        <?php
		$_SESSION["favcolor"] = 101;
		$_SESSION["favanimal"] = "dalmateńczyków";
		echo "Session variables are set.";
		?>
    </body>
</html>
