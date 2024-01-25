<?php
    include('db/connect_db.php');
    $search_item = $_GET['search'];

    $currentPage = isset($_GET['page'])? $_GET['page'] :1;
    $perPage = 8;
    $offSet = ($currentPage-1)*$perPage;
    $toltalQueryRows = "SELECT COUNT(*) AS num FROM (SELECT * FROM product WHERE title LIKE '%$search_item%') AS temp;";
    $toltalResultRows = $conn->query($toltalQueryRows);
    $totalRows = $toltalResultRows->fetch_assoc();
    $rows = $totalRows['num'];
    $numberPages = ceil($rows/$perPage);

    $query_item ="SELECT * FROM product WHERE title LIKE '%$search_item%' LIMIT $perPage OFFSET $offSet";
    $result = mysqli_query($conn, $query_item);
    $products=[];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $products[]=$row;
        }
    }

?>
<br><br>
<main>
    <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom text-center">All Product Search</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3  text-content-center">
            <?php foreach($products as $product){

            ?>
            <div class=" col-12  col-md-6 col-lg-4 col-xl-3">
                <div class="card" style="width: 18rem;">
                    <div class="thums text-content-center">
                        <a href="?page_name=product_detail&product_id=<?php echo $product['id'] ?>&num=1">
                            <img style="height:250px; width:250px;"
                                src="./image/product/<?php echo $product['thumbnail'] ?>" class="card-img-top"
                                alt="..."></a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['title'] ?></h5>
                        <p>
                            <span class="discounted-price" style="color:red;">$<?php echo $product['discount'] ?></span>
                            <span class="original-price ms-3"
                                style="text-decoration: line-through;">$<?php echo $product['price'] ?></span>
                        </p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <p class="text-center " style="color:red">
            <?php if (count($products) <= 0) {
        echo "There were no results for your search";
    } ?>
        </p>
        <div class=" col-xl-12 text-center class-page">
            <?php 
                $page_name ="page_search";
                for($page=1;$page<= $numberPages;$page++){
                    ?>
            <a class='page <?php echo ($currentPage==$page) ? "changecolor" : "" ?> mt-2'
                href="?page=<?php echo $page?>&page_name=<?php echo $page_name ?>&search=<?php echo $search_item ?>">
                <?php echo $page?>
            </a>
            <?php
                 }
                ?>
        </div>
    </div>


</main>