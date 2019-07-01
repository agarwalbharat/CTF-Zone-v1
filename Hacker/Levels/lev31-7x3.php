<?php
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../../");
}else{
	$currentLevel='3';
	include("red.php");
if(isset($_GET['c@m3_by'])==false)
    echo '<script>alert("You are not authorise to view this page Go to Home page")</script>';
elseif($_GET['c@m3_by']!=2 && $_GET['c@m3_by']!="Dashboard"){
        echo '<script>alert("First Complete level 2")</script>';
    }
    else{
        if(isset($_POST['submit']) && isset($_POST['flag'])){
            if($_POST['flag']=="' or 1=1"){
                $error = 'You kidding Us';
            }elseif(empty($_POST['flag'])){
                $error = "Flag can't be empty";
            }else{
                if($_POST['flag']==="flag{f1@6_7o_g0_ln_l3ue1_f0ur~}"){
					$id = $_SESSION['id'];
					$levelCleared = levelsCleard();
					if($levelCleared <= $currentLevel){
						$email = $_SESSION['email'];
						$sql = "UPDATE users SET level='4' WHERE id='$id'";
						if(checkPreviousExist('Level 3',$email))
							insertInCleared($email,"Level 3");
						if(mysqli_query($conn, $sql))
							header("Location: l3ue1_f0ur~.php?oknow=level4");
						else
							echo "<script>alert('Something went Wrong try again')</script>";
					}else
						header("Location: l3ue1_f0ur~.php?oknow=level4");
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
    <title>3rd Level</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" /><!--This css does not contain CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/css_0n3_tt.css" /><!--This css contain Flag-->
    <link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/t~0_css_0n_tt.css" /><!--This CSS not contain any Flag-->
    </head>
<body>
    <center>
	<?php include("menu.html")?>
<h1>CTF Challenges (Jeopardy)</h1>

<p>Test your hacking skills</p>

<br><br>

<h1>Level 3</h1>
<h3>Task <span style="color:red;font-size:30px;font">TO</span> do</h3>
<p>Find the <span style="color:red;font-size:30px">flag</span> and <span style="color:red;font-size:30px">Paste</span> into the textbox.</p>

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
        <p><a href="../reporterror.php?level=3">Report an Error/Bug in this Level</a></p>

        <br><br>
        Disclaimer: Neither this site nor the author is endorsing the unethical use of hacking, cracking or any such activities. This site is only for educational purposes. The correct word for this site is actually not hacking, but cracking.
        <p><a href="../contactus.php?via=level3">Contact Us</a></p>
    <br><br>
<p style="color:black;font-size:0%">hint:you will find it in css</p>
            </center>
</body>
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/noflag.css" /><!--Don't Think about this-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/flag.css" /><!--this css does not contain flag-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/flag1.css" /><!--this css contain flag-->
</html>




<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/flag3.css" /><!--this css may contain flag-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/flag5.css" /><!--Don't Think about this-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/style2.css" /><!--this css does not exist-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/flag7.css" /><!--this css contain flag-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/styleeeeeee.css" /><!--this css does not exist-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/style.css" /><!--this css does not exist-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/flag9.css" /><!--this css does not exist-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/fla.css" /><!--this css may contain flag-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/flag6.css" /><!--this css does not exist-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/don'tdothis.css" /><!--this css does not contain flag-->
<link rel="stylesheet" type="text/css" media="screen" href="l3ve1s_f0r_cxx/flag1_1.css" /><!--this css may contain flag-->

<?php } }?>
