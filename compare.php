<?php include('db/connect_db.php');
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
<br><br><br>
<main>
    <style>
    .selector-dropdown {
        font-size: 19px;
        line-height: 1.21053;
        font-weight: 600;
        letter-spacing: .012em;
        font-family: "SF Pro Display", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        width: 100%;
        margin: 0;
        padding: 17px 14px;
        color: #000;
        background: transparent;
        border: 1px solid #EEEEEE;
        border-radius: 0;
        overflow: hidden;
        /* -webkit-appearance: none;
                    -moz-appearance: none; */
        appearance: #66CCFF;
        cursor: pointer;
        border-radius: 5px;
    }

    .selector-dropdown:hover {
        border: 1px solid black !important;
    }

    select::-webkit-scrollbar {
        width: 15px;
        /* Độ rộng của thanh kéo */
    }

    select::-webkit-scrollbar-track {
        background-color: #EEEEEE;
        /* Màu nền của thanh kéo */
    }

    select::-webkit-scrollbar-thumb {
        background-color: #CCCCCC;
        /* Màu của thanh kéo */
    }

    .top-compare {
        text-decoration: none;
        font-size: 20px;
    }

    .top-compare:hover {
        text-decoration: underline;
        /* text-decoration: dashed; */
    }
    </style>
    <h1 class="col-12 col-xl-12 text-center mt-2">
        <!-- <img style="height:40px;margin-right:10px " src="image/slider/compare.png" alt="Việt Nam" class="img-responsive logoimg"> -->
        Compare wallet versions
    </h1>
    <div class="col-xl-12 text-center mt-2">
        <a href="?page_name=home" class="top-compare">Buy Wallet &gt;</a>
    </div>
    <div class="col-xl-12 text-center mt-4">
        <a href="?page_name=about_us" class="top-compare">Follow and learn about wallets &gt;</a>
    </div>
    <div class="container px-4 py-5">
    <form action="" id="form-compare" class="row">
    <div class="col-xl-4">
        <select id="selector-1" name="compare-1" class="selector-dropdown">
            <?php foreach($products as $product) { ?>
                <option value="<?php echo $product['id']; ?>" 
                <?php if(isset($_GET['compare-1']) && $_GET['compare-1'] == $product['id']) { echo "selected"; } ?>>
                <?php echo $product['title']; ?>
            </option>
            <?php } ?>
        </select> <span aria-hidden="true" class="selector-icon icon icon-chevrondown"></span>
    </div>
    <div class="col-xl-4">
        <select id="selector-2" name="compare-2" class="selector-dropdown">
            <?php foreach($products as $product) { ?>
                <option value="<?php echo $product['id']; ?>" 
                <?php if(isset($_GET['compare-2']) && $_GET['compare-2'] == $product['id']) { echo "selected"; } ?>>
                <?php echo $product['title']; ?>
            </option>
            <?php } ?>
        </select> <span aria-hidden="true" class="selector-icon icon icon-chevrondown "></span>
    </div>
    <div class="col-xl-4">
        <select id="selector-3" name="compare-3" class="selector-dropdown">
            <?php foreach($products as $product) { ?>
                <option value="<?php echo $product['id']; ?>" 
                <?php if(isset($_GET['compare-3']) && $_GET['compare-3'] == $product['id'] ) { echo "selected"; } ?>>
                <?php echo $product['title']; ?>
            </option>
            <?php } ?>
        </select> <span aria-hidden="true" class="selector-icon icon icon-chevrondown"></span>
    </div>
    <div class="col-12 mt-3 mb-3 text-center">
            <button style="background: black; color:white; width:100px;border-radius:10px">Compare</button>
        </div>
