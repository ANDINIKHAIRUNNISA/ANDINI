<!doctype html>
<html lang="en">
  <head>
  <?php

date_default_timezone_set("Asia/Jakarta");

$b = time();
$hour = date("G",$b);

if ($hour>=0 && $hour<=11)
{
echo "====================================================Selamat Pagi :) =========================================================";
}
elseif ($hour >=12 && $hour<=14)
{
echo "====================================================Selamat Siang :) ======================================================= ";
}
elseif ($hour >=15 && $hour<=17)
{
echo "====================================================Selamat Sore :) =========================================================";
}
elseif ($hour >=17 && $hour<=18)
{
echo "====================================================Selamat Petang :) =======================================================";
}
elseif ($hour >=19 && $hour<=23)
{
echo "====================================================Selamat Malam :)======================================================== ";
}

?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


    <title>Login</title>
    <style >
      .container{
        width: 30%;
        margin-top: 9%;
        box-shadow: 0 3px 20px rgba(0,0,0,0.3);
        padding: 40px;
      }
      button{
        width: 100%;
      }
      
    </style>
  </head>
  <body>
    <div class="container">
      <h4 class="text-center">LOGIN</h4>
      <hr>
      <form action="act_login.php?op=in" method="POST">
        <div class="form-group">
          <label>Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" name="username" class="form-control" placeholder="Enter Your Username" required="">
          </div>
        </div>
        <div class="form-group">
          <label>Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required="">
          </div>
        </div>

        <button type="submit" class="btn btn-primary"><a href="pusat.html"style="color:black">LOGIN</a></button>
        <hr>
        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
        
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
 
  </body>
</html>