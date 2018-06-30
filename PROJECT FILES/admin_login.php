
<!DOCTYPE html>
<html>
<head>
  
  <title>Login Form</title>
  <link rel="stylesheet" href="images.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
  function validation()
  {
    var loginvalid = true;
    if(document.getElementById("uname").value=="")
      {
        loginvalid=false;
        alert("Username cannot be empty !");
        document.getElementById("uname").focus();
      }
    if(loginvalid)
    {  
      if(document.getElementById("password").value=="")
        {
          loginvalid=false;
          alert("Password cannot be empty !");
          document.getElementById("password").focus();
        }  
    }

if(loginvalid){
    x = document.getElementById("uname").value;
    pass = document.getElementById("password").value;
    
     $(document).ready(function(){

          $.ajax({
            method: "POST",
            url: "aj_admin_login.php",
            data: {username:x,password:pass},
            success: function(data){
              if(data=="T"){
                window.location="http://localhost/phpmyadmin/tbl_structure.php?db=snp&table=customer&server=1&target=&token=114367c2a538523e2a6b996382599647#PMAURL-10:tbl_change.php?db=snp&table=products&server=1&target=&token=114367c2a538523e2a6b996382599647";
              }
              else{
                alert(data);
              }
              
              }       
          });
      });

  }
    return loginvalid;        
  }
  </script>
  
</head>
<body class="x">
  <section class="container">
    <div class="login">
      <h1>Login to SHOPEASY</h1>
      <h2>Admin Login</h2>
      <form method="post" action="login.php" onSubmit="return validation()">
        <p><input type="text" name="username" id="uname" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" id="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <div align="right"><p class="submit"><input type="submit" name="login" value="Login"></p></div>
      </form>
    </div>

    <div class="login-help" style="color:white">
    
    </div>
  </section>

 
</body>
</html>