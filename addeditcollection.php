<?php
require_once "functions.php";
if(
    isset($_POST['brand']) &&
    isset($_POST['model']) &&
    isset($_POST['year_released'])
){
    $db = connectToDB();

    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year_released = $_POST['year_released'];
    $query = $db->prepare('INSERT INTO `collectionapp` (`Brand`, `Model`, `Year_released`) VALUE (:Brand, :Model, :Year_released)');
    $query->bindParam(':Brand', $brand);
    $query->bindParam(':Model', $model);
    $query->bindParam(':Year_released', $year_released);
    $query->execute();
    header('Location: main.php');
    exit;
}