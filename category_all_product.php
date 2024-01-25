<?php include('db/connect_db.php') ;
  $category_id = $_GET['category'];
  $currentPage = isset($_GET['page'])? $_GET['page'] :1;
  $perPage = 8;
  $offSet = ($currentPage-1)*$perPage;
  $toltalQueryRows = "SELECT COUNT(*) AS num FROM (SELECT * FROM product WHERE category_id='$category_id') AS temp;";
  $toltalResultRows = $conn->query($toltalQueryRows);
  $totalRows = $toltalResultRows->fetch_assoc();
  $rows = $totalRows['num'];
  $numberPages = ceil($rows/$perPage);

  $query_item ="SELECT * FROM product WHERE category_id='$category_id' LIMIT $perPage OFFSET $offSet";
  $result = mysqli_query($conn, $query_item);
  $products=[];
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          $products[]=$row;
      }
  }
  ?>

<main>

    <?php foreach($categorys as $category){
    if($category['id'] == $_GET['category']){
        $category_id = $category['id'];
 ?>
    <div class="container px-4 py-5" style="transform: scale(0.9)" id="hanging-icons">
        <h2 class="pb-2 border-bottom"><?php echo $category['name'] ?></h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3  text-content-center">
            <?php 
          foreach($products as $product){
          ?>
            <div class=" col-12 col-xl-3">
                <div class="card" style="width: 18rem;">
                    <div class="thums text-content-center">
                        <a href="?page_name=product_detail&product_id=<?php echo $product['id'] ?>&num=1"><img
                                style="height:250px; width:250px;"
                                src="./image/product/<?php echo $product['thumbnail'] ?>" class="card-img-top"
                                alt="..."></a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['title'] ?></h5>
                        <p>
                            <span class="discounted-price" style="color:red;">$<?php echo $product['discount'] ?></span>
                            <span class="original-price ms-3"
                                style="text-decoration: line-through;">$<?php echo $product['discount'] ?></span>
                        </p>
                        <a href="#" class="btn btn-dark">Add to cart</a>
                    </div>
                </div>
            </div>
            <?php 
          } ?>
        </div>
        <div class=" col-xl-12 text-center class-page">
            <?php 
                for($page=1;$page<= $numberPages;$page++){
                    ?>
            <a class='page <?php echo ($currentPage==$page) ? "changecolor" : "" ?> mt-2'
                href="?page=<?php echo $page?>&category=<?php echo $category_id; ?>">
                <?php echo $page?>
            </a>
            <?php
                 }
                ?>
        </div>
    </div>
    <?php 
    }
} ?>

</main>