<?php
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../../");
}else{
	$currentLevel='8';
	include("red.php");
if(!isset($_GET['n0w!e'])){
    echo '<script>alert("You are not authorise to view this page Go to Home page")</script>';
}else if($_GET['n0w!e']!="level8" && $_GET['n0w!e']!=="Dashboard"){
    echo '<script>alert("First complete level 7")</script>';
}else{
	if(isset($_POST['login'])){
		if(isset($_POST['le'])){
				if($_POST['username']=='admin' && $_POST['password']=='password'){
                    $error = "Username and password can't be This much easy. Please try again";
				}else if($_POST['username']=='username' && $_POST['password']=="password"){
                    $error = "wrong username and password!!!";
                }else if($_POST['username_cookie']!="cdes23hhj948adaljk80908adkjahs890" || $_POST['password_cookie']!="u8uuuhjloa8a0addjjanmq90kllq010aaq"){
                    $error = "Do not try to change the cookies.";
                }else if($_POST['le']=="1"){
                    echo '<script>alert("You got it correct")</script>';
										$id = $_SESSION['id'];
										$levelCleared = levelsCleard();
										if($levelCleared <= $currentLevel){
											$email = $_SESSION['email'];
											$sql = "UPDATE users SET level='9' WHERE id='$id'";
											if(checkPreviousExist('Level 8',$email))
												insertInCleared($email,"Level 8");
												if(mysqli_query($conn, $sql))
		                    	header("Location: nine_level_is_here.php?gotit=okay");
											else
												echo "<script>alert('Something went Wrong try again')</script>";
										}else
										header("Location: nine_level_is_here.php?gotit=okay");
                }else{
                    $error = "please provide correct information, Login Failed";
                }
			}else{
				$error = "Something went wrong";
			}
		}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>8th Level</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<center>
<?php include("menu.html")?>
<h1>CTF Challenges (Jeopardy)</h1>

<p>Test your hacking skills</p>

<br><br>

<h1>Level 8</h1>
<h3>Task <span style="color:red;font-size:30px;font">TO</span> do</h3>
<p>Bypass the Login and move to another level</p>
</p>
        <!------ HINT: username and password are too easy, It can easily guess-------->
<br><br>
<center>
            <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="15%" id="AutoNumber4">
            <tr>
                <td width="100%">
                    <p align="center">
                        <font size="2">Login</font>
                        <form method="post">
                            <p align="center">
                            <input type="text" name="username" placeholder="Enter username"/>
                            <br><br>
							<input type="password" name="password" placeholder="Enter password" />
                            <input type="hidden" name="username_cookie" value="cdes23hhj948adaljk80908adkjahs890" />
                            <input type="hidden" name="password_cookie" value="u8uuuhjloa8a0addjjanmq90kllq010aaq" />
							<input type="hidden" name="le" value="0"/>
                            <input type="hidden" name="noWork" value="1" />
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
        <p><a href="../reporterror.php?level=8">Report an Error/Bug in this Level</a></p>

        <br><br>
        Disclaimer: Neither this site nor the author is endorsing the unethical use of hacking, cracking or any such activities. This site is only for educational purposes. The correct word for this site is actually not hacking, but cracking.
        <p><a href="../contactus.php?via=level8">Contact Us</a></p>
    <br><br>
            </center>
</body>
</html>
<?php } }?>
