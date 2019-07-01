<?php
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../../");
}else{
	$currentLevel='9';
	include("red.php");
if(!isset($_GET['gotit'])){
    echo "<script>alert('You are not authorised to view this page, Kindly do not try to change url please visit previous level to get access of this.')</script>";
}else if($_GET['gotit']!="okay" && $_GET['gotit']!="Dashboard"){
    echo '<script>alert("First Complete level 8")</script>';
}else{
$not ="";
	if(isset($_POST['username']) && isset($_POST['password'])){
		include("../../db1.php");
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql_q = "Select id FROM users where username='$username' AND password = '$password' limit 0,1";
		$sql_ex = mysqli_query($connp, $sql_q);
		if($sql_ex){
			if(mysqli_num_rows($sql_ex) == 0)
				$not = "Invalid username or password";
			else if(mysqli_num_rows($sql_ex)===1){
				if($rows = mysqli_fetch_assoc($sql_ex)){
					$id = $_SESSION['id'];
					$levelCleared = levelsCleard();
					if($levelCleared <= $currentLevel){
						$email = $_SESSION['email'];
						$sql = "UPDATE users SET level='10' WHERE id='$id'";
						if(checkPreviousExist('Level 9',$email))
							insertInCleared($email,"Level 9");
						if(mysqli_query($conn, $sql))
							header("Location: l3vel_10.php?oknow=level10");
						else
							echo "<script>alert('Something went Wrong try again')</script>";
					}else
						header("Location: l3vel_10.php?oknow=level10");
				}
			}else{
				$not = "Something went wrong, Try again";
			}
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>9th Level</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<?php include("menu.html")?>
<center>
<h1>CTF Challenges (Jeopardy)</h1>

<p>Test your hacking skills</p>

<br><br>

<h1>Level 9</h1>
<h3>Task <span style="color:red;font-size:30px;font">TO</span> do</h3>
<p>Bypass admin login</p>
</p>
<br><br>
<center>

	<table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="15%" id="AutoNumber4">
	<tr>
			<td width="100%">
					<p align="center">
							<font size="2">Admin-Login</font>
							<?php echo $not ?>
							<form method="post">
									<p align="center">
									<input type="text" name="username" placeholder="Enter username" required/>
									<br><br>
									<input type="password" name="password" placeholder="Enter password" required />
									<input type="submit" name="login" value="Login" />
									</p>
							</form>
					</p>
			</td>
	</tr>
	</table>
            <div style="color:red"><?php if(isset($error)) echo $error; ?></div>
        </center>
        </div>
        <br><br>
        <p><a href="../reporterror.php?level=7">Report an Error/Bug in this Level</a></p>

        <br><br>
        Disclaimer: Neither this site nor the author is endorsing the unethical use of hacking, cracking or any such activities. This site is only for educational purposes. The correct word for this site is actually not hacking, but cracking.
        <p><a href="../contactus.php?via=level7">Contact Us</a></p>
    <br><br>
            </center>

</body>
</html>

<?php } }?>
