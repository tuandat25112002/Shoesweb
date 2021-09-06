<?php
require_once('config.php');
if(isset($_GET['idcart'])){
    // echo $_GET['IDproduct'];
    $idcart=$_GET['idcart'];
    $sqldelete="DELETE from cart where idcart='$idcart'";
    $stmdelete=$conn->prepare($sqldelete);
    $stmdelete->execute();
    $stmdelete->closeCursor();
    header("location:cart_view.php");
}

?>