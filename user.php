<br><br>
<?php 
//  session_start();
 include('db/connect_db.php');
 $user_id = $_SESSION['user'];
 $result_user = $conn->query("SELECT * FROM users where id = '$user_id'");
 if($result_user->num_rows>0){
    $user = $result_user->fetch_assoc();
 }
 $query_order = "SELECT * FROM orders where user_id = '$user_id'";
 $orders = [];
 $result_order = $conn->query($query_order);
 if($result_order->num_rows > 0){
    while($row = $result_order->fetch_assoc()){
        $orders[] = $row;
    }
 }
 $oder_details = [];
 foreach($orders as $order){
    $id = $order['id'];
    $query_order_detail = "SELECT * FROM order_details where order_id = '$id'";
    $result_order_detai = $conn->query($query_order_detail);
    if($result_order_detai->num_rows > 0){
        while($row = $result_order->fetch_assoc()){
            $orders_details[] = $row;
        }
     }
 }
?>
<style>
.short-hr {
    height: 1px;
    border: none;
    background-color: #999;
    width: 86%;
    margin: 10px auto;

}
</style>

<hr class="short-hr">
<div class="container-sm justify-content-center">
    <div class="row g-0 top-user  position-relative  " style="height: 300px;width:1100px;background-image: url('./image/slider/background.png') !important;
        border-radius: 10px;margin: 0 auto;">
        <div class="avatar mt-5 ms-5 position-absolute bottom-0 " style="top : 150px; bottom: 0;">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <style>
                .bd-placeholder-img {
                    border: 2px solid white;
                }
                </style>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                <image href="./image/slider/avatar.jpg" width="100%" height="100%" />
            </svg>
            <h2 class="col-1 text-center"><?php echo $user['email'] ?></h2>
        </div>
    </div>
    <br><br><br><br>
    <!-- <hr class="short-hr"> -->
</div>
<div class="container-fluid" style="background:#e4e6eb;border-top: 2px solid #DDDDDD">
    <div class="row" style="min-height: 300px;width:1100px;margin: 0 auto;">
        <div class="col-4">
            <div class="col-10 ms-3 mt-3 py-3 px-3"
                style="background: white;border: 1px solid #DDDDDD;border-radius: 10px;">
                <h4 class="text-center">Introduce</h4>
                <div class="col-12 mt-3 ms-2">
                    <div class="col-12">
                        <div class="" style="display: flex;">
                            <b style="display: inline-block; margin-right:5px;min-width:62px">name: </b>
                            <p style="display: inline-block;margin-bottom:0px"><?php echo $user['fullname'] ?></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="">
                            <b style="display: inline-block; margin-right:2px;min-width:62px">email: </b>
                            <p style="display: inline-block;margin-bottom:0px"><?php echo $user['email'] ?></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="">
                            <b style="display: inline-block; margin-right:2px;min-width:62px">phone: </b>
                            <p style="display: inline-block;margin-bottom:0px"><?php echo $user['phone_number'] ?></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="">
                            <b style="display: inline-block; margin-right:2px;min-width:62px">address: </b>
                            <p style="display: inline-block;margin-bottom:0px"><?php echo $user['address'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-1">
                    <a href="?page_name=user&edit_user=true">
                        <button style="width:100%;border-radius:10px;background:#DDDDDD;color:black"><strong
                                style=" font-size: 18px">Edit
                                information</strong></button>
                    </a>
                </div>
            </div>
        </div>
        <?php if(isset($_GET['edit_user'])){ ?>
        <div class="col-8 mt-3 mb-3">
            <div class="col-12 edit-user"
                style="min-height:200px;background: white;border: 1px solid #DDDDDD;border-radius: 10px;">
                <form action="#" method="POST" class="form" id="form-1"
                    style="margin: 0 auto; margin-top: 20px;margin-bottom: 20px">
                    <div class="form-group">
                        <label for="fullname" class="form-label">Name</label>
                        <input id="fullname" name="fullname" type="text" placeholder="" class="form-control"
                            value="<?php echo $user['fullname'] ?>" required>
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <input id="address" name="address" type="text" placeholder="" class="form-control"
                            value="<?php echo $user['address'] ?>" required>
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <input id="phone" name="phone" maxlength="10" placeholder="" type="text" class="form-control"
                            value="<?php echo $user['phone_number'] ?>" required>
                        <span class="form-message"></span>
                    </div>


                    <button class="form-submit">Edit</button>
                </form>
            </div>
        </div>
        <?php }else{ ?>
        <div class="col-8 mt-3">
            <?php foreach($orders as $order){ ?>
            <div class="col-12 show-order"
                style="min-height:200px;background: white;border: 1px solid #DDDDDD;border-radius: 10px;">
                <div class="col-5 image-order">

                </div>
                <div class="col-7 content-order">

                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</div>