
<!DOCTYPE html>
<html>
<head>
  
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="images.css">
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
            url: "aj_login.php",
            data: {username:x,password:pass},
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
    return loginvalid;        
  }
  </script>
  
</head>
<body class="x">
  <section class="container">
    <div class="login">
      <h1>Login to SHOPEASY</h1>
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
      <p><a href="admin_login.php">Goto Admin Login</a></p>
    </div>
  </section>

 
</body>
</html>