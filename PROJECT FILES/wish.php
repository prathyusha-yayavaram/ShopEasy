<html>
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="images.css">
    <link rel="stylesheet" type="text/css" href="positions.css">
    <link rel="stylesheet" type="text/css" href="pecchi.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<script type="text/javascript">
           
        }
			ck_name = /^[A-Za-z]+$/;
			ck_email = /^[A-Za-z]+([\.?\w+)*@\w+([\.-] ?\w+)*(\.\w{2,3})+$/; 
			ck_ph = /^\d{10}$/;
			function namevalidate(){
				document.getElementById("fn").style.background = "pink";
			if(!ck_name.test(document.getElementById("fn").value)){
				window.alert("Invalid First Name");
				document.getElementById("fn").value ="";
				document.getElementById("fn").focus();
				
			}
		}
			function phonevalidate(){
			if(!ck_ph.test(document.getElementById("ph").value)){
				window.alert("Invalid Phone Number");
				document.getElementById("ph").value ="";
				document.getElementById("ph").focus();
				document.getElementById("fn").style.background = "pink";
			}
		}
			function emailvalidate(){
			if(!ck_email.test(document.getElementById("em").value)){
				window.alert("Invalid Email");
				document.getElementById("em").value ="";
				document.getElementById("em").focus();
				document.getElementById("fn").style.background = "pink";
			}
		}

function openNav() {
	document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
	document.getElementById("myNav").style.width = "0%";
}


		
	</script>
  
</head>
<body class="pattern">
<form action="project.php" method="post">

	
	
	<div style="z-index:10;background:black;position:fixed;width:101.1%;margin:-8px;">

	

	<div style="text-align:center;color:black;float:right;display:inline;margin-top:5px;">
		<a href="register.php" style="margin:10px;font-size:25px;color:white">Register</a>&nbsp&nbsp

		<a href="login.php" style="margin:10px;font-size:25px;color:white">Login&nbsp&nbsp</a>
<?php 
$connection = mysqli_connect("localhost","root","","snp");
if(!$connection){
  die('Could not connect: ' . mysql_error());
}
			$sql = "SELECT id from active_user";
			$resultx = $connection->query($sql);
			$au = $resultx->fetch_assoc();
			$au = $au['id'];
    if(is_null($au))
    {
    	echo "<a href=\"login.php\" style=\"margin:10px;\"><img src=\"cart.png\" height=\"30\" width=\"30\"></a>
		<a href=\"register.php\" style=\"margin:10px\"><img src=\"wishlist.png\" height=\"30\" width=\"30\"></a>";
	}
	else
	{
		echo "<a href=\"cart.php\" style=\"margin:10px;\"><img src=\"cart.png\" height=\"30\" width=\"30\"></a>
		<a href=\"wish.php\" style=\"margin:10px\"><img src=\"wishlist.png\" height=\"30\" width=\"30\"></a>";
	}	
?>
		&nbsp&nbsp
		 
	</div>
   <br><br>
		
		<div>
		 <h1 class="h" style="display:inline;margin:60px;">SHOPEASY</h1>
		
		<input type="search" name="search" placeholder="Search.....">
	  
	  

	</div>
	</div>
	<br><br>






<div style="background:black;margin-top:40px;width:101.1%;margin-left:-8px;font-size:20px;">
<br>
 <ul class="x1">
 <li class="x1" style="display:inline"><a class="active" href="Project.php">Home</a></li>
 <li class="dropdown"><a href="about.html">About</a>
 </li>
 <li class="dropdown"><a href="#" >Products</a>
 <div class="dd-content">
 <a onclick="omg('all')" href="javascript:void(0)">All</a>
 <a onclick="omg('men')" href="javascript:void(0)">Men</a>
 <a onclick="omg('women')" href="javascript:void(0)">Women</a>
 <a onclick="omg('girls')" href="javascript:void(0)">Girls</a>
 <a onclick="omg('boys')" href="javascript:void(0)">Boys</a>
 <a onclick="omg('kids')" href="javascript:void(0)">Kids</a>
 </div>
 </li>
 <li class="dropdown"><a href="contact.html" >Contact</a>
 </li>
 </ul></div>






<?php

	$connection = mysqli_connect("localhost","root","","snp");
	if(!$connection){
	die('Could not connect: ' . mysql_error());
	}

	$sql = "SELECT id from active_user";
			$resultx = $connection->query($sql);
			$au = $resultx->fetch_assoc();
			$au = $au['id'];
if(!is_null($au)){
	$sql = "select name from customer where cust_id=$au";


	$result = $connection->query($sql);

	$name = $result->fetch_assoc();  

	



	$sql = "select ph_no from customer where cust_id=$au";


	$result = $connection->query($sql);

	$ph_no = $result->fetch_assoc();  

	


	$sql = "select email from customer where cust_id=$au";


	$result = $connection->query($sql);

	$email = $result->fetch_assoc();  

	



	$sql = "select password from customer where cust_id=$au";


	$result = $connection->query($sql);

	$password = $result->fetch_assoc();  

}	
?>











<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>                

 <br>
 <center><img src="account.png" style="margin-top:10px"></center><br>
   <section class="container" style="margin-top:-10px">
   <span class="acc">
	<br><br>
	<a href="" style="color:#818181;font-size:36px;margin-left:5vh"> Orders </a><br>
	<hr>
	<a href="orders.php" class="acc" style="margin-left:5vh">My orders</a><br><br><br>
	<a href="#" class="acc" style="margin-left:5vh">Wish list</a><br><br><br>
	<a href="#" class="acc" style="margin-left:5vh">Cart</a>

   </span>

   <div class="login" id="size" style="background-image:url('bgpattern3.png');height:75vh;width:60vh;font-size:20px">
	 <center> <img src="Generic_Male_Profile.jpg" width="400vh" height="270vh" style="margin-top:0vh;margin-left:-1vh">
	  <br><br>
	  First Name <input type="text" name="fn" id="fn" onblur="namevalidate();" value="<?php echo implode("",$name);?>" style="margin-left:57px"><br>
	  Phone number <input type="text" name="ph" id="ph" onblur="phonevalidate();" value="<?php echo implode("",$ph_no);?>" style="margin-left:25px"><br>
	  Email Id <input type="text" name="em" id="em" onblur="emailvalidate();" value="<?php echo implode("",$email);?>" style="margin-left:88px">
	  <br>Password <input type="text" name="ps" id="ps" value="<?php echo implode("",$password);?>" style="margin-left:75px">

	  <br><br>

	  <input type="submit" name="submit" value="Save Changes" style="float:none">
</center>
	  <?php
	   $connection = mysqli_connect("localhost","root","","snp");
		if(!$connection){
		die('Could not connect: ' . mysql_error());
		}

		if(isset($_POST['fn'])){

		  $sql = "update customer set name ='$_POST[fn]' where cust_id=$au";
		  mysqli_query($connection,$sql);

		  $sql = "update customer set ph_no = '$_POST[ph]' where cust_id = $au ";
		  mysqli_query($connection,$sql);

		  $sql = "update customer set email = '$_POST[em]' where cust_id = $au ";
		  mysqli_query($connection,$sql);

		  $sql = "update customer set password = '$_POST[ps]' where cust_id = $au ";
		  mysqli_query($connection,$sql);
		}

		?>

	  



   </div>
   </section>
</div>








<?php 
if(is_null($au))
    {
    	echo "";
    }
else{
	echo "
<span style=\"font-size:30px;cursor:pointer;color:white;float:right;margin-top:-65px;\" onclick=\"openNav()\" >&#9776; My Account</span>";
    	}
?>
<script>
function openNav() {
	document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
	document.getElementById("myNav").style.width = "0%";
}
</script>








<div class="w3-accordion w3-light-grey floating-box" style="overflow-y:scroll;width:14%;border-radius:0;height:100%">
  <input type="button" name="all" onclick="omg('all')" class="w3-btn-block w3-left-align" style="border-radius:0" value="All">
  <input type="button" name="men" onclick="myFunction('Demo1'); omg('men')" class="w3-btn-block w3-left-align" style="border-radius:0" value="Men">
  <div id="Demo1" class="w3-accordion-content w3-container w3-animate-zoom" style="border-radius:0;padding-right:0.01em">
    <a name="mshirts" onclick="omg('mshirts')" href="javascript:void(0);">Shirts</a>
    <a name="mbottoms" onclick="omg('mbottoms')" href="javascript:void(0);">Bottoms</a>
    <a name="mtracks" onclick="omg('mtracks')" href="javascript:void(0);">Tracks</a>
    <a name="msports" onclick="omg('msports')" href="javascript:void(0);">Sports</a>
  </div>

  <input type="button" name="women" value="Women" onclick="myFunction('Demo2'); omg('women')" class="w3-btn-block w3-left-align" style="border-radius:0">
  <div id="Demo2" class="w3-accordion-content w3-container w3-animate-zoom" style="border-radius:0;padding-right:0.01em">
    <a name="wtops" onclick="omg('wtops')" href="javascript:void(0);">Tops</a>
    <a name="wsarees" onclick="omg('wsarees')" href="javascript:void(0);">Sarees</a>
    <a name="wleggins" onclick="omg('wleggins')" href="javascript:void(0);">Leggins</a>
    <a name="wdresses" onclick="omg('wdresses')" href="javascript:void(0);">Dresses</a>
  </div>

  <input type="button" name="girls" value="Girls" onclick="myFunction('Demo3'); omg('girls')" class="w3-btn-block w3-left-align" style="border-radius:0">
  <div id="Demo3" class="w3-accordion-content w3-container w3-animate-zoom" style="border-radius:0;padding-right:0.01em">
    <a name="gtops" onclick="omg('gtops')" href="javascript:void(0);">Tops</a>
    <a name="gjeans" onclick="omg('gjeans')" href="javascript:void(0);">Jeans</a>
    <a name="gshorts" onclick="omg('gshorts')" href="javascript:void(0);">Shorts</a>
    <a name="gskirts" onclick="omg('gskirts')" href="javascript:void(0);">Skirts</a>
  </div>
  
  <input type="button" name="boys" value="Boys" onclick="myFunction('Demo4'); omg('boys')" class="w3-btn-block w3-left-align" style="border-radius:0">
  <div id="Demo4" class="w3-accordion-content w3-container w3-animate-zoom" style="border-radius:0;padding-right:0.01em">
    <a name="btshirts" onclick="omg('btshirts')" href="javascript:void(0);">TShirts</a>
    <a name="bjeans" onclick="omg('bjeans')" href="javascript:void(0);">Jeans</a>
    <a name="bshirts" onclick="omg('bshirts')" href="javascript:void(0);">Shirts</a>
    <a name="bshorts" onclick="omg('bshorts')" href="javascript:void(0);">Shorts</a>
  </div>

  <input type="button" name="kids" value="Kids" onclick="myFunction('Demo5'); omg('kids')" class="w3-btn-block w3-left-align" style="border-radius:0">
  <div id="Demo5" class="w3-accordion-content w3-container w3-animate-zoom" style="border-radius:0;padding-right:0.01em">
    <input type="button" name="kboys" value="Boys" onclick="myFunction('Demo5_1'); omg('kboys')" class="w3-btn-block w3-left-align" style="border-radius:0">
    <div id="Demo5_1" class="w3-accordion-content w3-container w3-animate-zoom" style="border-radius:0;padding-right:0.01em">
      <a name="kbethnic" onclick="omg('kbethnic')" href="javascript:void(0);">Ethnic Wear</a>
      <a name="kbwinter" onclick="omg('kbwinter')" href="javascript:void(0);">Winter wear</a>
    </div>
    <input type="button" name="kgirls" value="Girls" onclick="myFunction('Demo5_2'); omg('kgirls')" class="w3-btn-block w3-left-align" style="border-radius:0">
  <div id="Demo5_2" class="w3-accordion-content w3-container w3-animate-zoom" style="border-radius:0;padding-right:0.01em">
    <a name="kgethnic" onclick="omg('kgethnic')" href="javascript:void(0);">Ethnic Wear</a>
    <a name="kgwinter" onclick="omg('kgwinter')" href="javascript:void(0);">Winter Wear</a>
  </div>
  </div>

</div>
<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function omg(id){
      $(document).ready(function(){
          $.ajax({
            method: "POST",
            url: "a.php",
            data : 'name='+id,
            success: function(data){
                $("#abc").html(data);
              }       
          });
      });
    }
</script>
<div id="abc" class="prodbox" style="overflow:scroll">
<h2 style="font-weight:bold;font-size:30"><center>My Wishlist</center></h2>
<br>
<?php
$connection = mysqli_connect("localhost","root","","snp");
if(!$connection){
  die('Could not connect: ' . mysql_error());
}
if(!isset($_POST['op1']) || !isset($_POST['op2']))
	$a=0;
else
{
	if($_POST['op1']==0 && $_POST['op2']==0)
		$a=2;
	else
	{ 
		if(!isset($_POST['r_wish']))
			$a=3;
		else if(!isset($_POST['a_cart']))
			$a=1;
		else 
			$a=0;
	}
}
$a1=mysqli_query($connection,"select id from active_user");
$au=mysqli_fetch_array($a1);
switch ($a) 
{
	case '0':
		$r1=mysqli_query($connection,"select * from wishlist where cust_id in (select id from active_user)");
		break;
	case '1':
		$p=$_POST['p_id'];
		$d=$_POST['c_id'];
		$sql=mysqli_query($connection,"delete from wishlist where prod_id=$p and cust_id in (select id from active_user)");
		$r1=mysqli_query($connection,"select * from wishlist where cust_id in (select id from active_user)");
		break;
	case '3':
		$d=$_POST['c_id'];
		$p=$_POST['p_id'];
		$siz=$_POST['size'];
		$q=1;
		$sql=mysqli_query($connection,"delete from wishlist where prod_id=$p and cust_id in (select id from active_user)");
		$r2=mysqli_query($connection,"insert into cart(cust_id, prod_id, quantity, size) values($d,$p,$q,'$siz')");
		if(!$r2)
		{
			echo mysqli_error();
		}
		$r1=mysqli_query($connection,"select * from wishlist where cust_id in (select id from active_user)");
		break;
	case '2':
		$p=$_POST['prod_id'];
		$sql=mysqli_query($connection,"insert into wishlist(cust_id, prod_id) values($au,$p)");
		$r1=mysqli_query($connection,"select * from wishlist where cust_id in (select id from active_user)");
		break;
	default:
		$r1=mysqli_query($connection,"select * from wishlist where cust_id in (select id from active_user)");
		break;
}
if(!$r1)
{
  die('Could not get data: ' . mysqli_error());
}
$c=0;
echo '<center><table cellspacing="20" style="margin:20px 20px 20px 20px;padding:30px">';
while($r2=mysqli_fetch_array($r1))
{
if($c==0)
{
echo '<tr>';
}
$cu=$r2['cust_id'];
$r3=$r2['prod_id'];
$s=mysqli_query($connection,"select * from product_size where prod_id=$r3");
$si=mysqli_fetch_array($s);
$row1=mysqli_query($connection,"select * from products where prod_id=$r3");
$row = mysqli_fetch_array($row1);
$i=mysqli_query($connection,"select img1 from products where prod_id=$r3");
$i1=mysqli_fetch_array($i);
if(!$i1)
{
  die('Could not get data: ' . mysqli_error());
}
echo '<td width="50%" class="a"><form method="post" action="wish.php"><table cellpadding="20" cellspacing="10"><tr><td rowspan="3"><img src="'.$i1['img1'].'" style="width:250px;height:300px" /></td><td colspan="2">'.$row['name'].'&nbspby&nbsp'.$row['brand'].'</td></tr>';
echo '<tr><td>Size:<select name="size" style="background-color:black;color:white" required><option>Select Size</option><option value="'.$si['size1'].'">'.$si['size1'].'</option><option value="'.$si['size2'].'">'.$si['size2'].'</option><option value="'.$si['size3'].'">'.$si['size3'].'</option><option value="'.$si['size4'].'">'.$si['size4'].'</option></select>&nbsp</td><td>Price:'.$row['cost'].'</td></tr><tr><td colspan="3"><input type="submit" value="Remove from Wishlist" name="r_wish" style="width:250;height:50;background-color:black;color:white">&nbsp<input type="submit" value="Add to Cart" name="a_cart"  style="width:200;height:50;background-color:black;color:white"></center></td></tr></table><input type="hidden" name="p_id" value='.$r3.'><input type="hidden" name="c_id" value='.$cu.'><input type="hidden" name="op1" value="1"><input type="hidden" name="op2" value="1"></form></td>';
if($c==1)
{
echo '</tr>';
$c=0;
}
else
{
$c++;
}
}
echo '</center></form>';
//}
?>
<!--<img src="http:\\localhost\Newfolder\IMG_20161009_161243_025.jpg">-->
</div>
</body>
</html>