<?php
require '../vendor/autoload.php'; 
include('../db/connect_db.php') ;
use PhpOffice\PhpWord\PhpWord;
if(isset($_GET['product_id'])){

$productId = $_GET['product_id'];

$query_product = "SELECT*FROM product where id = '$productId'";
$result = $conn->query($query_product);
$product;
if($result->num_rows >0) {
    $product=$result->fetch_assoc();
  }
$conn->close();

$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();
$productImage = "../image/product/{$product['thumbnail']}";
$section->addText('Hình ảnh sản phẩm:');
$section->addImage($productImage, array('width' => 300, 'height' => 200));
$productTitle = "{$product['title']}";
$productDescription = "{$product['description']}";
$section->addText('Thông tin sản phẩm:');
$section->addText('Tên: ' . $productTitle);
$section->addText('Mô tả: ' . $productDescription);
$filename = $product['title'].'.docx';
$phpWord->save($filename);
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment; filename="' . $filename . '"');
readfile($filename);

unlink($filename);

}
echo "dowload thanh cong";

?>