<?php
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
        header("location: ../index.php?page_name=product_detail&product_id=$product_id&num=$num");
        exit();
    }
?>