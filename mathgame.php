<?php include("include/header.php");
?>
  <?php
$email = $_POST["email"];
$password = $_POST["password"];
if(empty($email)) {
    $msg = "<p style='color: red;'>Invalid login credentials.</p>";
    header("Location: index.php?msg=$msg");
    die();
}


$num1=rand(0,20);
$num2=rand(0,20);
$count1=0;
$count2=0;
$answer=$_POST["answer"];

if($answer==($num1+$num2)){
    $count1=$count1+1;
}else{
    $count2++;
}

if(empty($answer)&&!is_numeric($answer)){
    $msg .="<p style='color:red;'>You must enter a number for your answer.</p>";
    }
?>

    <div class="container">
      <div class="col-sm-offset-3">
        <h1>Math Game</h1>
      </div>
      <div class="col-xs-offset-10">
        <a class="btn btn-primary" href="index.php">Logout</a>
      </div>

      <div class="row">
        <div class="col-xs-2 col-sm-offset-3">
          <?php echo $num1; ?>
        </div>
        <div class="col-xs-2">+</div>
        <div class="col-xs-2">
          <?php echo $num2; ?>
        </div>
      </div>

      <form class="form-horizontal" action="mathgame.php" method="post">
        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-3">
            <input type="text" placeholder="Enter answer" name="answer" class="form-control" />
          </div>
        </div>

        <div class="col-sm-12">
          <input type="submit" class="col-sm-offset-3" value="submit" />
        </div>
        <hr/>
        <div class="col-sm-12">
          <div class="col-sm-offset-3">
            Score:
            <?php echo $count1; ?>/
              <?php echo $count2; ?>
          </div>
        </div>
      </form>
    </div>

    </body>

    </html>