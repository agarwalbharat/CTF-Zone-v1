<?php
session_start();
include("db.php");
$error="";
if(isset($_SESSION['id']) && isset($_SESSION['email'])){
	header("Location: hacker/");
}else{
	if(isset($_POST['submit'])){
		if(!empty($_POST['email'])){
			if(!empty($_POST['pass'])){
				$email = $_POST['email'];
				$pass = md5($_POST['pass']);
				$db_usrquery="SELECT * FROM users WHERE email='$email' ";
				$result=mysqli_query($conn,$db_usrquery);
				$checkusr=mysqli_num_rows($result);
				if($checkusr >=1){
					if($row = mysqli_fetch_assoc($result)){
						if($pass === $row['password']){
							$_SESSION['id']= $row['id'];
							$_SESSION['email'] = $row['email'];
							header("Location: hacker/dashboard.php");
						}else{
							$error = "password is incorrect";
						}
					}
				}else{
					$error = "User does not exist";
				}
			}else{
				$error = "password can't be empty";
			}
		}else{
			$error = "Email can't be empty";
		}
	}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Haxonic</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body>
<?php include("menu.html") ?>
<div class="glitch" data-text="Haxonic"><a href="#">Haxonic<a></div>
  <!-- multistep form -->
<form id="msform" method="post">
  <!-- fieldsets -->
  <p style="color:red"><?php echo $error; ?></p>
  <fieldset>
    <h2 class="fs-title">Sign In</h2>
    <h3 class="fs-subtitle">To start hacking</h3>
    <input type="email" name="email" placeholder="Email" required/>
    <input type="password" name="pass" placeholder="Password" required/>
    <input type="submit" name="submit" class="next action-button" value="Submit" />
  </fieldset>
</form>

<div align="center">
	<a href="signup.php" style="color:white" align="center">Click here for signup</a>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>



    <script  src="js/index.js"></script>

<div class="footer">
  <p>&copy All Rights are reserved to <a href="https://haxonic.com" class="login_link">Haxonic</a></p>
</div>


</body>

</html>
<?php
}
?>
