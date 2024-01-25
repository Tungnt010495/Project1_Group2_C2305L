<?php 
    session_start();
    include('../db/connect_db.php');
    if(isset($_SESSION['user'])){
        $user_id = $_SESSION['user'];
    }
    $result_cart_product = $conn->query("SELECT * FROM cart where user_id = '$user_id'");
    $cart_products = [];
    if($result_cart_product->num_rows >0){
        while($row = $result_cart_product->fetch_assoc()){
            $cart_products[] = $row;
        }
        print_r($cart_products);
    }
    if(isset($_GET['into_money'])){
        $total_money = $_GET['into_money'];
        echo $total_money;
        $result_insert_order = $conn->query("INSERT INTO orders(user_id,total_money) VALUES ('$user_id','$total_money') "); 
        if ($result_insert_order) {
        $order_id = mysqli_insert_id($conn);
        foreach($cart_products as $product){
            $product_id = $product['product_id'];
            $num = $product['quantity'];
            $query_insert_order_detail = "INSERT INTO order_details(order_id,product_id,num) VALUES ('$order_id','$product_id','$num')";
            $result_insert_order_detail= $conn->query($query_insert_order_detail);
            if($result_insert_order_detail){
                $query_delete_cart = "DELETE FROM cart where user_id ='$user_id'";
                $conn->query($query_delete_cart);
                if($query_delete_cart){
                    header('Location: ../?page_name=notification');
                }
            }
        }
    
        }

    }
?>