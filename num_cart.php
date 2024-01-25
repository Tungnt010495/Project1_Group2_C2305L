<?php 
      session_start();
      include('../db/connect_db.php');
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $product_id = $_GET['product_id'];
        $num;
        if ($_GET['action'] == "+") {
            $num = $_GET['num'] + 1;
        } else {
            $num = $_GET['num'] - 1;
        }
        if($num==0){
            $num =1;
        }
        $user_id = $_SESSION['user']; 
        $query_update_quantity = "UPDATE cart set quantity  = '$num' where  user_id = '$user_id' and product_id = '$product_id'";
        $result_update = $conn->query($query_update_quantity);
        if($result_update){
            header('Location: ../?page_name=cart');
        }
        exit();
    }
?>