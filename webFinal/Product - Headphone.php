<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="Style.css">
    <title>Product</title>
</head>

<body>

    <header>
        <nav>
            <div> <a href="">SHOP</a>
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
                <img src="img/Headphones.jpg" alt="Headphones">
            </div>
            <div class="product-options">
                <h2>Headphones</h2>
                <h4><i>Stylish and comfortable headphones delivering clear sound with noise isolation. Perfect for
                        music, gaming, or calls, allowing hours of use without discomfort..</i></h4>
                <p class="price">30$</p>

             <form method="POST" action="cart_actions.php">
                 <input type="hidden" name="action" value="add">
                <input type="hidden" name="product_id" value="5">
                 <button type="submit" class="product-btn" id="product">Buy Now</button>
                </form>           
 </div>
        </div>

        <hr class="line">


        <div class="other-product">
            <h2>You May Love To See This</h2>
            <div class="product-list">
                <div class="product">
                    <a href="Product - MIC.php"><img src="img/mic.webp" alt="Mini Mic Pro"></a>
                    <h5><i>Mini Mic Pro</i></h5>
                </div>

                <div class="product">
                    <a href="Product - Light.php"><img src="img/lights.jpg" alt="Studio Lights Kit"></a>
                    <h5><i>Studio Lights Kit</i></h5>
                </div>

                <div class="product">
                    <a href="Product - Tripod.php"><img src="img/Tripod.jpg" alt="Camera Tripod"></a>
                    <h5><i>Camera Tripod</i></h5>
                </div>

                <div class="product">
                    <a href="Product - Screen.php"><img src="img/Background Screen.webp" alt="Background Screen"></a>
                    <h5><i>Background Screen</i></h5>
                </div>

            </div>
        </div>
    </main>


    <footer id="footer">
        <div class="footer-container">
            <div class="footer-links">
                <a href="">Shop</a>
                <a href="Order.php">Order</a>
                <a href="#Product">Products</a>
                <a href="#Subscribe">Subscribe</a>
            </div>

            <div class="footer-listen">
                <h2>We Listen</h2>
                <p><i>Every idea, question, or feedback you share helps us grow and create better for you.Reach out
                        anytime we're here to hear you and make your vision real.</i></p>
            </div>

        <form class="footer-email" method="POST">
            <h2>Send Email</h2>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Add text" required></textarea>
                <button class="send-btn" type="submit" name="sendBtn">Send</button>
        </form>

            <div>
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'});" class="up">Go Up</button>
            </div>
        </div>
        <br><br>
        <div class="footer-bottom">
            <div class="footer-social">
                <a href="https://www.facebook.com/yousef.nabeel.184306"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/_yousef_nabeel_/profilecard/?igsh=dzVtd200eThzNHo1"><i
                        class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/yousef-nabeel-032b6b295/"><i class="fa-brands fa-linkedin"></i></a>
            </div>

            <div class="footer-span">
                <span>+962 77 027 59 74</span>
            </div>
            <div class="footer-c">
                <p>© This Site Made With Passion By Yousef Nabeel</p>
            </div>
        </div>

    </footer>
</body>

</html>

<?php include 'footer.php'; ?>
