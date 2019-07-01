<?php
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../../");
}else{
	$currentLevel='5';
	include("red.php");
if(isset($_GET['oknow'])==false)
echo '<script>alert("You are not authorise to view this page Go to Home page")</script>';
elseif($_GET['oknow']!="level5" && $_GET['oknow']!="Dashboard"){
    echo '<script>alert("First Complete level 4")</script>';
}
else{
    if(isset($_POST['submit']) && isset($_POST['flag'])){

        if($_POST['flag']=="' or 1=1"){
            $error = 'You kidding Us';
        }elseif(empty($_POST['flag'])){
            $error = "Flag can't be empty";
        }elseif($_POST['flag']==="flag{th1s_1s_th3_r39u1r36_f1@g}"){
            $error = "You can't get flag this much easily";
        }elseif($_POST['flag']==="flag{0k_y0u_g3t_it_n0w_13v31_tw2}"){
            $error = "You are close to flag. Keep Trying";
        }else{
            if($_POST['flag']==="flag{h37_7h3r3_th15_l5_f1@g}"){
				$id = $_SESSION['id'];
				$levelCleared = levelsCleard();
				if($levelCleared <= $currentLevel){
					$email = $_SESSION['email'];
					$sql = "UPDATE users SET level='6' WHERE id='$id'";
					if(checkPreviousExist('Level 5',$email))
						insertInCleared($email,"Level 5");
					if(mysqli_query($conn, $sql))
						header("Location: 5ix_1evel_i5_@1l.php?g0t0=l3><e16");
					else
						echo "<script>alert('Something went Wrong try again')</script>";
					}else
						header("Location: 5ix_1evel_i5_@1l.php?g0t0=l3><e16");
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
    <title>5th Level</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script>
        function show(){
        alert("Hey, Welcome to Level 5");
        }
    </script>
        <meta description="This is hackers playgound where hackers try to hack the world and get the flag{} which is something like h37_7h3r3_th15_l5_f1@g">

    <!-----------<meta description="hey flag is flag{th1s_1s_th3_r39u1r36_f1@g}">---------------->
</head>
<body onload="show()">
<center>
<?php include("menu.html")?>
<h1>CTF Challenges (Jeopardy)</h1>

<p>Test your hacking skills</p>

<br><br>

<h1>Level 5</h1>
<h3>Task <span style="color:red;font-size:30px;font">TO</span> do</h3>
<p>Find the <span style="color:red;font-size:30px">flag</span> and <span style="color:red;font-size:30px">Paste</span> into the textbox.<br>hint:open source code</p>

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
        <p><a href="../reporterror.php?level=5">Report an Error/Bug in this Level</a></p>

        <br><br>
        Disclaimer: Neither this site nor the author is endorsing the unethical use of hacking, cracking or any such activities. This site is only for educational purposes. The correct word for this site is actually not hacking, but cracking.
        <p><a href="../contactus.php?via=level5">Contact Us</a></p>
        <br><br>
</center>
</body>
</html>
<div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <!---Don't think to do this-->
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div><div></div><!--- flag is present at /f0l0gs/flagfor5.txt --><div></div><div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</body>
</html>

<?php } }?>
