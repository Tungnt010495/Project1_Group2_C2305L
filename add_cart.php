<?php 
 session_start();
 include('../db/connect_db.php');
 if(isset($_SESSION['user'])){
    if(isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];
        $user_id = $_SESSION['user'];
    
        $product_cart = "SELECT * FROM cart where '$product_id' = product_id";
        $result = $conn->query($product_cart);
        if($result->num_rows > 0){
            $product_quantity = $result->fetch_assoc();
            $quantity = $product_quantity['quantity'] +1;
            $conn->query("UPDATE cart set quantity = '$quantity' where product_id = '$product_id'");
            header('location: ../index.php');
        }else{
            $result_price = $conn->query("SELECT * FROM product where id = '$product_id'");
            $price = $result_price->fetch_assoc()['discount'];
             $query_add_cart = "INSERT INTO cart (user_id, product_id,total, quantity) VALUES ('$user_id', '$product_id','$price',1)";
             $conn->query($query_add_cart);
             header('location: ../index.php');
        }
     }
 }else{
    header('location: login.php');
    
 }


?>