<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="KitHub is your all-in-one creative hub for content creators. We offer media tools, digital products, subscription bundles, and personalized services like design kits, video editing, and downloadable templates all made for young creatives and media makers.">
    <meta name="keywords"
        content="KitHub, content creator tools, digital products, design kits, Canva templates, video editing services, social media kits, creative services, media hub, Instagram design, Reels editing, digital downloads">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="responsive.css">


    <title> KitHub | Social Media services, products and more</title>
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
            <?php
    session_start();
    if(isset($_SESSION['Email'])){
echo '<a href="logout.php">Log out</a>';
}
else{
    echo '<a href="Login.php">Login</a>';
}
 
    ?>
                <a href="Cart.php">CART</a>
            </div>
        </nav>
    </header>

    <main>
        <div id="mainimg"> </div>

        <div class="betweenSpeach">
            <h2>Make. Share. Shine</h2>
            <h4><i>Find everything you need to bring your ideas to life</i>.</h4>
            <a href="Sign.php">Get Started</a>
        </div>

        <div class="c">
            <div class="service">
                <img src="img/Desgin.jpg" alt="Design">
                <h3>Graphic Design</h3>
                <a href="Order.php"><i>Design Your Post Now!</i></a>
            </div>

            <div class="service">
                <img src="img/video editing.jpg" alt="Reel">
                <h3>Video Editing</h3>
                <a href="Order.php"><i>Creat Your Reel Now!</i></a>
            </div>
        </div>


        <div class="betweenSpeach" id="product">
            <h2>Featured Products</h2>
            <h4><i>See What's Trending Right Now</i>.</h4>
        </div>
        <br><br>

        <div>
            <div class="A">
                <!-- bootstrap 1 code start-->

                <div class="container py-4" id="Product">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                        <div class="col">


                <?php 
                include 'connect.php'
                $readfromdb = "SELECT * FROM proudcts";

                $query = mysqli_query($conn, $readfromdb);

                while ($row = mysqli_fetch_assoc($query)) { 

                $price = $_POST['Price'];

                                echo ("<div class="card h-100 text-center border-0 position-relative">
                                <div class="ratio ratio-1x1 bg-light rounded overflow-hidden p-2">
                                    <img src="img/mic.webp" class="w-100 h-100 object-fit-contain" alt="Mini Mic Pro">
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="card-title fw-semibold fst-italic mb-1">Mini Mic Pro</h6>
                                    <p class="card-text text-muted fst-italic mb-0">$price</p>
                                </div>
                                <a href="Product - MIC.php" class="stretched-link" aria-label="View Mini Mic Pro"></a>
                            </div> ");

                }

                            <div class="card h-100 text-center border-0 position-relative">
                                <div class="ratio ratio-1x1 bg-light rounded overflow-hidden p-2">
                                    <img src="img/mic.webp" class="w-100 h-100 object-fit-contain" alt="Mini Mic Pro">
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="card-title fw-semibold fst-italic mb-1">Mini Mic Pro</h6>
                                    <p class="card-text text-muted fst-italic mb-0">25$</p>
                                </div>
                                <a href="Product - MIC.php" class="stretched-link" aria-label="View Mini Mic Pro"></a>
                            </div>


                        </div>

                        <div class="col">
                            <div class="card h-100 text-center border-0 position-relative">
                                <div class="ratio ratio-1x1 bg-light rounded overflow-hidden p-2">
                                    <img src="img/lights.jpg" class="w-100 h-100 object-fit-contain"
                                        alt="Studio Lights Kit">
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="card-title fw-semibold fst-italic mb-1">Studio Lights Kit</h6>
                                    <p class="card-text text-muted fst-italic mb-0">20$</p>
                                </div>
                                <a href="Product - Light.php" class="stretched-link"
                                    aria-label="View Studio Lights Kit"></a>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 text-center border-0 position-relative">
                                <div class="ratio ratio-1x1 bg-light rounded overflow-hidden p-2">
                                    <img src="img/Tripod.jpg" class="w-100 h-100 object-fit-contain"
                                        alt="Camera Tripod">
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="card-title fw-semibold fst-italic mb-1">Camera Tripod</h6>
                                    <p class="card-text text-muted fst-italic mb-0">28$</p>
                                </div>
                                <a href="Product - Tripod.php" class="stretched-link"
                                    aria-label="View Camera Tripod"></a>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 text-center border-0 position-relative">
                                <div class="ratio ratio-1x1 bg-light rounded overflow-hidden p-2">
                                    <img src="img/Background Screen.webp" class="w-100 h-100 object-fit-contain"
                                        alt="Background Screen">
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="card-title fw-semibold fst-italic mb-1">Background Screen</h6>
                                    <p class="card-text text-muted fst-italic mb-0">26$</p>
                                </div>
                                <a href="Product - Screen.php" class="stretched-link"
                                    aria-label="View Backdrop Kit"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bootstrap 1 code End-->


            <div class="betweenSpeach">
                <h2>Believe in Transparency</h2>
                <h4><i>See how your ideas transform into unique visuals.</i></h4>
                <h4><i>Everything is carefully crafted by us, from concept to final touch.</i></h4>
            </div>

            <div class=EditingClip>
                <video autoplay muted>
                    <source src="img/video editing.mp4" type="video/mp4">
                </video>
            </div>

            <div class="betweenSpeach">
                <h4><i>Since day one, we've been passionate about crafting creator-focused designs and edits, leading
                        a</i>
                </h4>
                <h4><i>fresh wave of content solutions. We're proud to stay small and hands-on, delivering work that</i>
                </h4>
                <h4><i>simply wouldn't exist any other way.</i></h4>
            </div>
            <br><br><br>

            <div class="betweenSpeach" id="Subscribe">
                <h2>Subscriptions</h2>
                <h4><i>Keep track of every subscription easily, all organized for you in one hub.</i></h4>
            </div>

            <div class="Subscription">
                <div class="subscard">
                    <a href="Subscription - AI  .php"><img src="img/Ai.webp" alt="Adobe Illustrator"></a>
                    <span>Adobe Illustrator</span>
                </div>

                <div class="subscard">
                    <a href="Subscription - pr.php"><img src="img/pr.jpg" alt="Adobe Premiere"></a>
                    <span>Adobe Premiere</span>
                </div>

                <div class="subscard">
                    <a href="Subscription - Canva.php"><img src="img/canva.jpg" alt="Canva"></a>
                    <span>Canva</span>
                </div>

                <div class="subscard">
                    <a href="Subscription - Figma.php"><img src="img/figma.png" alt="Figma"></a>
                    <span>Figma</span>
                </div>
            </div>


            <br><br><br>
            <div class="betweenSpeach">
                <h2>Make Work Meaningful</h2>
                <h4><i>We're here because we believe that your work deserves the best. A team that loves working </i>
                </h4>
                <h4><i>together is the magic that makes it all happen.</i></h4>
                <a href=""><i>Take a Look Over Our Story</i></a>
            </div>
            <br><br><br>
            <div class="End">
                <img src="img/Logo no background.png" alt="KitHub Logo">
                <h2>Design Inspires</h2>
                <h4><i>Design your content perfectly, so your project can shine.</i></h4>
            </div>
    </main>
    <br><br><br><br><br><br><br>
    <footer id="footer">
        <div class="footer-container">
            <div class="footer-links">
                <a href="Shop.php">Shop</a>
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
                <a href="https://www.instagram.com/_yousef_nabeel_/profilecard/?igsh=dzVtd200eThzNHo1"><i class="fa-brands fa-instagram"></i></a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include 'footer.php'; ?>
