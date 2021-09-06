<?php
require_once('config.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<style>
      /* stylelint-disable selector-list-comma-newline-after */
@import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Barlow&family=Big+Shoulders+Display:wght@300&display=swap');
 

 *{
   font-family: 'Barlow', sans-serif;
 }
 #wrapper {
  text-align: center;
  margin: auto;
}

#style-1::-webkit-scrollbar,
#style-2::-webkit-scrollbar {
  width: 12px;
  background-color: #F5F5F5;
}


#style-11::-webkit-scrollbar {
  width: 5px;
  background-color: #F5F5F5;
}



/**  STYLE 11 */
#style-11::-webkit-scrollbar-track {
  border-radius: 10px;
  background: rgba(0,0,0,0.1);
  border: 1px solid #ccc;
}

#style-11::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background: linear-gradient(left, #fff, #e4e4e4);
  border: 1px solid #aaa;
}

#style-11::-webkit-scrollbar-thumb:hover {
  background: #fff;
}

#style-11::-webkit-scrollbar-thumb:active {
  background: linear-gradient(left, #22ADD4, #1E98BA);
}
</style>
<body>

     <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="welcome_text">
                           <ul>
                               <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                               <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                           </ul>
                        </div>
                        
                        <div class="top_right">
                            <ul>
                               <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="wishlist.html">My Wish List </a></li>
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="compare.html">Compare Products  </a></li>
                                    </ul>
                                </li> 
                                <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt=""> English <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#"><img src="assets/img/logo/cigar.jpg" alt=""> French</a></li>
                                        <li><a href="#"><img src="assets/img/logo/language2.png" alt="">German</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">BRL</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> 
                        <div class="search_bar">
                            <form action="#">
                                <select class="select_option" name="select" id="categori">
                                    <option selected value="1">All Categories</option>
                                    <option  value="2">Accessories</option>
                                    <option  value="3">Bridge</option>
                                    <option  value="4">Hub</option>
                                    <option  value="5">Repeater</option>
                                    <option  value="6">Switch</option>
                                    <option  value="7">Video Games</option>
                                    <option  value="8">PlayStation 3</option>
                                    <option  value="9">PlayStation 4</option>
                                    <option  value="10">Xbox 360</option>
                                    <option  value="11">Xbox One</option>
                                </select>
                                <input placeholder="Search entire store here..." type="text">
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <div class="cart_area">
                            <div class="middel_links">
                               <ul>
                                   <li><a href="login.html">Login</a></li>
                                   <li>/</li>
                                   <li><a href="login.html">Register</a></li>
                               </ul>

                            </div>
                            <?php 
                    //    get info of product in cart
                       $sqlcart="SELECT * FROM cart";
                       $stmcart=$conn->prepare($sqlcart);
                       $stmcart->execute();
                       $infocart=$stmcart->fetchAll();
                       $count= $stmcart->rowCount();
                       $stmcart->closeCursor();
                       $totalcost=0;
                       if($count>0){
                       $shipcost=5;
                        }
                        else{
                            $shipcost=0;
                        }
                       ?> 

                            <div class="cart_link">
                                <a href="#"><i class="fa fa-shopping-basket"></i><?php echo $count?> item(s)</a>
                                <!--mini cart-->
                                <div class="mini_cart" >
                                   
                                   <?php foreach($infocart as $cart){
                                        $totalcost = $totalcost+ $cart['gia'] ;
                                       ?>
                                     
                                      <div class="cart_item bottom">
                                         <div class="cart_img">
                                             <a href="product-details.php.?IDproduct=<?php echo $cart['IDproduct']?>&nameproduct=<?php echo $cart['nameproduct']?>"><img src="<?php echo $cart['image']?>" alt=""></a>
                                         </div>
                                          <div class="cart_info">
                                              <a href="product-details.php.?IDproduct=<?php echo $cart['IDproduct']?>&nameproduct=<?php echo $cart['nameproduct']?>"><?php echo $cart['nameproduct']?></a>
                                                  <b><span>$ <?php echo $cart['gia']?> </span></b>
                                          </div>
                                          <div class="cart_remove">
                                              <a href="#"><i class="ion-android-close"></i></a>
                                          </div>
                                      </div>
                                      <?php }  ?>
                                      <div class="cart__table">
                                          <table>
                                              <tbody>
                                                  <tr>
                                                      <td class="text-left">Sub-Total :</td>
                                                      <td class="text-right">$<?php echo $totalcost?></td>
                                                  </tr>
                                               
                                                  <tr>
                                                      <td class="text-left">Total :</td>
                                                      <td class="text-right">$ <?php echo $totalcost+$shipcost?></td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                      
                                      <div class="cart_button view_cart">
                                          <a href="cart_view.php">View Cart</a>
                                      </div>
                                      <div class="cart_button checkout">
                                          <a href="checkout.html">Checkout</a>
                                      </div>
                                  </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                        <div class="contact_phone">
                            <p>Call Free Support: <a href="tel:+(012)800456789">(+012) 800 456 789 </a></p>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="index.php">Home</a>
                                   
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio.html">portfolio</a></li>
                                                <li><a href="portfolio-details.html">portfolio details</a></li>
                                                <li><a href="cart.php">cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-sidebar.html">blog  Sidebar</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="privacy-policy.html">privacy policy</a></li>
                                        <li><a href="coming-soon.html">coming soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a> 
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->
    
    <!--header area start-->
    <header class="header_area header_three">
        <!--header top start-->
        <div class="header_top">
            <div class="container-fluid">   
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="welcome_text">
                           <ul>
                               <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                               <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                           </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="top_right text-right">
                            <ul>
                               <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="wishlist.html">My Wish List </a></li>
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="compare.html">Compare Products  </a></li>
                                    </ul>
                                </li> 
                            </ul>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middel">
            <div class="container-fluid">
                <div class="middel_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="search_bar">
                                <form action="#">                          
                                    <input placeholder="Search entire store here..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>

               

                        <div class="col-lg-4">
                            <div class="cart_area">
                                <div class="cart_link">
                                    <a href="#"><i class="fa fa-shopping-basket"></i><?php echo $count?> item(s)</a>
                                    <!--mini cart-->
                                    <div class="mini_cart" >
                                         <div style="max-height: 200px;overflow: auto;padding:0px 10px" id="style-11">
                                     <?php foreach($infocart as $cart){?>
                                    <div class="cart_item bottom">
                                       <div class="cart_img">
                                           <a href="product-details.php.?IDproduct=<?php echo $cart['IDproduct']?>&nameproduct=<?php echo $cart['nameproduct']?>"><img src="<?php echo $cart['image']?>" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="product-details.php.?IDproduct=<?php echo $cart['IDproduct']?>&nameproduct=<?php echo $cart['nameproduct']?>"><?php echo $cart['nameproduct']?></a>
                                                <b><span>$ <?php echo $cart['gia']?> </span></b>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <?php }  ?></div>
                                    <div class="cart__table">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">Sub-Total :</td>
                                                    <td class="text-right">$<?php echo $totalcost?></td>
                                                </tr>
                                             
                                                <tr>
                                                    <td class="text-left">Total :</td>
                                                    <td class="text-right">$ <?php echo $totalcost+$shipcost?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="cart_button view_cart">
                                        <a href="cart_view.php">View Cart</a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a href="checkout.html">Checkout</a>
                                    </div>
                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="horizontal_menu">
                    <div class="left_menu">
                        <div class="main_menu"> 
                            <nav>  
                                <ul>
                                    <li class="active"><a href="index.php">Home <i class="fa fa-angle-down"></i></a>
                                        
                                    </li>
                                    <li class="mega_items"><a href="shop.html">shop <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega_menu">
                                            <li><a href="#">Shop Layouts</a>
                                                <ul>
                                                    <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                    <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                    <li><a href="shop-list.html">List View</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">other Pages</a>
                                                <ul>
                                                    <li><a href="portfolio.html">portfolio</a></li>
                                                    <li><a href="portfolio-details.html">portfolio details</a></li>
                                                    <li><a href="cart.php">cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="my-account.html">my account</a></li>


                                                </ul>
                                            </li>
                                            <li><a href="#">Product Types</a>
                                                <ul>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="product-sidebar.html">product sidebar</a></li>
                                                    <li><a href="product-gallery.html">product gallery</a></li>
                                                    <li><a href="product-grouped.html">product grouped</a></li>
                                                    <li><a href="variable-product.html">product variable</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#">collection</a>
                                                <ul>
                                                    <li><a href="shop.html">Handbag</a></li>
                                                    <li><a href="shop.html">Accessories</a></li>
                                                    <li><a href="shop.html">Clothing</a></li>
                                                    <li><a href="shop.html">Shoes</a></li>
                                                    <li><a href="shop.html">Check Trousers</a></li>

                                                </ul>
                                            </li>
                                            <li class="banner_menu"><a href="#"><img src="assets/img/bg/banner1.jpg" alt=""></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">blog <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="blog-sidebar.html">blog  Sidebar</a></li>
                                            <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="services.html">services</a></li>
                                            <li><a href="faq.html">Frequently Questions</a></li>
                                            <li><a href="login.html">login</a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                            <li><a href="compare.html">compare</a></li>
                                            <li><a href="privacy-policy.html">privacy policy</a></li>
                                            <li><a href="coming-soon.html">coming soon</a></li>
                                        </ul>
                                    </li>
                                </ul> 
                            </nav> 
                        </div>
                    </div>
                    <div class="logo_container">
                        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="right_menu">
                        <div class="main_menu"> 
                            <nav>  
                                <ul>
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="#">Sneaker</a></li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul> 
                            </nav> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

        <!--header bottom satrt-->
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu_inner">
                            <div class="main_menu"> 
                                <nav>  
                                    <ul>
                                        <li class="active"><a href="index.php">Home </a></li>
                                        <li><a href="shop_category.html">shop </a></li>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="services.html">services</a></li>
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                                <li><a href="compare.html">compare</a></li>
                                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                                <li><a href="coming-soon.html">coming soon</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">blog</a></li>
                                        
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>   
                                </nav> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </header>
    <!--header area end-->
 
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>/</li>
                            <li>cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!-- shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">  
            <form action="xuly.php" method="get"> 
                <div class="row">
                    <div class="col-12">
                        <div style="border: none;">
                            <div class="table-responsive" >
                                <table style="width: 100%;overflow: hidden;">
                                    <thead>
                                        <tr style="height: 50px;font-size: 15px;">
                                            <th><input type="checkbox" id="selecctall"/></th>
                                            <th colspan="2" >Product</th>
                                            
                                            
                                            <th >Price</th>
                                            <th >Size</th>
                                            <th >Quantity</th>
                                            <th >Total</th>
                                            <th >Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="height: 50px;">
                                        <td colspan="8">
                                             <?php 
                                             if($count>0){
                                                 echo "";       
                                             }
                                             else{
                                                 echo"There are no products in the cart!";
                                             }
                                             ?>   
                                        </tr>
                                        </td>
                                        <?php foreach($infocart as $cart){ ?>
                                        <tr  style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;">
                                            <td style="border-right: none;min-width: 50px"><input class="checkbox1" type="checkbox" name="check[]" value="<?php echo $cart['idcart']?>"></td>
                                            <input type="hidden" name="id[]" value="<?php echo $cart['idcart']?>">
                                            <td style="border-right: none;"><a href="product-details.php.?IDproduct=<?php echo $cart['IDproduct']?>&nameproduct=<?php echo $cart['nameproduct']?>"><img width="150px" src="<?php echo $cart['image']?>" alt=""></a></td>
                                            <td style="border-right: none;"><a href="product-details.php.?IDproduct=<?php echo $cart['IDproduct']?>&nameproduct=<?php echo $cart['nameproduct']?>"><?php echo $cart['nameproduct']?></a></td>
                                            <td style="border-right: none;" >$ <?php echo $cart['gia']?></td>
                                            <td style="border-right: none;" >
                                            <select class=""  name="product_size[]" style="border: none;padding: 10px;">
                                                        <option selected value="<?php echo $cart['size']?>"><?php echo $cart['size']?></option>
                                                    
                                                        <?php
                                                        $minsize=36;
                                                        $maxsize= 45;
                                                        for($i=$minsize;$i<=$maxsize;$i++){
                                                            if($i!=$cart['size']){
                                                            echo '<option value="'.$i.'">'.$i.'</option>';              
                                                        }
                                                        }
                                                        ?>        
                                                                        
                                                    </select> 
                                            
                                            </td>
                                            <td style="border-right: none;" ><input id="name<?php echo $cart['IDproduct']?>" style="border: none;" min="1" max="100" value="<?php echo $cart['soluong']?>" name="soluong[]" type="number"></td>
                                            <td style="border-right: none;" >$ <span id="log<?php echo $cart['IDproduct']?>"><?php echo $cart['gia']*$cart['soluong']?></span></td>
                                            <td style="border-right: none;min-width: 80px" ><a href="delete_cart.php.?idcart=<?php echo $cart['idcart']?>" class="text-danger"><i class="fa fa-trash-o"></i></a></td>
                                            <script type="text/javascript">
                                                        const input<?php echo $cart['IDproduct']?> = document.getElementById('name<?php echo $cart['IDproduct']?>');
                                                    const log<?php echo $cart['IDproduct']?> = document.getElementById('log<?php echo $cart['IDproduct']?>');

                                                    input<?php echo $cart['IDproduct']?>.addEventListener('change', updateValue);

                                                    function updateValue(e) {
                                                    log<?php echo $cart['IDproduct']?>.textContent = e.target.value*<?php echo $cart['gia']?>;
                                                    }
                                                    </script>
                                        </tr>
                                   <?php }?>
                                    </tbody>
                                </table>   
                            </div>  
                            <div class="cart_submit">
                            <button name="deletecart" type="submit">Delete Cart</button>
                                <button name="updatecart" type="submit">update Cart</button>
                            </div>      
                        </div>
                    </div>
                </div>
                
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">   
                                    <p>Enter your coupon code if you have one.</p>                                
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Subtotal</p>
                                       <p class="cart_amount">$ <?php echo $totalcost?></p>
                                   </div>
                                   <div class="cart_subtotal ">
                                       <p>Shipping</p>
                                       <p class="cart_amount"><span>Flat Rate:</span> $ <?php echo $shipcost?></p>
                                   </div>
                                   <a href="#">Calculate shipping</a>

                                   <div class="cart_subtotal">
                                       <p>Total</p>
                                       <p class="cart_amount">$ <?php echo $totalcost+$shipcost?></p>
                                   </div>
                                   <div class="checkout_btn">
                                       <a href="#">Proceed to Checkout</a>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
                
            </form> 
        </div>     
    </div>
    <!-- shopping cart area end -->
    
    <!--footer area start-->
    <footer class="footer_widgets other_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="footer_top_inner">   
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                            <div class="widgets_container">
                                <h3>Information</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                            <div class="widgets_container">
                                <h3>Extras</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Gift Certificates</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="contact.html">Site Map</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widgets_container contact_us">
                                <h3>Contact Us</h3>
                                <div class="footer_contact">
                                    <p>Address: 6688 Princess Road, London, Greater London BAS 23JK, UK</p>
                                    <p>Phone: <a href="tel:+(+012)800456789-987">(+012) 800 456 789 - 987</a> </p>
                                    <p>Email: demo@example.com</p>
                                    <ul>
                                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" title="youtube"><i class="fa fa-youtube"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widgets_container newsletter">
                                <h3>Join Our Newsletter Now</h3>
                                <div class="newleter-content">
                                    <p>Exceptional quality. Ethical factories. Sign up to enjoy free U.S. shipping and returns on your first order.</p>
                                    <div class="subscribe_form">
                                        <form id="mc-form" class="mc-form footer-newsletter" >
                                            <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address here..." />
                                            <button id="mc-submit">Subscribe !</button>
                                        </form>
                                        <!-- mailchimp-alerts Start -->
                                        <div class="mailchimp-alerts text-centre">
                                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                        </div><!-- mailchimp-alerts end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
               <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p> &copy; 2021 <strong> </strong> Mede with ❤️ by <a href="https://hasthemes.com/" target="_blank"><strong>HasThemes</strong></a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_custom_links">
                            <ul>
                                <li><a href="#">Order History</a></li>
                                <li><a href="wishlist.html">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

<!-- JS
============================================ -->


<!--map js code here-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
<script  src="https://www.google.com/jsapi"></script>
<script src="assets/js/map.js"></script>


<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>


<script>
    $(document).ready(function() {

$('#selecctall').click(function(event) {  //on click
    if(this.checked) { // check select status
        $('.checkbox1').each(function() { //loop through each checkbox
            this.checked = true;  //select all checkboxes with class "checkbox1"            
        });

    }else{
        $('.checkbox1').each(function() { //loop through each checkbox
            this.checked = false; //deselect all checkboxes with class "checkbox1"                    
        });      
    }
});

});
</script>
</body>

</html>