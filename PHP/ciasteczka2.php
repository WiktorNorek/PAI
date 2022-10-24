<html>
<body>
<?php
if(isset($_COOKIE["login"])){
echo "Witaj " . $_COOKIE["login"];}
echo "<br>";

if(isset($_COOKIE["haslo"])){
echo "Twoje ID to:  " . $_COOKIE["haslo"];}
?>
</body>
</html>
