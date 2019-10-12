<!DOCTYPE html>
<html>
  <head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"> 
    </script>
    
    <link rel="stylesheet" href="css/style.css">
	  <title>CyberSpace Login</title>
	</head>

  <body>

    <form id="accesspanel" action="loginchecker.php" method="post" align="center">
	     <h1 id="litheader" align="center">CyberSpace</h1>
		    <div class="inset">
          <p>
            <input type="text" name="username" id="email" placeholder="Username">
          </p>
          <p>
            <input type="password" name="password" id="password" placeholder="Password">
          </p>
       <input class="loginLoginValue" type="hidden" name="service" value="login" />
        </div>
          <p class="p-container">
            <input type="submit" name="Login" id="go" value="Login">
          </p>             
    </form>
  </body> 

</html>
