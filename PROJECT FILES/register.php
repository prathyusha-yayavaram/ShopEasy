
<!DOCTYPE html>
<html>
<head>
  <title>Register Form</title>
  <link rel="stylesheet" href="images.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>


function register(){
   
  }



  function validation()
  {
    var regvalid = true;
    if(document.getElementById("uname").value=="")
      {
        regvalid=false;
        alert("Username cannot be empty !");
        document.getElementById("uname").focus();
      }
    if(regvalid)
    {  
      if(document.getElementById("email").value=="")
        {
          regvalid=false;
          alert("Email ID cannot be empty !");
          document.getElementById("email").focus();
        }  
    }
    if(regvalid)
    {  
      if(document.getElementById("mblno").value=="")
        {
          regvalid=false;
          alert("Mobile no. cannot be empty !");
          document.getElementById("mblno").focus();
        }  
    }
    if(regvalid)
    {  
      if(document.getElementById("password").value=="")
        {
          regvalid=false;
          alert("Password cannot be empty !");
          document.getElementById("password").focus();
        }  
    }
    if(regvalid)
    {  
      if(document.getElementById("re-enter").value=="")
        {
          regvalid=false;
          alert("Please re-enter the password !");
          document.getElementById("re-enter").focus();
        }  
    }
    if(regvalid)
    {  
      if(document.getElementById("address").value=="")
        {
          regvalid=false;
          alert("City cannot be empty !");
          document.getElementById("address").focus();
        }  
    }
    if(regvalid)
    {
      if(!(document.getElementById("gen1").checked||document.getElementById("gen2")))
      {
        regvalid=false;
        alert("Select your gender !");
      }
    }
    if(regvalid)
    {
      var mailformat = /^\w+([\.?\w+)*@\w+([\.-] ?\w+)*(\.\w{2,3})+$/;
      if(!(document.getElementById("email").value.match(mailformat)))
      {
        regvalid=false;
        alert("Invalid Email ID");
        document.getElementById("email").value="";
        document.getElementById("email").focus();
      }
    }
    if(regvalid)
    {
      if(document.getElementById("password").value!=document.getElementById("re-enter").value)
      {
        regvalid=false;
        alert("Password doesn't match !");
        document.getElementById("password").value="";
        document.getElementById("re-enter").value="";
        document.getElementById("password").focus();
      }
    }
    
    if(regvalid){

      x = document.getElementById("uname").value;
      email = document.getElementById("email").value;
      mobile = document.getElementById("mblno").value;
      pass = document.getElementById("password").value;
      add = document.getElementById("address").value;
      if(document.getElementById("gen1").checked)
        y = "M";
      else
        y = "F";
      $(document).ready(function(){

          $.ajax({
            method: "POST",
            url: "aj_register.php",
            data: {username:x,Email:email,mobileno:mobile,password:pass,address:add,gen:y},
            success: function(data){
              if(data=="T"){
                window.location="Project.php";
              }
              else{
                alert(data);
              }
              
              }       
          });
      });
    }  
    return regvalid;   
  }
  
  </script>
</head>
<body class="x">
<form action="register.php" method="post">
  <section class="container">
    <div class="login">
      <h1>Register into SPN</h1>
        <p><input type="text" name="username" id="uname" value="" placeholder="Username"></p>
        <p><input type="text" name="Email" id="email" value="" placeholder="Email"></p>
        <p><input type="text" name="mobileno" id="mblno" value="" placeholder="Mobile number"></p>
        <p><input type="password" name="password" id="password" value="" placeholder="Password"></p>
        <p><input type="password" name="re-password" id="re-enter" value="" placeholder="re-enter the password"></p>
        <p><input type="text" name="address" id="address" value="" placeholder="City"></p>
        <p class="remember_me">
          <label>
            I am&nbsp&nbsp<input type="radio" name="gen" id="gen1" value="M">&nbsp&nbspMale
                          <input type="radio" name="gen" id="gen2" value="F">&nbsp&nbspFemale
          </label>
        </p>
        <div align="right"><p class="submit"><input type="button" name="submit" value="Register" onclick="validation();"></p></div>
    </div>

    <div class="login-help">
      <p>Already an user <a href="login.php">Click here</a>.</p>
    </div>
  </section>
  </form> 
</body>
</html>


