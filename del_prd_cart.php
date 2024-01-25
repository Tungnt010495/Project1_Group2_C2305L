<?php 
    session_start();
    include('../db/connect_db.php');
    $user_id = $_SESSION['user'];
    if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
    $query = "DELETE FROM cart where product_id = '$product_id' and user_id = '$user_id' ";
    $result_product_cart = $conn->query($query);
    if($result_product_cart){
        header('Location: ../?page_name=cart');
        exit();
    }

    }
?>