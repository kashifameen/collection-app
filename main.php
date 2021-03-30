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

function carTable(array $result):array
{
    $carTableArray[] = '<div class = "container">';
    foreach ($result as $user){
        $carTableArray[] = '<div>'. 'Brand: '. $user['Brand'] . '<br>' .'Model: '. $user['Model'] . '<br>'. 'Year Released: '. $user['Year_released']. '</div>';
    }
    $carTableArray[] = '</div>';
    return $carTableArray;
}
var_dump(carTable($result));
$output = carTable($result);
foreach ($output as $value){
    echo $value;
}
assertequals
//echo '<div class = "container">';
//foreach($result as $user) {
//    echo '<div>' .  'Brand: '. $user['Brand'] . '<br>' .'Model: '. $user['Model'] . '<br>'. 'Year Released: '. $user['Year_released'] . '</div>';
//}
//echo ' </div>';
//
//?>



