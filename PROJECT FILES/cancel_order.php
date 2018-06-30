<?php


	$connection = mysqli_connect("localhost","root","","snp");
if(!$connection){
  die('Could not connect: ' . mysql_error());
}

$id = $_POST['name'];

$sql1 = "delete from orders where ord_id = $id";

$sql2 = "delete from prod_ord_cust where ord_id = $id";

$result1 = $connection->query($sql1);

$result2 = $connection->query($sql2);

if(!$result1 || !$result2){
	echo "Database error has occured \n please try again later";
}
else
	echo "order successfully cancelled";


?>