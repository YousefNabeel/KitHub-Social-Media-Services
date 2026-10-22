<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriptions</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="Style.css">
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

    <div>
        <main>
            <div class="subscription-container">
                <h2>Canva</h2>
                <h4><i>An easy-to-use design platform with templates that let you create posts, presentations, and
                        graphics quickly and professionally.</i></h4>

                <div class="subscription-options">
                    <div class="subscription-card">
                        <img src="img/canva.jpg" alt="1 month">
                        <h4><i>1 month / 5 $</i></h4>
                    </div>
                    <div class="subscription-card">
                        <img src="img/canva.jpg" alt="3 months">
                        <h4><i>3 months / 12 $</i></h4>
                    </div>
                    <div class="subscription-card">
                        <img src="img/canva.jpg" alt="6 months">
                        <h4><i>6 months / 20 $</i></h4>
                    </div>
                    <div class="subscription-card">
                        <img src="img/canva.jpg" alt="12 months">
                        <h4><i>12 months / 35 $</i></h4>
                    </div>
                </div>
            </div>

            <hr class="line">

            <div class="other-product">
                <h2>You May Love To See This</h2>
                <div class="product-list">
                    <div class="product">
                        <a href="Subscription - pr.php"><img src="img/pr.jpg" alt="Adobe Premiere"></a>
                        <h5>Adobe Illustrator</h5>
                    </div>
                    <div class="product">
                        <a href="Subscription - AI  .php"><img src="img/Ai.webp" alt="Adobe Illustrator"></a>
                        <h5>Canva</h5>
                    </div>
                    <div class="product">
                        <a href="Subscription - Figma.php"><img src="img/figma.png" alt="Figma"></a>
                        <h5>Figma</h5>
                    </div>
                    <div class="product">
                        <a href="Subscription - Capcut.php"><img src="img/capcut.jpg" alt="capcut"></a>
                        <h5>Capcut</h5>
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
                    <a href="https://www.linkedin.com/in/yousef-nabeel-032b6b295/"><i
                            class="fa-brands fa-linkedin"></i></a>
                </div>

                <div class="footer-span">
                    <span>+962 77 027 59 74</span>
                </div>
                <div class="footer-c">
                    <p>© This Site Made With Passion By Yousef Nabeel</p>
                </div>
            </div>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include 'footer.php'; ?>
