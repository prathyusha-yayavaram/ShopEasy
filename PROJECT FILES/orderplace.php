<?php
    $connection=mysqli_connect("localhost","root","");
    if(!$connection)
    {
        die('Could not connect!'.mysqli_error());
    }
    mysqli_select_db($connection,"snp");
    $pid=$_POST['pid'];
    $cid=mysqli_query($connection,"select id from active_user");
    $add=$_POST['address'];
    $pin=$_POST['pin'];
    $noi=$_POST['noi'];

    $sql = "SELECT * from active_user";
    $result = $connection->query($sql);

    $au = $result->fetch_assoc();
    $au = $au['id'];
    $pay = "COD";
    $date = "12-SEP-2016";
    $oid= 2;
    $size = "M";

   $x=0;
   $sc=250;
    	if($au=="")
    	{
            header('location:login.php');
    	}
    	else
    	{
    		$sql = "INSERT INTO orders(shipping_add,items_subtotal,ship_charge,payment_method,no_of_items) VALUES('$add','$x','$sc','$pay','$noi')";
    		 $result = $connection->query($sql);







    		 $sql = "INSERT INTO prod_ord_cust(prod_id,cust_id,size,quantity) VALUES($pid,$au,'$size',$noi)";
    		 $result = $connection->query($sql);



    		if(!$result)
    			echo "Failed";
    		//window.location.href = \"Project.php\";</script>";
    	}
    
    ?>