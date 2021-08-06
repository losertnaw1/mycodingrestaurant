<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>WowFood</title>
</head>
<body>
    <header>
    <div class="navbar">
        <img src="images/logo.png">
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="src/categories.php">Categories</a>
            <a href="src/foods.php">Foods</a>
            <a href="#">Contact</a>
        </div>
    </div>
    </header>
    <?php include 'src/search.php' ?>
    <main>
        <section class="explore-foods">
            <h1>Explore Foods</h1>
            <?php include 'src/explore-food.php' ?>
        </section>
        <section class="food-menu">
            <h1>Food Menu</h1>
            <?php include 'src/food-row.php' ?>
            <?php include 'src/food-row.php' ?>
            <?php include 'src/food-row.php' ?>
            <a class="all-food-link" href="src/foods.php">See All Foods</a>
        </section>
    </main>
    <?php include 'src/footer.php'; ?>
</body>
</html>