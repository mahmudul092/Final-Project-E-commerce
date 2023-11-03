<!DOCTYPE HTML>

<?php
include("includes/db.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>My Shop</title>
<link rel="stylesheet" href="styles/style2.css" media="all">
</head>

<body>
   <!--Main Container Starts-->
   <div class="main_wrapper"> 
   
   
   
   <!--Header stars-->
       <div class="header_weapper">
	       <a href="index.php"><img src="images/log.gif" style="float:left; "/></a>
		   <img src="images/bb.gif" style="float:right;"/>
	   </div>
	    <!--Header ends-->
		<!--start Navigation Bar-->
	   <div id="navbar">
	        
			<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="all_products.php">All product</a></li>
			<li><a href="customer/my_account.php">My Account</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="cart.php">Shopping Cart</a></li>
			<li><a href="#">Contact us</a></li>
			
		     </ul>
			 
			 <!--seach option-->
			 <div id="form">
			     <form method="get" action="results.php" enctype="multipart/form-data">
				 
				    <input type="text" name="user_query" placeholder="Search a Product"/>
					<input type="submit" name="search" value="Search"/>			
					
				 </form>
			 
			 </div>
	   
	   </div>
	   <!--end Navigation Bar-->
	   
	   <div class="content_wrapper">
	     
		  <div id="left_sidebar">
		  
		     <div id="sidebar_title">Categories</div>
			 
			 <ul id="cats">
			 
			 <?php getCats(); ?>
			  
			</ul>
			
			<div id="sidebar_title">Brands</div>
			 <ul id="cats">
			 
			  <?php getBrands(); ?>
			     
			   </ul>
				  
		  
		  </div>
		     
		  
	 <div id="right_content">
		 
	<div id="shopping_cart">
	
	<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
	
	Welcome Guest! <b style="color:yellow">Shopping Cart -</b> Total Iteams: Total Price: <a href="cart.php" style="color:yellow">Go to Cart</a>
	
	
	</span>
	
	
	</div>
	
	    <div id="products_box">
   <?php
   
   if(isset($_GET['search'])){
   
   $search_query = $_GET['user_query'];
		
$get_pro = "select * from products where product_keywords like '%$search_query%'";

$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['product_id'];
$pro_cat = $row_pro['product_cat'];
$pro_brand = $row_pro['product_brand'];
$pro_title = $row_pro['product_title'];
$pro_price = $row_pro['product_price'];
$pro_desc = $row_pro['product_desc'];
$pro_img = $row_pro['product_img'];

echo"

     <div id='single_product'>
	 
	    <h3>$pro_title</h3>
		
		<img src='admin_area/product_img/$pro_img' width='180' height='180'/>
		
		<p><b> Tk $pro_price </b></p>
		
		<a href='details.php?pro_id=$pro_id' style='float:left;'>Details </a> 
		
		<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
	 
	 
	 </div>

";


}

}
?>
		
		 
	 </div>
		  
		  
		  </div>
		  
		      
	 </div>
	   
	   
 
	 
	   
	   <div class="footer">
	   
	   <h1 style="color:#000;padding-top:20px;text-align:center;"> Thank You</h1>
	   
	   </div>
   
  
   
   </div>
  
  <!--Main Container End-->
  
  
 
  
     
</body>
</html>
