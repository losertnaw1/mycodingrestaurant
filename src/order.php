<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All foods</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php' ?>
    <section class="order">
        <h1>Fill this form to confirm your order.</h1>
        <div class="order-infor">
            <p>Selected Food</p>
            <img src="images/menu-pizza.jpg" alt="">
            <div class="infor">
                <p class="title">Food Title</p>
                <p class="discount">$2.3</p>
                <p>Quantity</p>
                <input type="number" value=1 id="">
            </div>
        </div>
        <div class="user-infor">
            <p>Delivery Details</p>
            <div>
                <p>Full name</p>
                <input type="text" placeholder="E.g Lê Quốc Đạt">
            </div>
            <div>
                <p>Phone number</p>
                <input type="number" placeholder="E.g 0906xxxx786">
            </div>
            <div>
                <p>Email</p>
                <input type="gmail" placeholder="E.g abc@gmail.com">
            </div>
            <div>
                <p>Full name</p>
                <textarea name="" id="" cols="30" rows="10" placeholder="E.g Đường,Thành phố,Nước"></textarea>
            </div>
            <button id="order">Confirm Order</button>
        </div>
    </section>
    <?php include 'footer.php' ?>
</body>
</html>