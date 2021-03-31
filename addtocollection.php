<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "inputform">
    <h1>Add a new car to the database</h1>
    <form method="POST">
    <div>
        <label for= "brand">Brand</label>
        <input type= "text" id= "brand" name= "brand" placeholder= "Brand name.." required>
    </div>
    <div>
        <label for= "model">Model Name</label>
        <input type= "text" id= "model" name= "model" placeholder= "Model name.." required>
    </div>
    <div>
        <label for= "year_released">Year Released:</label>
        <input type= "text" id= "year_released" name= "year_released" placeholder= "Year the car was released.." required>
    </div>
    <div>
        <button>Submit</button>
    </div>
    </form>
    <button><a href = "main.php">Return To Collection</a></button>
    </div>
</body>
</html>
