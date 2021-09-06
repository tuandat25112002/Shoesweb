<?php
require_once('config.php'); 
if(isset($_GET["updatecart"])){

$idcart= $_GET['id'];
$soluong =$_GET['soluong'];
$size=$_GET['product_size'];
$cart=array();
for($i=0;$i<count($idcart);$i++){
    $infocart = array(); 
    $infocart[] = $idcart[$i];
    $infocart[] = $soluong[$i];
    $infocart[] = $size[$i];
    $cart[]=$infocart;
}
foreach($cart as $c){
// echo $c[0]."," .$c[1]."," .$c[2];
// echo "<br>";
 $sqlupdate="UPDATE cart set soluong='$c[1]',size='$c[2]' where idcart ='$c[0]'";
 $stmupdate=$conn->prepare($sqlupdate);
 $stmupdate->execute();
 $stmupdate->closeCursor();   

}
header("location:cart_view.php");
}
else if(isset($_GET['deletecart'])){
    $idcart=$_GET['check'];
    for($i=0;$i<count($idcart);$i++){
        $sqldelete="DELETE from cart where idcart='$idcart[$i]'";
        $stm=$conn->prepare($sqldelete);
        $stm->execute();
        $stm->closeCursor() ;   
    }
    header("location:cart_view.php");
}
else{
    header("location:cart_view.php");
}
?>