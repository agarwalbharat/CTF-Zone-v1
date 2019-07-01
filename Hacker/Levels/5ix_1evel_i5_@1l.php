<?php
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../../");
}else{
	$currentLevel='6';
	include("red.php");
	if(isset($_GET['insert']) && $_GET['insert'] =="4285f4"){
		$id = $_SESSION['id'];
		$levelCleared = levelsCleard();
		if($levelCleared <= $currentLevel){
			$email = $_SESSION['email'];
			$sql = "UPDATE users SET level='7' WHERE id='$id'";
			if(checkPreviousExist('Level 6',$email))
				insertInCleared($email,"Level 6");
			if(mysqli_query($conn, $sql))
				header("Location: l3vE1~_~s3v3n.php?flag_of=4285f4");
			else
				echo "<script>alert('Something went Wrong try again')</script>";
		}else
		header("Location: l3vE1~_~s3v3n.php?flag_of=4285f4");
	}else if(isset($_GET['g0t0'])==false)
    echo '<script>alert("You are not authorise to view this page Go to Home page")</script>';
    else if($_GET['g0t0']!="l3><e16" && $_GET['g0t0']!=="Dashboard"){
        echo '<script>alert("First Complete level 5")</script>';
    }
    else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>6th Level</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body onload=javascript:getpass(); alink="#4285f4">
<center>
<?php include("menu.html")?>
        <h1>CTF Challenges (Jeopardy)</h1>
        <br>
        <p>Test your hacking skills</p>
        <br><br>
        <h1>Level 6</h1>
         <br><br>
        <h3>Task <span style="color:red;font-size:30px;font">TO</span> do</h3>
        <p>Find the <span style="color:red;font-size:30px">flag</span> and <span style="color:red;font-size:30px">Paste</span> into the textbox.</p>
        <div align="center">
        <center>
        <script>
            function getpass(){
                var pwass=window.document.alinkColor;
                var userEnter=prompt ("Please enter flag");
                if (userEnter==pwass){
                    var res = userEnter.split("#");
                    window.location.href="?insert="+res[1];
                }
                else
                    alert("Try again");
            }
            </script>
        </center>
        </div>
        <br><br>
        <h4>Refresh the page............</h4>
        <br><br>
        <p><a href="../reporterror.php?level=6">Report an Error/Bug in this Level</a></p>
        <br><br>
        Disclaimer: Neither this site nor the author is endorsing the unethical use of hacking, cracking or any such activities. This site is only for educational purposes. The correct word for this site is actually not hacking, but cracking.
        <p><a href="../contactus.php?via=level6">Contact Us</a></p>
    </center>
</body>
</html>

    <?php  }
}?>
