<?php
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../../");
}else{
	$currentLevel='4';
	include("red.php");
if(isset($_GET['oknow'])==false)
echo '<script>alert("You are not authorise to view this page Go to Home page")</script>';
elseif($_GET['oknow']!="level4" && $_GET['oknow']!="Dashboard"){
    echo '<script>alert("First Complete level 3")</script>';
}
else{
    if(isset($_POST['submit']) && isset($_POST['flag'])){
        function getUserIP()
        {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'Unknown IP Address';

        return $ipaddress;
    }

    $user_ip = getUserIP();

    //echo $user_ip;

        if($_POST['flag']=="' or 1=1"){
            $error = 'You kidding Us';
        }elseif(empty($_POST['flag'])){
            $error = "Flag can't be empty";
        }else{
            if($_POST['flag']===$user_ip){
				$id = $_SESSION['id'];
				$levelCleared = levelsCleard();
				if($levelCleared <= $currentLevel){
					$email = $_SESSION['email'];
					$sql = "UPDATE users SET level='5' WHERE id='$id'";
					if(checkPreviousExist('Level 4',$email))
						insertInCleared($email,"Level 4");
						if(mysqli_query($conn, $sql))
	                header("Location: 13vel_Fiu3_1.php?oknow=level5");
					else
						echo "<script>alert('Something went Wrong try again')</script>";
				}else
				header("Location: l3vE1~_~s3v3n.php?flag_of=4285f4");
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
    <title>4th Level</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script>
        function show(){
        alert("Hey, Welcome to Level 4");
        }
    </script>
</head>
<body onload="show()">
<?php include("menu.html")?>
    <center>
<h1>CTF Challenges (Jeopardy)</h1>

<p>Test your hacking skills</p>

<br><br>

<h1>Level 4</h1>
<h3>Task <span style="color:red;font-size:30px;font">TO</span> do</h3>
<p>Find the <span style="color:red;font-size:30px">flag</span> and <span style="color:red;font-size:30px">Paste</span> into the text box.<br>flag is you ip address</p>

<br><br>
<center>
            <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="15%" id="AutoNumber4">
            <tr>
                <td width="100%">
                    <p align="center">
                        <font size="2">Flag:</font>
                        <form method="post">
                            <p align="center">
                            <input type="text" name="flag" maxlength="40" size="16" minlength="10" placeholder="Enter Flag"><br><br>
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
        <p><a href="../reporterror.php?level=4">Report an Error/Bug in this Level</a></p>

        <br><br>
        Disclaimer: Neither this site nor the author is endorsing the unethical use of hacking, cracking or any such activities. This site is only for educational purposes. The correct word for this site is actually not hacking, but cracking.
        <p><a href="../contactus.php?via=level4">Contact Us</a></p>
    <br><br>
            </center>
</body>
</html>
<?php } }?>
