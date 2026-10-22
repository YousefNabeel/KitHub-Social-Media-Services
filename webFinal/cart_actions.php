<?php
session_start(); 


include 'connect.php'; 

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['action']) && $_POST['action'] == 'add') {
    $product_id = intval($_POST['product_id']);
    
    $stmt = $conn->prepare("SELECT id, name, price, image FROM products WHERE id = ?");
    $stmt->bind_param("i", $product_id); 
    $stmt->execute();
    $result = $stmt->get_result(); 
    
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc(); 
        
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity']++;
        } else {
            $_SESSION['cart'][$product_id] = [
                'name' => $product['name'],
                'price' => $product['price'],
                'image' => $product['image'], 
                'quantity' => 1 
            ];
        }
    }
    header("Location: Cart.php"); 
    exit(); 
}

if (isset($_POST['action']) && $_POST['action'] == 'update' && isset($_POST['id']) && isset($_POST['quantity'])) {
    $id = intval($_POST['id']);
    $quantity = intval($_POST['quantity']);
    
    if ($quantity > 0) {
        $_SESSION['cart'][$id]['quantity'] = $quantity; 
    } else {
        unset($_SESSION['cart'][$id]);
    }
    header("Location: Cart.php");
    exit();
}

if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]); 
    }
    header("Location: Cart.php");
    exit();
}
?>