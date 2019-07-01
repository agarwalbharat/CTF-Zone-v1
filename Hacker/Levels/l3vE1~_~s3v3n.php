<?php
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../../");
}else{
	$currentLevel='7';
	include("red.php");
if(!isset($_GET['flag_of']))
echo '<script>alert("You are not authorise to view this page Go to Home page")</script>';
elseif($_GET['flag_of']!="4285f4" && $_GET['flag_of']!="Dashboard"){
    echo '<script>alert("Wrong flag of previous level ")</script>';
    echo '<script>alert("First Complete level 6")</script>';
}
else{
    if(isset($_POST['submit']) && isset($_POST['flag'])){
        if($_POST['flag']=="' or 1=1"){
            $error = 'You kidding Us';
        }elseif(empty($_POST['flag'])){
            $error = "Flag can't be empty";
        }else{
            if($_POST['flag']==="flag{root_toor}"){
				$id = $_SESSION['id'];
				$levelCleared = levelsCleard();
				if($levelCleared <= $currentLevel){
					$email = $_SESSION['email'];
					$sql = "UPDATE users SET level='8' WHERE id='$id'";
					if(checkPreviousExist('Level 7',$email))
						insertInCleared($email,"Level 7");
						if(mysqli_query($conn, $sql))
	                header("Location: 13v3l_3i68.php?n0w!e=level8");
					else
						echo "<script>alert('Something went Wrong try again')</script>";
				}else
					header("Location: 13v3l_3i68.php?n0w!e=level8");
            }else{
                $flag = $_POST['flag'];
                $error = " $flag is Not correct\n Please Try again";
            }
        }
    }

    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>7th Level</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<?php include("menu.html")?>
<center>
<h1>CTF Challenges (Jeopardy)</h1>

<p>Test your hacking skills</p>

<br><br>

<h1>Level 7</h1>
<h3>Task <span style="color:red;font-size:30px;font">TO</span> do</h3>
<p>Find the <span style="color:red;font-size:30px">flag</span> and <span style="color:red;font-size:30px">Paste</span> into the text box.<br>
<span style="color:red;font-size:30px">Task:</span> Default username and password of kali linux in form of username_password in form of flag{answer}
</p>

<br><br>
<center>
            <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="15%" id="AutoNumber4">
            <tr>
                <td width="100%">
                    <p align="center">
                        <font size="2">Flag:</font>
                        <form method="post">
                            <p align="center">
                            <input type="text" name="flag" maxlength="40" size="16" placeholder="Enter Flag"><br><br>
                            <input type="submit" value=" Submit Flag " name="submit"></p>
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
