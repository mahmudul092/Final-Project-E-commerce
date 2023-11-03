<!--payment system-->
<!DOCTYPE html>
<html>
<head>
<title>Payment Options</title>
</head>
<body>
<?php

include("includes/db2.php");




?>

<div>

<h2 align="center">Payment Option for you!</h2>
<?php

$ip = getIp();

$get_customer = "select * from customer where customer_ip='$ip'";

$run_customer= mysqli_query($con, $get_customer);

$customer = mysqli_fetch_array($run_customer);

$customer_id = $customer['customer_id'];




?>

<p style="text-align:center;"><img src="pay1.jpg" width="200" height="150"/><b>Or <a href="order.php?c_id=<?php echo $customer_id;  ?>">Pay ofline</a></p>


</div>

<body>
</html>