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
		<section class="location">


					<div class="col-md-6">	
						<div style="font-weight:bold; text-decoration:underline"> Information Office (Rajshahi) </div>		
						<div>
							<img src="images/Talaimari_Building.jpg" alt="Talaimari Academic Building" style="border:1px solid #d8d8d8; padding:4px">
						</div>
						<div>
							<br/>
							532, Jahangir Sarani, Talaimari, Rajshahi-6204 <br/>
							Telephone: 0721-751459 <br/>
							Mobile: 01770-825065 <br/>
							E-mail: devicestore@bd.com <br/>
							Facebook Page: <a href="https://www.facebook.com/mahmudulazadsajol.7545">Our Website facebook page.com/mas.admin</a>
						</div>
					</div>
			

				

							

			<div class="col-md-4">
				<div class="titleborder">
					<div style="font-size:30px; text-align:center"><u> Query </u></div>
	            </div>

        						        
			        <script>
			            setTimeout(function() {
			                $('#msg').fadeOut('slow');
			            }, 2500); 
			        </script>
			        
			        


				<div class="contact-col">
  <form action="formhandeler.php" method="POST">
  <input type="text" name="name" placeholder="Enter your Name" required><br>
  <input type="email" name="email" placeholder="Enter Email address" required><br>
  <div>
  
  <select name="subject" placeholder="Enter your subject" required>
<option Value="1st">Enter Your District</option>
<option Value="cse">Dhaka</option>
<option Value="eee">Rajshahi</option>
<option Value="bba">Sylet</option>
<option Value="english">Rangpur</option>
<option Value="law">Chattogram</option>


</select>
  </div>
  <textarea rows="8" name="message" placeholder="Message" required></textarea><br>
	<button type="submit" class="hero-btn red-btn">Send Message</button>
  
  
  </form>
  </div>
			</div>
			</section>
		 <h4 style="font-size:30px; text-align:center">About Me</h4><br>
         </section>
		    
<section class="contact-us">
  <div class="row">
  <div class="contact-col">
  <p> Develop by: <font color="red" size="5"> &copy; Mahmudul Azad Sajol </font>  </p> 
  <div>
  <i class="material-icons">home</i>
  <span>
  <h5>Chadpur Kakramari,Charghat</h5>
  <p> Bangladesh, Rajshahi, IN</p>
  </span>
  
  </div>
  <div>
  <i class="material-icons">phone</i>
  <span>
  <h5>+8801770825065</h5>
  <p>Sunday to Trusday, 09 AM to 10PM</p>
  </span>
  
  </div>
  <div>
<i class="material-icons">email</i>
  <span>
  <h5>mahamudulazad1@gmail.com</h5>
  <p>Sunday to Trusday, 09 AM to 6PM</p>
  </span>
  
  </div>
  </div>

  
  </div>
  </section> 	 
     </section>
    
		  
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
