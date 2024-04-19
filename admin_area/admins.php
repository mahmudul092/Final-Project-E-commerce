<!DOCTYPE html>

<?php

include("includes/db2.php");


?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inserting New Admin</title>

</head>

<body bgcolor="skyblue">
<form method="post" action="" enctype="multipart/form-data">

<table width="795" align="center" border="2" bgcolor="orange"  border-collapse="collapse">

   <tr align="center">
   
   <td colspan="8"><h2><u><b>Insert New Admin</b></u></h2></td>
   
   </tr>

   
   <tr>
   <td align="right"><b>Admin Email: </b></td>
    <td><input type="text" name="user_email" /></td>
	</tr>


   <tr>
   <td align="right"><b>Admin Password: </b></td>
    <td><input type="text" name="user_pass" /></td>
   </tr>
   
    <tr align="center">
	 
   <td colspan="6"><input type="submit" name="insert_user" value="Create Account"/></td>
	 
	 </tr>
   
</table>

</body>
</html>
<?php


    if(isset($_POST['insert_user'])){
  //text data variables
   $user_email= $_POST['user_email'];
   $user_pass= $_POST['user_pass'];
  
   
  
 $insert_user = "insert into admins (user_email,user_pass) values ('$user_email','$user_pass')";
 
$insert_user = mysqli_query($con, $insert_user);

 

 if($insert_user){
 
 echo "<script>alert('Insert New Admin !')</script>";
 
 

}
   

}



?>

