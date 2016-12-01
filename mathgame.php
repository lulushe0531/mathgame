<?php
session_start();

extract($_POST);

if( $_SESSION["authorized"]!="Authorized") {
    if((isset($email) && $email != "a@a.a") || (isset($password) && $password != "aaa"))
    {
        $msg = "<p style='color: red;'>Invalid login credentials.</p>";
        header("Location: index.php?msg=$msg");
        die();
    } else {
        $_SESSION["authorized"] = "Authorized";
    }
}



if(isset($answer)) {
    if($answer==$temp){
        $_SESSION["count"]++;
        $msg="<p style='color:green;'>Correct</p>";
    }
    else{
       $msg ="<p style='color:red;'>INCORRECT, $num1 $operator $num2 is $temp.</p>";
    }
    $_SESSION["total"]++;
}

if(!is_numeric($answer)){
    $msg ="<p style='color:red;'>You must enter a number for your answer.</p>";
    }
$num1=rand(0,20);
$num2=rand(0,20);
$operator = rand(0,1);

if($operator == 1){
    $operator = '+';
    $temp = $num1+$num2;
}
else{
    $operator = '-';
    $temp = $num1-$num2;
}
include("include/header.php");

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
      <div class="col-xs-2">
        <?php echo $operator; ?>
      </div>
      <div class="col-xs-2">
        <?php echo $num2; ?>
      </div>
    </div>

    <form class="form-horizontal" action="mathgame.php" method="POST">
      <div class="form-group">
        <div class="col-sm-4 col-sm-offset-3">
          <input type="text" placeholder="Enter answer" name="answer" class="form-control" />
        </div>
      </div>

      <div class="col-sm-12">
        <input type="submit" class="col-sm-offset-3" value="submit" />
      </div>
      <hr/>
      <?php
echo "<input type='hidden' name='num1' value='$num1'/>";
echo "<input type='hidden' name='num2' value='$num2'/>";
echo "<input type='hidden' name='temp' value='$temp'/>";
echo "<input type='hidden' name='operator' value='$operator'/>";
?>
        <div class="col-sm-12">
          <div class="col-sm-offset-3">
            Score:
            <?php echo $_SESSION["count"] . "/" . $_SESSION["total"] ?>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="col-sm-offset-3">
            <?php echo $msg?>
          </div>
        </div>
    </form>
  </div>

  </body>

  </html>