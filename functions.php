<?php
//$db = new PDO('mysql:host=db; dbname=collectionDB', 'root', 'password');
//$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//$query = $db->prepare('SELECT `Brand`, `Model`, `Year_released` FROM `collectionapp`;');
//$query->execute();
//$result = $query->fetchAll();
function connectToDB(): object
{
    $db= new PDO("mysql:host=db; dbname=collectionDB", "root", "password");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getAllFromDB(object $db): array
{
    $query = $db->prepare('SELECT * FROM `collectionapp`;');
    $query->execute();
    return $query->fetchAll();
}
function carTable(array $query):string
{
    $carTableString = '<div class= "container">';
    foreach ($query as $user){
        $carTableString .= '<div>'. 'Brand: '. $user['Brand'] . '<br>' .'Model: '. $user['Model'] . '<br>'. 'Year Released: '. $user['Year_released']. '</div>';
    }
    $carTableString .= '</div>';
    return $carTableString;
}
?>