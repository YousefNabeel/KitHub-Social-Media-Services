<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="Style.css">
    <title>My Cart</title>
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
        <section class="cart-container">
            <h2>My Cart</h2>
            <p>Thank you for your purchase. Here are your items:</p>
            <hr>
            
            <?php
            $total_price = 0;
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $id => $item) {
                    $item_total = $item['price'] * $item['quantity'];
                    $total_price += $item_total;
                    ?>
                    <div class="cart-item">
                        <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                        <div class="cart-details">
                            <h4><?php echo htmlspecialchars($item['name']); ?></h4>
                            <p>Quantity: 
                                <input type="number" class="item-quantity" data-price="<?php echo htmlspecialchars($item['price']); ?>" value="<?php echo htmlspecialchars($item['quantity']); ?>" min="1" data-item-id="<?php echo $id; ?>">
                            </p>
                            <p class="price item-total-price">$<?php echo number_format($item_total, 2); ?></p>
                            <a href="cart_actions.php?action=remove&id=<?php echo $id; ?>" class="remove-btn">Remove</a>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>Your cart is empty.</p>";
            }
            ?>

            <div class="cart-checkout">
                <label>
                    <input type="checkbox"> I've read and understood the instructions
                </label>
                <div class="cart-summary">
                    <p>Subtotal: <span id="subtotal-price">$<?php echo number_format($total_price, 2); ?></span></p>
                    <p class="note">* Extra fees such as customs/taxes are not included.</p>
                    <button class="checkout-btn">Checkout</button>
                </div>
            </div>
        </section>

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
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.item-quantity').on('change', function() {
            var quantity = $(this).val();
            var price = $(this).data('price');
            var itemId = $(this).data('item-id');
            var itemTotalPriceElement = $(this).closest('.cart-details').find('.item-total-price');

            if (quantity > 0) {
                var newItemTotalPrice = quantity * price;
                itemTotalPriceElement.text('$' + newItemTotalPrice.toFixed(2));

                updateSubtotal();

                $.ajax({
                    url: 'cart_actions.php',
                    type: 'POST',
                    data: {
                        action: 'update',
                        id: itemId,
                        quantity: quantity
                    },
                    success: function(response) {
                        console.log('Quantity updated on server.');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating quantity:', error);
                    }
                });
            }
        });

        function updateSubtotal() {
            var newSubtotal = 0;
            $('.item-quantity').each(function() {
                var quantity = $(this).val();
                var price = $(this).data('price');
                newSubtotal += quantity * price;
            });
            $('#subtotal-price').text('$' + newSubtotal.toFixed(2));
        }
    });
    </script>
</body>

</html>