<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="images.css">
    <link rel="stylesheet" type="text/css" href="positions.css">
    <link rel="stylesheet" type="text/css" href="pecchi.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script type="text/javascript">
          function placeorder(id)
        {
           ad = document.getElementById("address").value;
           pi = document.getElementById("pin").value;
           no = document.getElementById("noi").value;
           $(document).ready(function(){
          $.ajax({
            method: "POST",
            url: "orderplace.php",
            data : {pid:id,address:ad,pin:pi,noi:no},
            success: function(data){
                alert(data);
              }       
          });
      });

           
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
<?php $connection = mysqli_connect("localhost","root","","snp");
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
 <li class="dropdown"><a href="Project.php" >Products</a>
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

<?php
$proid = $_GET['pid'] ;
$connection=mysqli_connect("localhost","root","");
    if(!$connection)
    {
        die('Could not connect!'.mysqli_error());
    }
    mysqli_select_db($connection,"snp");
$temp = mysqli_query($connection,"select * from products where prod_id = $proid"); 
while ($req=mysqli_fetch_array($temp)) {
$img1=$req['img1'];
$name=$req['name'];
$brand=$req['brand'];
$stock=$req['stock'];
$cost=$req['cost'];
$type=$req['type'];
$category = $req['category'];
$off = $req['cost']*0.4+$req['cost'];
$fabric = $req['fabric'];
$style_code=$req['style_code'];
$occasion = $req['occasion'];
$pattern = $req['pattern'];
//$reqsize = "select size from product_size where prod_id= $proid";
echo "
<center>
<div class=\"prodbox\" style=\"float:none;\">
<div style=\"float:left;width:40%;height:100%\" class=\"bigprodbox\"><div> <img  src =$img1 alt=\"some\" onclick=\"document.getElementById('modal01').style.display='block'\" class=\"w3-hover-opacity\" />
<div id=\"modal01\" class=\"w3-modal w3-animate-zoom\" onclick=\"this.style.display='none'\">
  <img class=\"w3-modal-content\" src=\"$img1\">
</div>
<br><br>
<a class=\"w3-btn w3-xxlarge w3-indigo w3-hover-blue\" href=\"javascript:void(0);\" onclick=\"document.getElementById('id01').style.display='block'\" />Buy Now</a>

<div id=\"id01\" class=\"w3-modal\">
    <div class=\"w3-modal-content w3-card-8 w3-animate-zoom\" style=\"max-width:600px\">

      <div class=\"w3-center\"><br>
        <span onclick=\"document.getElementById('id01').style.display='none'\" class=\"w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright\" title=\"Close Modal\">&times;</span>
        <img src=\"Generic_Male_Profile.jpg\" alt=\"Avatar\" style=\"width:30%\" class=\"w3-circle w3-margin-top\">
      </div>

      <form class=\"w3-container\" action=\"orderplace.php\" method=\"post\" >
        <div class=\"w3-section\">
          <label><b>Shipping Address</b></label>
          <input type=\"hidden\" name=\"pid\" value=$proid >
          <input class=\"w3-input w3-border w3-margin-bottom\" type=\"text\" placeholder=\"Address\" id=\"address\" name=\"address\" required>
          <label><b>Pincode</b></label>
          <input class=\"w3-input w3-border\" type=\"text\" placeholder=\"PINCODE\" id=\"pin\" name=\"pin\" required>
          <label><b>No. of items</b></label>
          <input class=\"w3-input w3-border\" type=\"text\" placeholder=\"No. of items\" id=\"noi\" name=\"noi\" required>
          <input type=\"button\" class=\"w3-btn w3-xlarge w3-indigo w3-hover-blue\" value=\"Place Order\" onclick=\"location.href= 'orders.php'\">
        </div>
      </form>
      <div class=\"w3-container w3-border-top w3-padding-16 w3-light-grey\">
        <a onclick=\"document.getElementById('id01').style.display='none'\" type=\"button\" class=\"w3-btn w3-red \" >Cancel</a>
      </div>

    </div>
  </div>
</div></div>
<div style=\"float:right;width:60%;height:100%;text-align:left;float:top;margin-right:-2px;margin-top:-1011px\" class=\"proddetails\" >
  <h4>$type</h4>
  <b>$name</b><br>
   119 Ratings & 27 Reviews<br>
   Rs. $cost <strike>Rs. $off</strike> 40% off <br>
   Special Price Deal Of The Day : Extra 5% Off on $category clothing T&C <br>
   Bank Offer Extra 15% off* with digibank by DBS | Min trxn Rs. 650 | Max Disc. Rs. 100 T&C<br><br>
   Delivery&nbsp&nbsp&nbsp<input type=\"text\" name=\"delivery\" id=\"delivery\" placeholder=\"Enter Delivery Pincode\">
   <input type=\"button\" onclick=\"delCheck();\" name=\"check\" value=\"Check\"><br><br>
   Size&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   <select name=\"size\">
     <option>1</option>
     <option>2</option>
     <option>3</option>
   </select><br><br>
   <table>
   <tr><td valign=\"top\"> Features&nbsp&nbsp&nbsp</td><td><ul><li>Brand : $brand</li><li>Fabric: $fabric</li></td><td>&nbsp&nbsp&nbsp&nbsp</td><td valign=\"top\">Services</td><td><ul><li>Cash On Delivery available</li><li>30 Days Exchange Policy</li></td></tr>
   </table><br><br>
   Seller&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRetailNet(4.1)
   <table cellspacing=\"5px\">
     <th colspan=\"2\">Specifications</th>
     <tr><td>Style Code</td><td>$style_code</td></tr>
     <tr><td>Suitable For</td><td>$occasion</td></tr>
     <tr><td>Pack Of</td><td>1</td></tr>
     <tr><td>Pattern</td><td>$pattern</td></tr>
     <tr><td>Closure</td><td>Buttoned</td></tr>
     <tr><td valign=\"top\">Fabric Care</td><td>Machine Wash as per Tag, Do not Bleach, Line Dry, Dry in Shade, Do not Wring, Iron Steam or Dry as per Tag</td></tr>
     <tr><td>Fly</td><td>Zipper</td></tr>
   </table>
   


</div>
</div>
  
</center>

";
}
?>
 </body>
 </html>