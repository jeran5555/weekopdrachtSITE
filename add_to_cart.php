<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['product_id'] ?? null;
    $size = $_POST['size'] ?? null;

    if ($id !== null && $size !== null) {
        $_SESSION['cart'][] = ['id' => $id, 'size' => $size];
    }

    header("Location: cart.php"); // or back to product
    exit;
}
?>
