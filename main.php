<html>
<link rel="stylesheet" href="style.css">
<h1> My Car Collection</h1>
</html>
<?php
$db = new PDO('mysql:host=db; dbname=collectionDB', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT `Brand`, `Model`, `Year_released` FROM `collectionapp`;');
$query->execute();
$result = $query->fetchAll();
require_once 'functions.php';
echo carTable($result);
?>


