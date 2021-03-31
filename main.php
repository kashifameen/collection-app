<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1> My Car Collection</h1>
<div class = "button"><button class = "addtocollectionbtn"><a href = "addtocollection.php">Add a new car to the collection</a></button></div>
<?php
require_once 'functions.php';
$db = connectToDB();
$query = getAllFromDB($db);
echo carTable($query);
?>
</body>
</html>


