<?php


	$connection = mysqli_connect("localhost","root","","snp");
if(!$connection){
  die('Could not connect: ' . mysql_error());
}

$id = $_POST['name'];



$sql1 = "delete from prod_ord_cust where prod_id = $id";

$result1 = $connection->query($sql1);


if(!$result1){
	echo "Database error has occured \n please try again later";
}
else
	echo "product successfully cancelled";


?>