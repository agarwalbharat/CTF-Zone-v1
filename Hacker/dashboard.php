<?php
session_start();
if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
  header("Location: ../");
}else{
  include("../db.php");
  $email = $_SESSION['email'];

  function isDone($levelName){
    GLOBAL $conn;
     $email=$_SESSION['email'];
    $sql_query = "SELECT * FROM levelscleared WHERE levelname='$levelName' AND email='$email'";
    $sql_query_result = mysqli_query($conn, $sql_query);
    $result_check = mysqli_num_rows($sql_query_result);
    if($result_check >=1){
      return true;
    }else{
      return false;
    }
  }

  function fetchLastNotDone($levelName){
    GLOBAL $conn;
     $email=$_SESSION['email'];
    $sql_query = "SELECT levelfilename FROM levels WHERE name='$levelName' AND email='$email'";
    $sql_query_result = mysqli_query($conn, $sql_query);
    $result_check = mysqli_num_rows($sql_query_result);
    if($result_check >=1){
      $ar =  array();
      while($row = mysqli_fetch_assoc($sql_query_result)){
        array_push($ar,$row);
      }
      return $ar;
    }
  }

  function result($name){
    GLOBAL $conn;
    $email=$_SESSION['email'];
    $sql_query = "SELECT * FROM levels WHERE cat='$name'";
    $sql_query_result = mysqli_query($conn, $sql_query);
    $result_check = mysqli_num_rows($sql_query_result);
    if($result_check >=1){
      $ar =  array();
      while($row = mysqli_fetch_assoc($sql_query_result)){
        array_push($ar,$row);
      }
      return $ar;
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard -Haxonic CTF</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
      <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.css" type="text/css">
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
      <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>

        </head>
  <body>
    <?php include("menu.html"); ?>

<div class="py-5">
    <div class="container" style="color:white">
      <h1>WEB</h1>
      <div class="row hidden-md-up">
      <?php $arr = result("Web");
        $counter = 0;
          foreach($arr as $bharat){
            if(isDone($bharat['name'])){
              $color = "green";
              $link = $bharat['levelfilename'];
              $textColor = "white";
            }else{
              $counter++;
              $color = "";
              $link="#";
              if($counter==1){
                $color="orange";
                $link = $bharat['levelfilename'];
                $textColor = "white";
              }
              $textColor = "black";
            }
            ?>
        <div class="col-md-4">
          <div class="card" style="background-color: <?php echo $color; ?>;cursor:pointer;color:<?php echo $textColor ?>">
            <div class="card-block">
              <h4 class="card-title"><?php echo $bharat['name'] ?></h4>
              <a href="<?php echo $link ?>" class="card-link">Link</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div><br>
        <h1>Forensics</h1>
        <div class="row">
        <?php $arr = result("Forensics");
            foreach($arr as $bharat){
              if(isDone($bharat['name'])){
                $color = "green";
                $link = $bharat['levelfilename'];
				$textColor = "white";
              }else{
                $counter++;
                $color = "";
                $link="#";
                if($counter==1){
                  $color="orange";
                  $link = $bharat['levelfilename'];
				  $textColor = "white";
                }
				$textColor = "black";
              }
              ?>

              <div class="col-md-4">
                <div class="card" style="background-color: <?php echo $color; ?>;cursor:pointer;color:<?php echo $textColor ?>">
                  <div class="card-block">
                    <h4 class="card-title"><?php echo $bharat['name'] ?></h4>
                    <a href="<?php echo $link ?>" class="card-link">Link</a>
                  </div>
                </div>
              </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>
</html>
<?php } ?>
