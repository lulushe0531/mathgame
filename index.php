<?php
session_start();
include("include/header.php");
$_SESSION["total"] = 0;
$_SESSION["count"] = 0;
$_SESSION["authorized"] = "";
?>


  <div class="container">
    <h1>Please login to enjoy our math game.</h1>
    <?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}
?>
      <form class="form-horizontal" action="mathgame.php" method="post">
        <div class="form-group">
          <label for="email" class="control-label col-sm-2">Email</label>
          <div class="col-sm-8">
            <input type="email" placeholder="Email" name="email" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="control-label col-sm-2">Password</label>
          <div class="col-sm-8">
            <input type="password" placeholder="Password" name="password" class="form-control" />
          </div>
        </div>

        <div class="col-sm-offset-2">
          <input class="bg-primary" type="submit" value="Login" />
        </div>
      </form>
  </div>


  </body>

  </html>