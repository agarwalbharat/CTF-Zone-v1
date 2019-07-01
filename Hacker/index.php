<?php
session_start();
if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../../");
}else{
	$currentLevel='1';
	include("red.php");
    if(isset($_POST['submit']) && isset($_POST['flag'])){
        if($_POST['flag']=="' or 1=1"){
            $error = 'Are you kidding Us';
        }elseif(empty($_POST['flag'])){
            $error = "Flag can't be empty";
        }else{
          if($_POST['flag']==="flag{0k_y0u_g3t_it_n0w_13v31_tw2}"){
							$id = $_SESSION['id'];
							$levelCleared = levelsCleard();
							if($levelCleared <= $currentLevel){
								$email = $_SESSION['email'];
								$sql = "UPDATE users SET level='2' WHERE id='$id'";
								if(checkPreviousExist('Level 1',$email)){
									insertInCleared($email,"Level 1");
								}
								if(mysqli_query($conn, $sql))
									header("Location: Levels/13v31-tw2.php?byLevel=1");
								else
									echo "<script>alert('Something went Wrong try again')</script>";
							}else{
								header("Location: Levels/13v31-tw2.php?byLevel=1");
							}
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
        <title>A test of Real Ethical Hacking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                background: #000;
                padding:30px;
                font-size: 9pt;
                font-family: fixedsys, LucidaTerminal, monospace;
                color: #FFFFFF;
                text-align: left;
                overflow:auto;
                margin-top:50px;
                margin-bottom:50px;
                }
            h1 {margin-bottom:-10px;margin-top:-10px;font-size:50px}
        </style>
        <meta description="This is hackers playgound where hackers try to hack the world and get the flag{} which is something like h37_7h3r3_th15_l5_f1@g">
    </head>
    <body>
	<?php include("menu.html")?>
        <center>
        <h1>CTF Challenges (Jeopardy)</h1>
        <br>
        <p>Test your hacking skills</p>
        <br><br>
        <h1>Level 1</h1>

        <br><br>
        Hackers solve problems and build things, and they believe in freedom and voluntary mutual help. To be accepted as a hacker, you have to behave as though you have this kind of attitude yourself. And to behave as though you have the attitude, you have to really believe the attitude.
        <br><br>
        <h3>Task <span style="color:red;font-size:30px;font">TO</span> do</h3>
        <p>Find the <span style="color:red;font-size:30px">flag</span> and <span style="color:red;font-size:30px">Paste</span> into the textbox.</p>
        <div align="center">
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
        <p><a href="reporterror.php?level=1">Report an Error/Bug in this Level</a></p>

        <br><br>
        Disclaimer: Neither this site nor the author is endorsing the unethical use of hacking, cracking or any such activities. This site is only for educational purposes. The correct word for this site is actually not hacking, but cracking.
        <p><a href="contactus.php?via=level1">Contact Us</a></p>
    </center>
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
    <div></div>
    <div></div>
    <!---------- you are so stubborn(जिद्दी).---------->
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
    <!-- you decided to go on ......--------------->
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</body>
</html>



<?php } ?>













































    <!------------------------------------------------------ok Let's Get it-------------------->










    <!----------------------------------flag{0k_y0u_g3t_it_n0w_13v31_tw2}-------------------------------------------->
