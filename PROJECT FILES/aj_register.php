<?php


$connection = mysqli_connect("localhost","root","","snp");
if(!$connection){
  die('Could not connect: ' . mysql_error());
}


  $sql = "select name from customer where email = '$_POST[Email]'";
   $result = $connection->query($sql);
   $p = $result->fetch_assoc();
  if($p['name']==""){

  $sql = "select * from cust_id_ref";
  $result = $connection->query($sql);
  $p = $result->fetch_assoc(); 
  $pid = $p["prev_id"];   //prev assigned cust id

  $pid++;   


  $sql = "INSERT INTO customer(cust_id,name,email,gender,password,ph_no) VALUES ($pid,'$_POST[username]','$_POST[Email]','$_POST[gen]','$_POST[password]','$_POST[mobileno]')";

  $result1= mysqli_query($connection,$sql);

  $sql2 = "INSERT INTO cust_address(cust_id,address) VALUES($pid,'$_POST[address]')";
  $result2= mysqli_query($connection,$sql2);

 
  $temp = $pid - 1;

  $sql = "UPDATE cust_id_ref SET prev_id=$pid where prev_id=$temp";
  $result = $connection->query($sql);



  $sql = "select * from active_user";   //getting previously active user


  $result = $connection->query($sql);
  $previous = $result->fetch_assoc();



  $sql = "UPDATE active_user SET id=$pid where id='$previous[id]'";
   $result = $connection->query($sql);


  echo "T";
}
else{
 
  echo "This email has already registered by  ".$p['name'];
}


?>