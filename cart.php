<?php
require_once('config.php');
    if(isset($_GET['addcart'])){
        $IDproduct=$_GET['IDproduct'];
        $nameproduct=$_GET['nameproduct'];
        $image = $_GET['image'];
        $gia = $_GET['gia'];
        $soluong =$_GET['soluong'];
        $size=$_GET['product_size'];
        $sqladd="INSERT into cart (IDproduct,nameproduct,image,gia,soluong,size) values ('$IDproduct','$nameproduct','$image','$gia','$soluong','$size')";
        $stmadd = $conn->prepare($sqladd);
        $stmadd -> execute();
        $stmadd -> closeCursor();
        header("location:cart_view.php");
    }
    else{
        header("location:product-details.php");
    }
?>