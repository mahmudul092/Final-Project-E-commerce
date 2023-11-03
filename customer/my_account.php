<!DOCTYPE HTML>

<?php
session_start();
include("includes/db.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>My Shop</title>
<link rel="stylesheet" href="styles/style.css" media="all">
</head>

<body>
   <!--Main Container Starts-->
   <div class="main_wrapper"> 
   
   
   
   <!--Header stars-->
       <div class="header_weapper">
	       <a href="../index.php"><img src="images/log.gif" style="float:left; "/></a>
		   <img src="images/bb.gif" style="float:right;"/>
	   </div>
	    <!--Header ends-->
		<!--start Navigation Bar-->
	   <div id="navbar">
	        
			<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="../all_products.php">All product</a></li>
			<li><a href="customer/my_account.php">My Account</a></li>
			<?php
			if(isset($_SESSION['customer_email'])){
				
			echo"<span style='display:none;'><<li><a href='../customer_register.php'>Sign Up</a></li></span>";
			}
			
			else {
				echo "<li><a href='../customer_register.php'>Sign Up</a></li>";
			}
			?>
			
			<li><a href="../cart.php">Shopping Cart</a></li>
			<li><a href="../contact.php">Contact us</a></li>
			
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
		  
		     <div id="sidebar_title">My Account</div>
			 
			 <ul id="cats">
			 <?php
			 $user= $_SESSION['customer_email'];
			 
			 $get_img = "select * from customer where customer_email='$user'";
			 
			 $run_img = mysqli_query($con, $get_img);
			 
			  $row_img = mysqli_fetch_array($run_img);
			  
			  $c_image = $row_img['customer_image']; 
			  
			  $c_name = $row_img['customer_name'];
			  
			  echo "<p style='text-align:center'><img src='customer_images/$c_image' width='150' height'150'/></p>";
			 
			 
			 ?>
			 
			<li><a href="my_account.php?my_orders">My orders</a></li>
			<li><a href="my_account.php?edit_account">Edit Account</a></li>
			<li><a href="my_account.php?change_pass">Change Password</a></li>
			<li><a href="my_account.php?delete_account">Delete Account</a></li>
			<li><a href="logout.php">Logout</a></li>
			
			  
			</ul>
			
		
		  
		  
		  </div>
		  
		  
		  
		  
	 <div id="right_content">
	 <!--cart connect-->
	 <?php cart(); ?>
		 
	<div id="shopping_cart">
	
	<span style="float:right; font-size:17px; padding:5px; line-height:40px;">
	
	<?php
	if(isset($_SESSION['customer_email'])){
		
	echo "<b>Welcome;</b>" . $_SESSION['customer_email'];
		
	}
	
	?>
	
	
	
	
	
	</span>
	
	    
	</div>
	

	    <div id="products_box">
		
	<?php

	global $con;
	if(!isset($_GET['my_orders'])){
		if(!isset($_GET['edit_account'])){
			if(!isset($_GET['change_pass'])){
				if(!isset($_GET['delete_account'])){
					
	$c= $_SESSION['customer_email'];
	
	$get_c = "select * from customer where customer_email='$c'";
	
	$run_c = mysqli_query($con,$get_c);
	
	$row_c = mysqli_fetch_array($run_c);
		$customer_id = $row_c['customer_id'];
	
	
	
					
				$get_orders = "select * from customer_orders where customer_id='$customer_id' AND order_status='pending'";
				
				$run_orders = mysqli_query($con, $get_orders);
				
				$count_orders = mysqli_num_rows($run_orders);
	             
				 if($count_orders>0){
					 
					 echo"
					 <div style='padding:10px;'>
					 <h1 style='color:red;'>Important!</h1>
					 <h2>You have ($count_orders)Pending orders</h2>
					 <h3>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a><br> Or you can<a href='payment.php'>Pay Offline</a></h3>
					
					 </div>
					 ";
				 }
				 else{
					 echo"
					 <div style='padding:10px;'>
					 <h1 style='color:red;'>Important!</h1>
					 <h2>You have no Pending orders</h2>
					 <h3>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></h3>
					
					 </div>
					 ";
				 }
  }
}
}
}
	?>
		
		
		<?php
		if(isset($_GET['edit_account'])){
			
		include("edit_account.php");	
			
			
			
		}
		if(isset($_GET['change_pass'])){
			
		include("change_pass.php");	
				
		}
		
		if(isset($_GET['delete_account'])){
			
		include("delete_account.php");	
				
		}
		if(isset($_GET['order'])){
			
		include("order.php");	
				
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
