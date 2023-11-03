<!DOCTYPE HTML>

<?php
session_start();
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
			<li><a href="customer_register.php">Sign Up</a></li>
			<li><a href="cart.php">Shopping Cart</a></li>
			<li><a href="contact.php">Contact us</a></li>
			
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
	 <!--cart connect-->
	 <?php cart(); ?>
		 
	<div id="shopping_cart">
	
	<span style="float:right; font-size:17px; padding:5px; line-height:40px;">
	
	<?php
	if(isset($_SESSION['customer_email'])){
		
	echo "<b>Welcome;</b>" . $_SESSION['customer_email'] . "<b style='color:yellow'>Your </b>";	
		
	}
	else{
		echo "<b>Welcome Guest:</b>";
		
	}
	
	?>
	
	
	<b style="color:yellow">Shopping Cart -</b> Total Iteams: <?php total_items();?>
	Total Price: <?php total_price(); ?> <a href="cart.php" style="color:yellow">Go to Cart</a>
	
	<?php
	if(!isset($_SESSION['customer_email'])){
		
	echo "<a href='checkout.php' style='color:orange;'>Login</a>";	
		
	}
	else{
		
	echo "<a href='logout.php' style='color:orange;'>Logout</a>";	
		
	}
	
	
	?>
	
	</span>
	
	
	</div>
	  

	    <div id="products_box">
		
		   
		  <?php getPro(); ?>
		  <?php getCatPro(); ?>
		  <?php getBrandPro(); ?>
		 
		  
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
