<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Orders</title>
    <link rel="stylesheet" type="text/css" href="images.css">
    <link rel="stylesheet" type="text/css" href="positions.css">
    <link rel="stylesheet" type="text/css" href="pecchi.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body bgcolor="white">
<form name="navbar" action="product.php" method="post">

    
    
    
    <div style="z-index:10;background:black;position:fixed;width:100%;margin:-8px;">

    

    <div style="text-align:center;color:black;float:right;display:inline;margin-top:5px;">
        <an href="register.php" style="margin:10px;font-size:25px;">Register</a>&nbsp&nbsp

        <a href="login.php" style="margin:10px;font-size:25px;">Login&nbsp&nbsp</a>

        <a href="" style="margin:10px;"><img src="cart.png" height="30" width="30"></a>

        <a href="" style="margin:10px"><img src="wishlist.png" height="30" width="30"></a>

        &nbsp&nbsp
         
    </div>
   <br><br>
        
        <div>
         <h1 class="h" style="display:inline;margin:60px;">SHOPEASY</h1>
        
        <input type="search" name="search" placeholder="Search.....">
      
      

    </div>
    </div>
    <br><br>



<div style="background:black;margin-top:40px;width:100%;margin-left:-8px;font-size:20px;">
<br>
 <ul class="x1">
 <li class="x1" style="display:inline"><a class="active" href="#home">Home</a></li>
 <li class="dropdown"><a href="#">About</a>
 <div class="dd-content">
 <a href="#">Campus</a>
 <a href="#">Infrastructure</a>
 <a href="#">Courses</a>
 <a href="#">Faculty</a>
 </div>
 </li>
 <li class="dropdown"><a href="#" >Products</a>
 <div class="dd-content">
 <a href="#">Engineering</a>
 <a href="#">Telecom</a>
 <a href="#">Energy</a>
 <a href="#">Finance</a>
 <a href="#">Consultancy</a>
 </div>
 </li>
 <li class="dropdown"><a href="#" >Services</a>
 <div class="dd-content">
 <a href="#">Help</a>
 <a href="#">Student services</a>
 <a href="#">Hostel services</a>
 </div>
 </li>
 <li class="dropdown"><a href="#" >Contact</a>
 <div class="dd-content">
 <a href="#">Mobile</a>
 <a href="#">Email</a>
 <a href="#">Facebook</a>
 </div>
 </li>
 </ul></div>
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
 <div class="filterbox">Hehehehehhheeee</div>
 
</div>
</form>
 </body>
 </html>