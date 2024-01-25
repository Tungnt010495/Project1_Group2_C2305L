<?php 
    session_start();
    include('../db/connect_db.php');
    if(isset($_SESSION['user'])){
        $user_id = $_SESSION['user'];
        $product_id =  $_GET['product_id'];
        $num =  $_GET['num'];
        $result_price_product = $conn->query("SELECT discount FROM product where id = '$product_id'");
        if($result_price_product){
            $price = $result_price_product->fetch_assoc()['discount'];
            $total_money = $price * $num;
            $result_insert_order = $conn->query("INSERT INTO orders(user_id,total_money) VALUES ('$user_id','$total_money') ");
            if($result_insert_order){
            $order_id = mysqli_insert_id($conn);
            $query_insert_order_detail = "INSERT INTO order_details(order_id,product_id,num) VALUES ('$order_id','$product_id','$num')";
            $result_insert_order_detail= $conn->query($query_insert_order_detail);
            header("Location: ../index.php?page_name=product_detail&product_id=" . $product_id . "&num=1");

            }
        }
    }
?>