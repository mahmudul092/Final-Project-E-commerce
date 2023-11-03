<!DOCTYPE html>

<?php

include("includes/db2.php");

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inserting Product</title>

</head>

<body bgcolor="skyblue">
<form method="post" action="insert_product.php" enctype="multipart/form-data">

<table width="795" align="center" border="2" bgcolor="orange"  border-collapse="collapse">

   <tr align="center">
   
   <td colspan="8"><h2><u><b>Insert New Product</b></u></h2></td>
   
   </tr>
   <tr>
   <td align="right"><b>Product Title: </b></td>
    <td><input type="text" name="product_title" /></td>
   </tr>
   
   <tr>
   <td align="right"><b>Product Categories: </b></td> 
    <td>
	<select name="product_cat">
	<option>Select a Category</option>
	<?php
	$get_cats = "select * from categories";
  
  
  $run_cats = mysqli_query($con, $get_cats);
  
  
  while ($row_cats=mysqli_fetch_array($run_cats)){
  
    $cat_id = $row_cats['cat_id'];
	$cat_title= $row_cats['cat_title'];
	
	echo "<option value='$cat_id'>$cat_title</option>";  
  
  }	
	
	?>
	
	</select>
	</td>
   </tr>
   
   
   <tr>
   <td align="right"><b>Product brand: </b></td>
   
    <td>
	<select name="product_brand" >
	<option>Select a Brand</option>
	
<?php

  $get_brands = "select * from brands";
  
  $run_brands = mysqli_query($con, $get_brands);
  
  while ($row_brands=mysqli_fetch_array($run_brands)){
  
    $brand_id = $row_brands['brand_id'];
	$brand_title= $row_brands['brand_title'];
	
	 echo "<option value='$brand_id'>$brand_title</option>"; 
  
  }
	
	?>
	
	</select>
	
	</td>
   </tr>
   
   <tr>
   <td align="right"><b>Product Image: </b></td>
    <td><input type="file" name="product_img" /></td>
	</tr>


   <tr>
   <td align="right"><b>Product Price: </b></td>
    <td><input type="text" name="product_price" /></td>
   </tr>
   
   <tr>
   <td align="right"><b>Product Description: </b></td>
    <td><textarea name="product_desc" cols="20" rows="10" ></textarea></td>
   </tr>
   
   <tr>
   <td align="right"><b>Product Keywords: </b></td>
    <td><input type="text" name="product_keywords" size="50" /></td>
   </tr>
   <tr align="center">
    <td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now"/></td>
   </tr>
   </tr>
   
   </tr>
   
</table>

</body>
</html>
<?php


    if(isset($_POST['insert_post'])){
  //text data variables
   $product_title= $_POST['product_title'];
   $product_cat= $_POST['product_cat'];
   $product_brand= $_POST['product_brand'];
   $product_price= $_POST['product_price'];
   $product_desc= $_POST['product_desc'];
   $product_keywords= $_POST['product_keywords'];
   
   //getting the image from the field
   
   $product_img = $_FILES['product_img']['name'];
   $product_img_tmp = $_FILES['product_img']['tmp_name'];
   
   
	move_uploaded_file($product_img_tmp,"product_img/$product_img");
   
  
 $insert_product = "insert into products (product_cat,product_brand,date,product_title,product_img,product_price,product_desc,product_keywords) values ('$product_cat','$product_brand',NOW(),'$product_title','$product_img','$product_price','$product_desc','$product_keywords')";
 
$insert_pro = mysqli_query($con, $insert_product);

 

 if($insert_pro){
 
 echo "<script>alert('Product inserted successfully !')</script>";
 echo "<script>window.open('index.php?insert_product','_self')</script>";
 

}
   

}



?>

