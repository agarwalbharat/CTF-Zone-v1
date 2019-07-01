<?php
session_start();
include("db.php");
$error="";
if(isset($_SESSION['id']) && isset($_SESSION['email'])){
	header("Location: profile/");
}else{
	if(isset($_POST['submit'])){
		if(!empty($_POST['email'])){
			if(!empty($_POST['pass']) && !empty($_POST['cpass'])){
				if(!empty($_POST['fname']) && !empty($_POST['lname'])){
					if(!empty($_POST['phone'])){
						if($_POST['pass']!==$_POST['cpass']){
							$error = "password and confirm password not matching";
						}else{
							$email = $_POST['email'];
							$pass = md5($_POST['pass']);
							$twitter = $_POST['twitter'];
							$facebook = $_POST['facebook'];
							$linkedin = $_POST['linkedin'];
							$website = $_POST['website'];
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$phone = $_POST['phone'];
							$about = $_POST['about'];
							$level = 1;
							$db_usrquery="SELECT * FROM users WHERE email='$email' ";
							$result=mysqli_query($conn,$db_usrquery);
							$checkusr=mysqli_num_rows($result);
							if($checkusr >= 1){
								$error = "email already exist";
							}else{
								$sql_insert = "INSERT INTO users (email,password,fname,lname,phone,about,twitter,facebook,linkedin,website,level) VALUES ('$email','$pass','$fname','$lname','$phone','$about','$twitter','$facebook','$linkedin','$website','$level')";
								$sql_insert_exe = mysqli_query($conn, $sql_insert);
								if($sql_insert_exe){
									$db_usrquery="SELECT * FROM users WHERE email='$email' ";
									$result=mysqli_query($conn,$db_usrquery);
									$checkusr=mysqli_num_rows($result);
									if($checkusr >= 1){
										if($row = mysqli_fetch_assoc($result)){
											$_SESSION['id']= $row['id'];
											$_SESSION['email'] = $row['email'];
											header("Location: profile/");
									}
								}
							}
						}
					}
				}else{
						$error="Phone is empty";
					}
			}else{
					$error="First Name or Last name is empty";
				}
		}else{
				$error="password or confirm password is empty";
			}
	}else{
			$error = "email can't be empty";
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

      <link rel="stylesheet" href="css/style.css">


</head>

<body>
<?php include("menu.html") ?>
<div class="glitch" data-text="Haxonic"><a href="#">Haxonic<a></div>
  <!-- multistep form -->
<form id="msform" method="post" action="">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <p style="color:red"><?php echo $error; ?></p>
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="email" name="email" placeholder="Email"/>
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter username" />
    <input type="text" name="facebook" placeholder="Facebook username" />
    <input type="text" name="linkedin" placeholder="linkedin username" />
    <input type="text" name="website" placeholder="Website Without http or https" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="about" placeholder="about"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="action-button" value="Submit" />
  </fieldset>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>



    <script  src="js/index.js"></script>


</body>

</html>
<?php
}
?>
