<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="images.css">
    <link rel="stylesheet" type="text/css" href="positions.css">
    <link rel="stylesheet" type="text/css" href="pecchi.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<script type="text/javascript">
            function pdelete(x){

			$(document).ready(function(){

					$.ajax({
						method: "POST",
						url: "cancel_product.php",
						data: {name:x},
						success: function(data){
    						alert(data);
  						}				
					});

			});

		}




		function tdelete(y){
	
			$(document).ready(function(){
					$.ajax({
						method: "POST",
						url: "cancel_order.php",
						data: {name:y},
						success: function(data){
    						alert(data);
  						}				
					});
			});
	
		}
           
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

<?php 

	
	$connection = mysqli_connect("localhost","root","","snp");
if(!$connection){
  die('Could not connect: ' . mysql_error());


}



			$sql = "SELECT id from active_user";
			$resultx = $connection->query($sql);
			$au = $resultx->fetch_assoc();
			$au = $au['id'];


			$sql = "SELECT count(distinct ord_id) as no FROM prod_ord_cust WHERE cust_id = $au ";

			$result = $connection->query($sql);
			
    		$no_orders = $result->fetch_assoc();  
    		$no_orders =  $no_orders["no"];


    		$sql = "select distinct ord_id from prod_ord_cust where cust_id = $au ";                    //orders

    		$orders = $connection->query($sql);        // order id's





    for($n=0;$n<$no_orders;$n++){              //loop for orders

	    while($ord_row = $orders->fetch_assoc()) {        //each time we get one ordr id
    	    	
    	        $y = $ord_row["ord_id"];

    			$sql = "select prod_id,size,quantity from prod_ord_cust where ord_id = $y";

    			$products = $connection->query($sql);
    			while ($prod_row = $products->fetch_assoc()) { //each time we get one prod id
    				$x = $prod_row["prod_id"];
    				$psize = $prod_row["size"];
    				$pquantity = $prod_row["quantity"];

    				$sql = "select * from products where prod_id = $x";
    				$result = $connection->query($sql);
					
    				$p = $result->fetch_assoc(); //product details
    				$pname = $p["name"];
    				$pbrand = $p["brand"];
    				$pcategory = $p["category"];
    				$ptype = $p["type"];
    				$pfabric = $p["fabric"];
    				$ppattern = $p["pattern"];
    				$poccasion = $p["occasion"];
    				$pstyle_code = $p["style_code"];
    				$pcost = $p["cost"];
    				$pamount = $pcost*$pquantity;
		
					echo "<center>
						<div class=\"ordbox\" >
							<div class=\"inbox\" style=\"margin:-25px\">
								<span class=\"ordid ord\" style=\"float:left;color:black;display:inline;\"><b>Order Id : $y </b></span>
								<span class=\"button ord\" style=\"float:right;margin:30px;\">
								<button type=\"submit\" style=\"color:black\" onclick=\"pdelete($x);\">Cancel Item</button></span>

							</div><br><br>
								<span class=\"ord\" style=\"float:left;margin:10px;display:inline;\"><img src=\"bgpattern2.png\" width=\"100px\" height=\"100px\"></span>
								<span class=\"text1 ord\" style=\"float:left;width:380px;\"><b><br>Product Name : $pname<br><br><br>Price : $pamount</b></span>
								
								<span class=\"text1 ord\" style=\"float:left;width:250px;margin-top:20px;\"><b>Size : $psize</b><br><br><b>Color : Black</b></span>
								<br><br><br><br><br><br>
							<hr><span class=\"text1 ord\" style=\"float:left;margin-left:30px;margin-top:10px;\">               &nbsp            </span>
							<span class=\"text1 ord\" style=\"float:right;margin-right:90px;margin-top:10px;\">Sub total : $pamount</span>
						</div>
					</center>
					<br><br>";


   

						

    			

	


	


				  }//prod	

				  $sql = "select * from orders where ord_id = $y";
				  $result = $connection->query($sql);
				  $o = $result->fetch_assoc(); //order details
				  $odate = $o["date"];
				  $oshipadd = $o["shipping_add"];
				  $oshipchar = $o["ship_charge"];
				  $opay = $o["payment_method"];
				  $otni = $o["no_of_items"];


				  echo "<center>
			<div class=\"ordbox\" style = \"margin-top:0vh;border-radius:0px; \">
				<div class=\"inbox\" style=\"margin:-25px;background-color:skyblue;border-radius:0px;\">
				<span style=\"display:inline;float:left;margin-right:35vh;\">&nbsp</span>  
				<span class=\"ordid ord\" style=\"float:left;color:black;display:inline;\"><b>Order Id : $y details </b></span>
						<span class=\"button ord\" style=\"float:right;margin:30px;\">
						<button type=\"submit\" name=\"tcancel\" style=\"color:black\" onclick=\"tdelete($y);\">Cancel Order</button></span>

					</div><br><br>
					<span class=\"ord\" style=\"float:left;margin:10px;display:inline;\"><img src=\"bgpattern2.png\" width=\"100px\" height=\"100px\"></span>
					<span class=\"text1 ord\" style=\"float:left;width:350px;word-wrap: break-word;\"><b><br>Shipping address : $oshipadd<br></span>
					<span class=\"text1 ord\" style=\"float:left;width:300px;margin-top:20px;margin-left:30px\"><b>shipping charge : $oshipchar</b><br><br><br>payment_method : $opay</b></span>
					
					<br><br><br><br><br><br>
					<hr><span class=\"text1 ord\" style=\"float:left;margin-left:30px;margin-top:10px;\"> Date : $odate</span>
					<span class=\"text1 ord\" style=\"width:250px;margin-left:20px\"><b>total amount  :12234</b></span>
					<span class=\"text1 ord\" style=\"float:right;margin-right:20px;margin-top:10px;\">Expected delivery :</span>
				</div>
			</center>
			<br><br>";

				}//ord
			}		
		?>
		</div>
	</form>
	</body>
	</html>