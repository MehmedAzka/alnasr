<?php
session_start(); // Start or resume the session
require 'connection.php'; // Include your database connection

if (!isset($_SESSION['user_id'])) {
    header('Location: sign.php');
    exit();
}

if (isset($_POST['addCart'])) {
    $product_id = $_POST['product_id'];
    $quantity = intval($_POST['quantity']);
    $status = "ordered";

    // Mendapatkan user_id dari sesi (misalnya, setelah pengguna login)
    $user_id = $_SESSION['user_id'];

    if ($quantity <= 0) {
        $_SESSION['alert_min'] = "You cannot fill in below the number 0";
    } else {
        // Memeriksa apakah product_id sudah ada dalam cart untuk user_id tertentu
        $sql = "SELECT product_id FROM cart WHERE user_id = ? AND product_id = ? AND status = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $user_id, $product_id, $status);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Jika product_id sudah ada dalam cart, lakukan update quantity
            $sql = "UPDATE cart SET quantity = quantity + ? WHERE user_id = ? AND product_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iii", $quantity, $user_id, $product_id);
            $stmt->execute();
        } else {
            // Jika product_id belum ada dalam cart, lakukan insert data baru
            $sql = "INSERT INTO cart (user_id, product_id, quantity, status) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iiis", $user_id, $product_id, $quantity, $status);
            $stmt->execute();
        }

        header('Location: cart.php');
        exit;
    }
}

if (isset($_POST['delete_order'])) {
    $id_to_delete = intval($_POST['id_to_delete']);

    $query = "DELETE FROM cart WHERE cart_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id_to_delete);
    $stmt->execute();
    $stmt->close();

    header('Location: cart.php');
    exit;
}

if (isset($_POST['plus'])) {
    $id_cart = intval($_POST['id_cart']);
    $no = 1;

    $query = "UPDATE cart SET quantity = quantity + ? WHERE cart_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $no, $id_cart,);
    $stmt->execute();
    $stmt->close();
}

if (isset($_POST['min'])) {
    $id_cart = intval($_POST['id_cart']);
    $no = 1;

    $query = "UPDATE cart SET quantity = quantity - ? WHERE cart_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $no, $id_cart,);
    $stmt->execute();
    $stmt->close();
}

if (isset($_POST["pay"])) {
    $id_cart = intval($_POST["id_cart"]);
    $text = "waiting";

    $query = "UPDATE cart SET `status` = ? WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $text, $id_cart,);
    $stmt->execute();
    $stmt->close();
}

?>