</form>

        <?php 
        $compares = [];
         if(isset($_GET['compare-1'])){
            $compares[] = $_GET['compare-1'];
        }
        if(isset($_GET['compare-2'])){
            $compares[] = $_GET['compare-2'];
        }
        if(isset($_GET['compare-3'])){
            $compares[] = $_GET['compare-3'];
        }
       
        ?>

        <div class="row mt-3">
            <?php  if(count($compares)>0){ 
                foreach($compares as $compare){
                    foreach($products as $product){ 
                        if($product['id'] == $compare){  
               
            ?>
            <div class="col-4 text-center">
                <img style="width:300px; height:250px; border-radius:20px"
                    src="image/product/<?php echo $product['thumbnail']?>" alt="">
                <br>
                <hr>
                <div class="col-12 tex-center">
                    <p><?php echo $product['discount']?>vnđ</p>
                    <button style="background:#0071e3; border-radius:30px;color:white; width: 70px;">
                        <a href="#" style="color:white" class="top-compare">Buy</a>
                    </button>
                </div>
                <div class="col-12 mt-3">
                    <a href="?page_name=product_detail&product_id=<?php echo $product['id'] ?>&num=1" class="top-compare">Find out more &gt;</a>
                </div>
            </div>
            <?php 
             } }}} ?>
        </div>

        <div class="col-12 mt-5">
            <h1>Title</h1>
        </div>
        <hr>
        <div class="row mt-5">
            <?php  if(count($compares)>0){ 
                foreach($compares as $compare){
                    foreach($products as $product){ 
                        if($product['id'] == $compare){  
               
            ?>
            <div class="col-4 text-center">
            <?php echo $product['title']?>
            </div>
                <?php }}}} ?>
        </div>

        <div class="col-12 mt-5">
            <h1>Description</h1>
        </div>
        <hr>
        <div class="row mt-5">
            <?php  if(count($compares)>0){ 
                foreach($compares as $compare){
                    foreach($products as $product){ 
                        if($product['id'] == $compare){  
               
            ?>
            <div class="col-4 text-center">
            <?php echo $product['description']?>
            </div>
                <?php }}}} ?>
        </div>
    </div>
        
        <script>
            document.querySelector('#form-compare').addEventListener('submit', function(event) {
                event.preventDefault();
                var select1 = document.getElementById('selector-1');
                var select2 = document.getElementById('selector-2');
                var select3 = document.getElementById('selector-3');
                
                var compareUrl = 'index.php?page_name=compare&compare-1=' + select1.value + '&compare-2=' + select2
                    .value + '&compare-3=' + select3.value;
                window.location.href = compareUrl;
            });
        </script>

        <script>
             var select1 = document.getElementById("selector-1");
             var select2 = document.getElementById("selector-2");
             var select3 = document.getElementById("selector-3");
             select1.addEventListener("change", sendData);
             select2.addEventListener("change", sendData);
             select3.addEventListener("change", sendData);

             function sendData() {
                 var selector1Value = select1.value;
                 var selector2Value = select2.value;
                 var selector3Value = select3.value;
                 var data = {
                     selector1: selector1Value,
                     selector2: selector2Value,
                     selector3: selector3Value
                 };
                 var xhttp = new XMLHttpRequest();
                 xhttp.onreadystatechange = function() {
                     if (this.readyState == 4 && this.status == 200) {
                         var response = this.responseText;
                         console.log(response);
                     }
                 };
                 xhttp.open("POST", "index.php", true);
                 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                 xhttp.send("data=" + JSON.stringify(data));

                //   -----------------------------------------------------------

            //           var url = 'index.php?page_name=compare';

            //           fetch(url, {
            //                   method: 'POST',
            //                   headers: {
            //                       'Content-Type': 'application/json'
            //                   },
            //                   body: JSON.stringify(data)
            //               })
            //               .then(response => response.json())
            //               .then(data => {
            //                 //    Xử lý dữ liệu nhận được từ tệp PHP
            //                   console.log(data);
            //               })
            //               .catch(error => {
            //                 //    Xử lý lỗi nếu có
            //                   console.error(error);
            //               });
             }   
        </script>
</main>