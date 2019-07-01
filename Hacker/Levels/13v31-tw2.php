<?php
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../../");
}else{
	$currentLevel='2';
	include("red.php");
	if(isset($_GET['to'])){
	if($_GET['to']=="lev31-7x3"){
		$id = $_SESSION['id'];
		$levelCleared = levelsCleard();
		if($levelCleared <= $currentLevel){
			$email = $_SESSION['email'];
			$sql = "UPDATE users SET level='3' WHERE id='$id'";
			if(checkPreviousExist('Level 2',$email))
				insertInCleared($email,"Level 2");
			if(mysqli_query($conn, $sql))
				header("Location: lev31-7x3.php?c@m3_by=2");
			else
				echo "<script>alert('Something went Wrong try again')</script>";
		}else
		header("Location: lev31-7x3.php?c@m3_by=2");
	}
}else if(isset($_GET['byLevel'])==false)
       echo '<script>alert("You are not authorise to view this page Go to Home page")</script>';
   elseif($_GET['byLevel']!=1 && $_GET['byLevel']!="Dashboard"){
           echo '<script>alert("First Complete level 1")</script>';
       }
       else{

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2nd Level</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<?php include("menu.html")?>
<script>
    var pass, i,j=100,k,pass;
    for(i=0;i<=50;i++){
        i++;
        j--;
        k=k+2;
    }
    k=500;
    pass=prompt("Please enter Flag!");
    if (pass=="flag{y0v_f1n6_th3_f1@g_f0r_~lev31-7x3~}" && k==500) {
        var res = pass.split("~");
        console.log(res[1]);
        window.location.href="?to="+res[1];
    }
</script>
    <center>
<h1>CTF Challenges (Jeopardy)</h1>

<p>Test your hacking skills</p>

<br><br>

<h1>Level 2</h1>
<h3>Task <span style="color:red;font-size:30px;font">TO</span> do</h3>
<p>Find the <span style="color:red;font-size:30px">flag</span> and <span style="color:red;font-size:30px">Paste</span> in Prompt BOX.</p>

<br><br>

<center><p>Refresh Page to see the effect</p></center>

            <p><a href="../reporterror.php?level=2">Report an Error/Bug in this Level</a></p>

        <br><br>
        Disclaimer: Neither this site nor the author is endorsing the unethical use of hacking, cracking or any such activities. This site is only for educational purposes. The correct word for this site is actually not hacking, but cracking.
        <p><a href="../contactus.php?via=level2">Contact Us</a></p>
    <br><br>
    </center>
</body>
</html>

<?php }} ?>
