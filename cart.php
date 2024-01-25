<?php 
 if(!isset($_SESSION['user'])){
    echo '<script>window.location.href = "include/login.php";</script>';
 }
 include('db/connect_db.php');
 $user_id = $_SESSION['user']; 
 $query_cart = "SELECT * , (total*quantity) as price FROM cart where user_id = '$user_id'";
 $result = $conn->query($query_cart);
 $carts =[];
 if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $carts[] = $row; 
    }
 }
    $query_product = "SELECT*FROM product";
    $result = $conn->query($query_product);
    $products =[];
    if($result->num_rows >0) {
    while($row=$result->fetch_assoc()){
        $products[] = $row;
    }
    };
    $query_into_money = " SELECT sum(price) as into_money from (SELECT (total*quantity) as price FROM cart where user_id = '$user_id') as money ";
    $result_sum_price = $conn->query($query_into_money);
    $sum_price = $result_sum_price->fetch_assoc();
?>
<br><br><br>
<div class="container mt-3">
    <div class="row">
       <?php 
        if(count($carts)>0){

       ?>
             <div class="col-xl-8">
            <div class="cart-list">
                <h2 class="cart-title">YOUR CART</h2>
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>PRODUCT NAME</th>
                            <th>DISSCOUNT</th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($carts as $cart){
                                foreach($products as $product){
                                    if($cart['product_id'] == $product['id']){
                            
                        ?>
                        <tr>
                            <td>
                                <div class="cart-item">
                                    <div class="cart-img">
                                        <img style="height=150px;width:150px;border-radius:20px"
                                            src="image/product/<?php echo $product['thumbnail'] ?>" alt="anh">
                                    </div>
                                    <div class="cart-content mt-5 ms-3" style="width:150px">
                                        <?php echo $product['title'] ?></div>
                                </div>
                            </td>
                            <td>
                                <p><?php echo $product['discount'] ?></p>
                            </td>
                            <td>
                                <div class="cart-quantity">
                                    <form method="GET" action="include/num_cart.php" class="">
                                        <input class='down' value="-" type="submit" name="action">
                                        <input type="hidden" name="product_id"
                                            value="<?php echo $cart['product_id'] ?>">
                                        <input class="num" name="num" type="text"
                                            value="<?php echo $cart['quantity'] ?>">
                                        <input class="up" value="+" type="submit" name="action">
                                    </form>
                                </div>
                            </td>
                            <td>
                                <div class="cart-price"><?php echo $cart['price'] ?></div>
                            </td>
                            <td>
                                <a href="include/del_prd_cart.php?product_id=<?php echo $cart['product_id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="black" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                    </svg></a>
                            </td>
                        </tr>
                        <?php } 
                        }
                    }?>
                    </tbody>
                </table>

                <a href="?page_name=home" class="cart-next-index">
                    &larr; Continue shopping
                </a>

            </div>
        </div>
        <div class="col-xl-4 ">
            <div style="padding: 22px;background: rgba(247, 248, 249, 0.5);">
                <div class="cart-header-pay">
                    <h3>Total cart amount</h3>
                    <div class="cart-sumary">
                        <p>Gross product</p>
                        <p><?php  echo $num_cart['num']; ?></p>
                    </div>
                    <div class="cart-sumary">
                        <p>Into money</p>
                        <p><?php echo $sum_price['into_money'] ?></p>
                    </div>
                </div>
                <div class="cart-body-pay mt-3">
                    <div class="left-inner-note mt-2 me-2">
                        <img src="image/slider/mark.png" alt="">
                    </div>
                    <div class="content-inner-note">
                        <p>Miễn <b>đổi trả</b> đối với sản phẩm đồng giá / sale trên 50%</p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="cart-btn-pay">
                <a href="include/pay_cart.php?into_money=<?php echo $sum_price['into_money'] ?>" class="pay">
                    Pay
                </a>
            </div>
       <?php }else{ ?>
            <div class="col-12 text-center">
                <h2 style="color:red;">There are no products in the cart</h2>
            </div>
       <?php } ?>
        </div>
    </div>
    <br>
    <?php 
    if(count($carts)<=0){
        echo "<br><br><br><br><br><br><br><br><br>";
    }
    ?>