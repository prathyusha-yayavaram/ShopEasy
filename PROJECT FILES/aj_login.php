<?php


$connection = mysqli_connect("localhost","root","","snp");
if(!$connection){
  die('Could not connect: ' . mysql_error());
}


$sql = "select * from customer where name='$_POST[username]'";
 $result = $connection->query($sql);
   $p = $result->fetch_assoc(); 
   
   
if($p['name']==""){
	echo "Username not registered";
}
else if($p['password']==$_POST['password'] ){
	echo "T";
}
else{
	echo "Username or password wrong";
}
 
?>