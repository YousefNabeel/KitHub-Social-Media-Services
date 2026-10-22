<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="Style.css">
    <title>KitHub - Order</title>
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
                <a href="Cart.html">CART</a>
            </div>
        </nav>
    </header>

    <main class="order-container">
        <h2>Set up Your Order</h2>
        <h4><i>Here's where you customize your order, read the details, choose a
                plan, and pick the time that works for you.</i></h4>

        <h3>Choose the Service</h3>

        <div class="service-options">
            <div class="service-card">
                <h4>Graphic Design</h4>
            </div>
            <div class="service-card">
                <h4>Video Editing</h4>
            </div>
            <div class="service-card">
                <h4>Photography</h4>
            </div>
            <div class="service-card">
                <h4>Content Writing</h4>
            </div>
        </div>

        <div class="form-section">
            <h3>Service Details</h3>
            <h4><i>Fill the form below with your project details, choose the type, and add your preferences.</i></h4>

            <label>Choose Type:</label>
            <select>
                <option>Graphic Design</option>
                <option>Video Editing</option>
                <option>Photography</option>
                <option>Content Writing</option>
            </select>

            <label>Project Description:</label>
            <textarea placeholder="Write about your project..."></textarea>

            <label>Upload Files:</label>
            <input type="file">

            <label>Preferred Style:</label>
            <input type="text" placeholder="Minimal, Modern, Classic...">

            <label>Delivery Time:</label>
            <input type="text" placeholder="e.g. 5 Days">

            <label>Contact Email:</label>
            <input type="email" placeholder="your@email.com">

            <div class="form-buttons">
                <button class="continue-btn">Continue</button>
                <button class="back-btn">Back</button>
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
