<?php
require_once('connection.php');

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM books WHERE id=:id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

var_dump($book);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books list</title>
</head>
<body>
<h1><?=$book['title'];?></h1>
    <h3>Language: <?=$book['language'];?></h2>
    <h3>Summary: <?=$book['summary'];?></h2>
    <h3>Pages: <?=$book['pages'];?></h2>
    <h3>Price: <?=$book['price'];?> eur</h2>
    <h3>Stock: <?=$book['stock_saldo'];?> pieces</h2>
   
</body>
</html>
