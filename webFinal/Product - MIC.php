<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="Style.css">
    <title>Mini Mic Pro</title>
</head>

<body>

    <header>
        <nav>
            <div>
                <a href="">SHOP</a>
                <a href="#product">PRODUCT</a>
                <a href="#footer">CONTACT US</a>
            </div>
            <div>
                <a href="index.php"><img src="img/Logo no background.png" alt="KitHub Logo"></a>
            </div>
            <div>
                <a href="Cart.php">CART</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="product-container">
            <div class="product-img">
                <img src="img/mic.webp" alt="Mini Mic Pro">
            </div>
            <div class="product-options">
                <h2>Mini Mic Pro</h2>
                <h4><i>A compact wireless microphone that delivers clear sound with noise reduction, easy to use with no
                        complex setup, perfect for videos, live streaming, and online meetings.</i></h4>
                <p class="price">25$</p>

             <form method="POST" action="cart_actions.php">
                 <input type="hidden" name="action" value="add">
                <input type="hidden" name="product_id" value="1">
                 <button type="submit" class="product-btn" id="product">Buy Now</button>
                </form>   
            </div>
        </div>

        <hr class="line">

        <div class="other-product">
            <h2>You May Love To See This</h2>
            <div class="product-list">
                <div class="product">
                    <a href="Product - Tripod.php"><img src="img/Tripod.jpg" alt="Camera Tripod"></a>
                    <h5><i>Camera Tripod</i></h5>
                </div>
                <div class="product">
                    <a href="Product - Light.php"><img src="img/lights.jpg" alt="Studio Lights Kit"></a>
                    <h5><i>Studio Lights Kit</i></h5>
                </div>
                <div class="product">
                    <a href="Product - Screen.php"><img src="img/Background Screen.webp" alt="Background Screen"></a>
                    <h5><i>Background Screen</i></h5>
                </div>
                <div class="product">
                    <a href="Product - Headphone.php"><img src="img/Headphones.jpg" alt="Headphones"></a>
                    <h5><i>Headphones</i></h5>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>