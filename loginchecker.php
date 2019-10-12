<?php
if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'admin'){
		echo '<h1>Successfully logged in</h1>';
		session_start();
		$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
		$session_id = session_id();
		setcookie('sessionCookie',$session_id,time()+ 60*60*24*365 ,'/',"",false,false);
		setcookie('csrfTokenCookie',$_SESSION['token'],time()+ 60*60*24*365 ,'/',false,false);
		
	}else{
		echo '<h1 align="center">Invalid Credentials!, Check Again</h1>';
		exit();
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Update User Details</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
	<script>
	
	$(document).ready(function(){
	
	var cookie_value = "";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
	var csrf = decodedCookie.split(';')[2]
	if(csrf.split('=')[0] = "csrfTokenCookie" ){
		cookie_value = csrf.split('csrfTokenCookie=')[1];
		document.getElementById("tokenIn_hidden_field").setAttribute('value', cookie_value) ;
	}
	});

</script>

  <head>
	<body>
	<div class="background-wrap">
	<div class="background"></div>
	</div>
 
                      <form id="accesspanel" action="csrfchecker.php" method="post" align="center">
                                 <h1 id="litheader">UPDATE USER DETAILS</h1>
						    <div class="inset">
							    <p>
							 <input type="text" name="fname" id="fname" placeholder="First Name">
							    </p>
							    <p>
							 <input type="text" name="lname" id="lname" placeholder="Last Name">
							    </p>
							    <p>
							 <input type="text" name="status" id="status" placeholder="status">
							    </p>

                            <div id="div1">
					              <input type="hidden" name="token" value="" id="tokenIn_hidden_field"/>
					        </div>
                            <p class="p-container">
    <input type="submit" name="updatepost" id="go" value="update">
	<center><a href="logout.php">Logout</a></center>
  </p>
                         
                      </form>
         
	</body> 
</html>
