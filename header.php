<?php
     include('db/connect_db.php');
    session_start();

    $query_category ="SELECT*FROM category";
    $result = $conn->query($query_category);
    $categorys=[];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $categorys[] = $row;
        }
    }
    if(isset($_SESSION['user'])){
    $user_id = $_SESSION['user']; 
    $query_num_cart = "SELECT COUNT(*) as num FROM cart where user_id = '$user_id'";
    $result = $conn->query($query_num_cart);
    $num_cart = $result->fetch_assoc();    

    }
    // $conn->close();
?>
<header>
    <style>
        .cartContainer {
            display: flex;
            align-items: center;
            position: relative;
        }

        .cartCount {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: none;
            color: black;
            border-radius: 50%;
            margin-top: 3px;
            padding: 4px;
            font-size: 12px;
            font-weight: bold;
        }

        #myModal {
            z-index: 9999;
            right: 2%;
            top: 8%;
            pointer-events: none;
        }

        .modal-user {
            width: 20%;
            min-height: 100px;
            background: white;
            float: right;
            pointer-events: auto;
            border: 1px solid #DDDDDD;
            border-radius: 10px;
            padding: 10px
        }

        .row.ms-2 {
            border-radius: 10px;
        }

        .row.col-12.ms-2:hover {
            background: #EEEEEE;
        }
    </style>
    <div id="myModal" class="modal-content">
        <div class="modal-user">
            <div class="col-12 ms-1" style="width:90%; ">
                <div class="row ms-2" style="background: white;border: 1px solid #DDDDDD;border-radius: 10px;">
                    <a class=" col-2 navbar-brand mb-1 ">
                        <img src="image/slider/avatar.jpg" alt="mdo" width="27" height="27" class="rounded-circle mt-2">
                    </a>
                    <p class="col-10 mt-2">Trần Thanh Tùng</p>
                    <hr>
                    <a href="?page_name=user" class="col-12 mb-3" style="text-decoration: none;">See
                        personal page</a>
                </div>

            </div>
            <div class="col-12 mt-2 ">
                <div class="row col-12 ms-2 me-2 ">
                    <a class="col-12 navbar-brand d-flex me-2" href="?page_name=about_us"><img class="mt-1 me-2"
                            style="height:20px;display: inline-block;" src="image/slider/about.png" alt="Việt Nam"
                            class="img-responsive">
                        <p class="">About_us</p>
                    </a>
                </div>
                <div class="row col-12 ms-2 me-2 ">
                    <a class="col-12 navbar-brand d-flex" href="?page_name=contact"><img class="mt-1 me-2"
                            style="height:20px;display: inline-block;" src="image/slider/contact-us.png" alt="Việt Nam"
                            class="img-responsive">
                        <p class="">Contact_us</p>
                    </a>
                </div>
                <div class="row col-12 ms-2 me-2 ">
                    <a class="col-12 navbar-brand d-flex" href="?page_name=feedback"><img class="mt-1 me-2"
                            style="height:20px;display: inline-block;" src="image/slider/feedback.png" alt="Việt Nam"
                            class="img-responsive">
                        <p class="">Feedback</p>
                    </a>
                </div>
                <div class="row col-12 ms-2 me-2 ">
                    <a class="col-12 navbar-brand d-flex" href="?page_name=compare"><img class="mt-1 me-2"
                            style="height:20px;display: inline-block;" src="image/slider/compare.png" alt="Việt Nam"
                            class="img-responsive">
                        <p class="">Compare</p>
                    </a>
                </div>
                <div class="row col-12 ms-2 me-2 ">
                    <a class="col-12 navbar-brand d-flex" href="#"><img class="mt-1 me-2"
                            style="height:20px;display: inline-block;" src="image/slider/change_password.png" alt="Việt Nam"
                            class="img-responsive">
                        <p class="">Change_password</p>
                    </a>
                </div>
                <div class="row col-12 ms-2 me-2 ">
                    <a class="col-12 navbar-brand d-flex" href="include/log_out.php"><img class="mt-1 me-2"
                            style="height:20px;display: inline-block;" src="image/slider/logout.png" alt="Việt Nam"
                            class="img-responsive">
                        <p class="mb-3">Log_out</p>
                    </a>
                </div>

            </div>

        </div>
    </div>
    <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="index.php"><img style="height:40px; " src="image/slider/logoindex.png"
                    alt="Việt Nam" class="img-responsive logoimg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active ms-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link ms-2" href="shop.html">Shop</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach($categorys as $category){
                                 ?>
                            <li><a class="dropdown-item "
                                    href="?category=<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a>
                            </li>
                            <?php } ?>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item " href="index.php">All category</a></li>
                        </ul>
                    </li>
                    <li class="nav-item change">
                        <a class="nav-link" href="index.php?page_name=compare">Compare</a>
                    </li>
                    <li class="nav-item change">
                        <a class="nav-link" href="index.php?page_name=contact">Contact Us</a>
                    </li>
                    <li class="nav-item change">
                        <a class="nav-link" href="index.php?page_name=about_us">About us</a>
                    </li>
                    <li class="nav-item change">
                        <a class="nav-link" href="index.php?page_name=feedback">FeedBack</a>
                    </li>
                </ul>
                <form class="d-flex search" role="search" method="GET">
                    <input type="hidden" name="page_name" value="page_search">
                    <input class="form-control me-2 input-search" type="search" placeholder="Search" aria-label="Search"
                        name="search">
                    <button style="background:none;border:none;">
                        <img style="" src="image/slider/search.png" alt="Việt Nam" class="img-responsive">
                    </button>
                </form>
                <a class="navbar-brand cart ms-3" href="index.php?page_name=cart">
                    <div class="cartContainer">
                        <img src="image/slider/bag.png" alt="Việt Nam" class="img-responsive">
                        <div id="cartCount" class="cartCount">
                            <?php 
                            if(!isset($num_cart['num'])){
                                echo 0;
                            }else{
                                echo $num_cart['num'];
                            }
                            ?>
                        </div>
                    </div>
                </a>
                <?php if(isset($_SESSION['user'])){ ?>
                <!-- <a class="navbar-brand mb-2" href="?page_name=user"><img class="mt-1" src="image/slider/user_2.png" alt="Việt Nam"
                        class="img-responsive"></a> -->
                <a class="navbar-brand mb-2" onclick="openModal()">
                    <img src="image/slider/avatar.jpg" alt="mdo" width="27" height="27" class="rounded-circle mt-2">
                </a>
                <?php }else{?>
                <a class="navbar-brand mb-2" href="include/login.php"><img src="image/slider/user.png" alt="Việt Nam"
                        class="img-responsive"></a>
                <?php }?>


            </div>
        </div>
    </nav>
    <script>
    function openModal() {
        var modal = document.getElementById('myModal');
        if (modal.style.display === 'block') {
            modal.style.display = 'none';
        } else {
            modal.style.display = 'block';
        }
    }
    </script>

</header>