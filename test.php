<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_ROUND_HALF_DOWN</title>
</head>
<body>
    
<form action="index.php" method="get">
    <label>Tekst:</label>
    <br>
    <input type="text" name="text">
    <input type="password" name="text">
    <br>
    <input type="date" name="" id="">
    <br>
    <input type="submit" name="submit" value="Sisesta">
</form>

</body>
</html>


<?php
die();
// echo "Hello, PHP!<br>";
// echo "Hello, newline!";

// parameetrite lugemiseks url aadressilt
$text = $_GET['text'];
//die();
//$name = "Ametikool";

echo "Hello, $text!";