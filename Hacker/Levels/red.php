<?php
include("../../db.php");
if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
	header("Location: ../../");
}else{
	$email = $_SESSION['email'];
	$id = $_SESSION['id'];
	$db_usrquery="SELECT level FROM users WHERE email='$email' AND id='$id'";
	$result=mysqli_query($conn,$db_usrquery);
	$checkusr=mysqli_num_rows($result);
	if($checkusr >= 1){
		if($row = mysqli_fetch_assoc($result)){
			if($row['level'] < $currentLevel){
				$goto = $row['level'];
				switch($goto){
					case '1':
						header("../index.php");
						break;
					case '2':
						header("Location: 13v31-tw2.php?byLevel=1");
						break;
					case '3':
						header("Location: lev31-7x3.php?c@m3_by=2");
						break;
					case '4':
						header("Location: l3ue1_f0ur~.php?oknow=level4");
						break;
					case '5':
						header("Location: 13vel_Fiu3_1.php?oknow=level5");
						break;
					case '6':
						header("Location: 5ix_1evel_i5_@1l.php?g0t0=l3><e16");
						break;
					case '7':
						header("Location: l3vE1~_~s3v3n.php?flag_of=4285f4");
						break;
					case '8':
						header("Location: 13v3l_3i68.php?n0w!e=level8");
						break;
					case '9':
						header("Location: nine_level_is_here.php?gotit=okay");
						break;
					case '10':
						header("Location: l3vel_10.php?from=nin3");
						break;
					case '11':
						header("Location: n0w_1ev3l_e1ev3n.php?previous=Level10");
						break;
					default:
						header("../");
						break;
				}
			}
		}
	}

	function levelsCleard(){
		GLOBAL $conn;
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];

		$sql_find = "SELECT level FROM users WHERE email = '$email' AND id = '$id'";
		$sql_find_check = mysqli_query($conn, $sql_find);
		$sql_result = mysqli_num_rows($sql_find_check);

		if($sql_result >= 1){
			if($rows = mysqli_fetch_assoc($sql_find_check)){
				return $rows['level'];
			}
		}
	}

	function checkPreviousExist($levelName, $email){
		GLOBAL $cconn;
		$sql_find = "SELECT * FROM levelscleared WHERE email = '$email' AND levelname = '$levelName'";
		$sql_q = mysqli_query($conn, $sql_find);
		if(mysqli_num_rows($sql_q)>=1){
			return false;
		}else{
			return true;
		}
	}

	function insertInCleared($email,$level){
		GLOBAL $conn;
		$date=date("Y-m-d");
		$sql_two = "INSERT INTO levelscleared (email, levelname, date) VALUES ('$email','$level','$date')";
		if(mysqli_query($conn,$sql_two)){
			return true;
		}else{
			return false;
		}
	}



}


?>
