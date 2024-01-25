<?php 
  $product_id = $_GET['product_id'];
  $query_product = "SELECT*FROM product where id = '$product_id'";
  $result = $conn->query($query_product);
  $product;
  if($result->num_rows >0) {
    $product=$result->fetch_assoc();
  };
?>
<style>
/* .wrap-addcart.clearfix {
    display: table-row;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
} */

/*.button-x.them-gio-hang {
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    box-shadow: none;
    letter-spacing: 2px;
    padding: 13px 10px;
    line-height: 30px;
    width: 100%;
    margin-top: 10px;
    margin-right: 15px;
}

button.btn-addtocart {
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    box-shadow: none;
    letter-spacing: 2px;
    padding: 14px 90px;
    line-height: 30px;
    width: 100%;
    margin-top: 10px;
} */
</style>
<br>
<br>
<div class="container mt-5">
    <div class="row">
        <div class="col-12  col-xl-6 ">
            <div class="thums text-content-center">
                <img style="" src="image/product/<?php echo $product['thumbnail'] ?>" class="img-content" alt="...">
            </div>
        </div>

        <div class="col-12 col-xl-6 right" style="margin-left:0px">
            <div class="card-body ms-5">
                <h5 class="card-title"><?php echo $product['title'] ?></h5>
                <p class="mt-3"><?php echo $product['description'] ?></p>
                <div>
                    <img src="image/slider/star.png" alt="Việt Nam" class="img-responsive">
                    <img src="image/slider/star.png" alt="Việt Nam" class="img-responsive">
                    <img src="image/slider/star.png" alt="Việt Nam" class="img-responsive">
                    <img src="image/slider/star.png" alt="Việt Nam" class="img-responsive">
                    <img src="image/slider/star.png" alt="Việt Nam" class="img-responsive">

                </div>
                <p class="mt-3">Price :
                    <span class="discounted-price ms-3" style="color:red;">$<?php echo $product['discount'] ?></span>
                    <span class="original-price ms-3"
                        style="text-decoration: line-through;">$<?php echo $product['price'] ?></span>
                </p>
            </div>
            <hr>
            <div class="thums  ms-5">
                <div style="padding-left:25%;">
                <p class="ms-5">Thumbnail:</p>
                <img style="height:70px; width:70px;margin-left:80px"
                    src="./image/product/<?php echo $product['thumbnail'] ?>" class="card-img-top" alt="...">
                </div>
                <div class="footer-control ">
                    <div style="padding-left: 25%;">
                        <form method="GET" action="include/num_product_detail.php" style="margin:0 auto" class="ms-5">
                            <input class='down' value="-" type="submit" name="action">
                            <input class="num" name="num" type="text" value="<?php echo $_GET['num'] ?>">
                            <input class="up" value="+" type="submit" name="action">
                            <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
                        </form>
                    </div>
                    <div class="wrap-addcart clearfix mt-3 nb-3 "style="padding-left:12%;">
                        <a id="add-to-cart"
                            href="include/add_cart_prd_detail.php?product_id=<?php echo $product['id'] ?>&num=<?php echo $_GET['num'] ?>">
                            <button style="width: 200px;height:50px;background:black">ADD TO CART</button></a>
                        <a id="buy-now" class="ms-3 bg-primary"
                            href="include/pay_prd_detail.php?product_id=<?php echo $product['id'] ?>&num=<?php echo $_GET['num'] ?>">
                            <button style="width: 200px;height:50px;background:black">BUY NOW</button></a>

                    </div>
                    <br>
                </div>
            </div>

        </div>
    </div>
</div>