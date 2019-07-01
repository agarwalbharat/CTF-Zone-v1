<?php
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../../");
}else{
	$currentLevel='11';
	include("red.php");
if(isset($_GET['oknow'])==false)
    echo '<script>alert("You are not authorise to view this page Go to Home page")</script>';
elseif($_GET['oknow']!="level9" && $_GET['oknow']!="Dashboard"){
        echo '<script>alert("First Complete level 9")</script>';
    }
    else{
        // if(isset($_POST['submit']) && isset($_POST['flag'])){
        //     if($_POST['flag']=="' or 1=1"){
        //         $error = 'You kidding Us';
        //     }elseif(empty($_POST['flag'])){
        //         $error = "Flag can't be empty";
        //     }else{
        //         if($_POST['flag']==="flag{y0u_$0_g0oD_at_f0r3ns1c5}"){
				// 	$id = $_SESSION['id'];
				// 	$levelCleared = levelsCleard();
				// 	if($levelCleared <= $currentLevel){
				// 		$email = $_SESSION['email'];
				// 		$sql = "UPDATE users SET level='11' WHERE id='$id'";
				// 		if(checkPreviousExist('Level 10',$email))
				// 			insertInCleared($email,"Level 10");
				// 		if(mysqli_query($conn, $sql))
				// 			header("Location: n0w_1ev3l_e1ev3n.php?oknow=level4");
				// 		else
				// 			echo "<script>alert('Something went Wrong try again')</script>";
				// 	}else
				// 		header("Location: n0w_1ev3l_e1ev3n.php?oknow=level4");
        //         }else{
        //             $flag = $_POST['flag'];
        //             $error = " $flag is Not correct\n Please Try again";
        //         }
        //     }
        // }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>11th Level</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" /><!--This css does not contain CSS -->
  </head>
<body>
    <center>
	<?php include("menu.html")?>
<h1>CTF Challenges (Jeopardy)</h1>

<p>Test your hacking skills</p>

<br><br>

<h1>Level 11</h1>
<h3>Task <span style="color:red;font-size:30px;font">TO</span> do</h3>
<p>Find the <span style="color:red;font-size:30px">flag</span> and <span style="color:red;font-size:30px">Paste</span> into the textbox.</p>
<p>
<h1>More Levels coming soon</h1>
</p>
<br><br>
<center>
            <div style="color:red"><?php if(isset($error)) echo $error; ?></div>
        </center>
        </div>
        <br><br>
        <p><a href="../reporterror.php?level=11">Report an Error/Bug in this Level</a></p>

        <br><br>
        Disclaimer: Neither this site nor the author is endorsing the unethical use of hacking, cracking or any such activities. This site is only for educational purposes. The correct word for this site is actually not hacking, but cracking.
        <p><a href="../contactus.php?via=level11">Contact Us</a></p>
    <br><br>
            </center>
</body>
</html>
<?php } }?>
