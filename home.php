<?php 
include('db/connect_db.php');

  $query_slide="SELECT*FROM slider where slider_active=1";
  $result = $conn->query($query_slide);
  $sliders = [];
  if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $sliders[] = $row;
     }
    };
  $query_product = "SELECT*FROM product";
  $result = $conn->query($query_product);
  $products =[];
  if($result->num_rows >0) {
    while($row=$result->fetch_assoc()){
       $products[] = $row;
    }
  };
  $conn->close();
  ?>
<style>
.imgae-home {
    max-width: 100%;
    height: auto;
}
</style>
<!--Slide-->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="width:100%">
        <?php foreach($sliders as $slider){
         ?>
        <div class="carousel-item active">
            <img style="height:697px;" src="./image/slider/<?php echo $slider['slider_image'] ?>" class="d-block w-100">
        </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--Slide End-->
<?php foreach($categorys as $category){
  $category_id = $category['id'];
  $category_product =0;
 ?>
<div class="container px-4 " style="transform: scale(0.9)"  id="hanging-icons">
    <h2 class="pb-2 border-bottom"><?php echo $category['name'] ?></h2>
    <div class="col-12 row g-4 py-5 row-cols-1 row-cols-lg-3 ">

        <?php 
        
          foreach($products as $product){
          if($product['category_id'] == $category_id){
            if($category_product>=4){
                break;
            }
            $category_product++;
          
          ?>
        <input type="hidden" id="title_compare_<?php echo $product['id']?>" value="<?php echo $product['title'] ?>">
        <input type="hidden" id="discount_compare_<?php echo $product['id']?>"
            value="<?php echo $product['discount'] ?>">
        <input type="hidden" id="price_compare_<?php echo $product['id']?>" value="<?php echo $product['price'] ?>">
        <input type="hidden" id="description_compare_<?php echo $product['id']?>"
            value="<?php echo $product['description'] ?>">
        <div class=" col-12 col-md-6 col-lg-4 col-xl-3 text-center">
            <div class="card" style="width: 18rem;">
                <div class="thums text-content-center">
                    <a href="?page_name=product_detail&product_id=<?php echo $product['id'] ?>&num=1">
                        <img style="height:250px; width:250px;" id="thumbnail_compare_<?php echo $product['id']?>"
                            src="./image/product/<?php echo $product['thumbnail'] ?>" class="card-img-top"
                            alt="..."></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['title'] ?></h5>
                    <p>
                        <span class="discounted-price" style="color:red;">$<?php echo $product['discount'] ?></span>
                        <span class="original-price ms-3"
                            style="text-decoration: line-through;">$<?php echo $product['price'] ?></span>
                        <a href="include/download.php?product_id=<?php echo $product['id']; ?>" style="color:black">
                            <svg style="display: inline-block;" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-download ms-3 mb-2" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                <path
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                            </svg>
                        </a>
                    </p>
                    <a href="include/add_cart.php?product_id=<?php echo $product['id']; ?>"
                        class=" col-12 col-xl-12 btn btn-dark">Add to cart</a>
                </div>
            </div>
        </div>
        <?php 
          if($category_product == 4){
            $category_product == 0;
            break;
          }
        }
          } ?>
    </div>
    <div class="col-12 col-xl-12 text-center ">
        <a href="?category=<?php echo $category['id'] ?>">
            &larr; See more &rarr;
        </a>
    </div>
</div>

<?php } ?>
<!-- ----------------------------------------category and product end------------------------------------------------- -->
<!-- <div class="container">
    <div class="d-flex justify-content-center" >
        <div class="col-3">
            <div class="embed-responsive embed-responsive-1by1">
                <video id="myVideo1" autoplay muted class="embed-responsive-item" src="image/slider/video4.mp4" style="height: 100%;">
                    
                </video>
            </div>
        </div>
        <div class="col-3">
            <div class="embed-responsive embed-responsive-1by1" >
                <video id="myVideo2" autoplay muted class="embed-responsive-item" src="image/slider/video1.mp4" style="height: 100%;">
                </video>
            </div>
        </div>
        <div class="col-3">
            <div class="embed-responsive embed-responsive-1by1" >
                <video id="myVideo3" autoplay muted class="embed-responsive-item" src="image/slider/video2.mp4" style="height: 100%;">
                    
                </video>
            </div>
        </div>
        <div class="col-3">
            <div class="embed-responsive embed-responsive-1by1" >
                <video id="myVideo4" autoplay muted class="embed-responsive-item" src="image/slider/video3.mp4" style="height: 100%;">
                    
                </video>
            </div>
        </div>
    </div>
</div> -->


<div class="container">
<!-- 
    <div class="title">
        @lata.offical

        <div class="caption">Theo dõi Lata trên Instagram</div>

    </div> -->

    <div class="snpt-wdgt--liveig">
        <script src="https://snapppt.com/widgets/liveig/d6431784-c25b-40b3-b155-59feba72a70a" async="" defer=""
            class="snptwdgt_init_prldr snptwdgt_init"></script>
            <div class="col-12 d-flex justify-content-center">
        <!-- <video id="myVideo1" autoplay muted class="embed-responsive-item" src="image/slider/video1.mp4" ></video>
        <video id="myVideo2" autoplay muted class="embed-responsive-item" src="image/slider/video2.mp4" ></video>
        <video id="myVideo3" autoplay muted class="embed-responsive-item" src="image/slider/video3.mp4" ></video>
        <video id="myVideo4" autoplay muted class="embed-responsive-item" src="image/slider/video4.mp4" ></video> -->

            </div>
    
    
</div>
<!-- <div class="video-container">
    <video id="myVideo" autoplay>
        <source src="" type="video/mp4">
    </video>
</div> -->


<!-- <script>
document.addEventListener('DOMContentLoaded', function() {
    var video = document.getElementById('myVideo');
    video.removeAttribute('controls');

    video.addEventListener('ended', function() {
        video.currentTime = 0;
        video.play();
    });
});
</script> -->

<br>