<html>
<head>
    <title> PAI </title>
</head>
<body>

    <?php
        
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn ->connect_error) die($conn->connect_error);

    $query = "SELECT * FROM klient";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;
    for($j =0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo 'ID_Klient: ' .$row['ID_Klient'] .'<br>';
        echo 'Imie: ' .$row['Imie'] .'<br>';
        echo 'Nazwisko: ' .$row['Nazwisko'] .'<br><br>';
    }
    $result -> close();
    $conn -> close();
   
    ?>

</body>
</html>