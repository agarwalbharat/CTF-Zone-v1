<?php
session_start();
include("../db.php");
$error="";
if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../login.php");
}else{
	$email = $_SESSION['email'];
	$id = $_SESSION['id'];
	$db_usrquery="SELECT * FROM users WHERE email='$email' AND id='$id' ";
	$result=mysqli_query($conn,$db_usrquery);
	$checkusr=mysqli_num_rows($result);
	if($checkusr >= 1){
		if($row = mysqli_fetch_assoc($result)){
			$name = $row['fname'].' '.$row['lname'];
			$about = $row['about'];
			$facebook = "https://facebook.com/".$row['facebook'];
			$linkedin = "https://linkedin.com/in/".$row['linkedin'];
			$twitter = "https://twitter.com/".$row['twitter'];
			$website = "https://".$row['website'];
			$levels = $row['level']-1;
			$value = ($levels/50)*100;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="profile.css">
<title>Profile -<?php echo $name ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<style>

.link_profile{
	color:white;
}
.reset{
	width: 90px;
	background: red;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
.update{
	width: 150px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
.update:hover{
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
.reset:hover{
	box-shadow: 0 0 0 2px white, 0 0 0 3px red;
}

</style>
</head>
<body>
<?php include("menu.html") ?>
<div class="content">
    <div class="card">
        <div class="firstinfo"><img src="user_profile.png" />
            <div class="profileinfo">
                <h1><?php echo $name ?></h1>
                <h3><?php echo $about; ?></h3>
                <p class="bio">
<div class="container">
<p>Levels solved</p>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $value ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $value ?>%">
      <?php echo $levels ?>/50
    </div>
  </div>
</div>


<form method="post">
<input type="submit" name="update" value="Update profile" class="update">
<input type="submit" name="reset" value="Reset" class="reset">
</form>
</p>
            </div>
        </div>
    </div>
    <div class="badgescard">
        <a href="<?php echo $facebook ?>" class="link_profile" target="_blank"><span class="fa fa-facebook"></span></a>
        <a href="<?php echo $twitter ?>" class="link_profile" target="_blank"><span class="fa fa-twitter"> </span></a>
        <a href="<?php echo $linkedin ?>" class="link_profile" target="_blank"><span class="fa fa-linkedin"></span></a>
        <a href="<?php echo $website ?>" class="link_profile" target="_blank"><span class="fa fa-globe"></span></a>
    </div>

</div>

</body>
</html>

<style>
</style>

<?php

if(isset($_POST['update'])){

		echo '<script>alert("Updates not available yet \n These will be very soon")</script>';
}

if(isset($_POST['reset'])){

	$id = $_SESSION['id'];
	$sql = "UPDATE users SET level='1' WHERE id='$id'";
	$sql_delete = "DELETE FROM levelscleared WHERE email='$email'";
	if(mysqli_query($conn, $sql) && mysqli_query($conn,$sql_delete)){
		echo '<script>alert("Reset \n Update to see changes")</script>';
	}

	else
		echo '<script>alert("Please try again later")</script>';
}
}
 ?>
