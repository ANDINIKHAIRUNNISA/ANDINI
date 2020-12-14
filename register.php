<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <title>Register</title>
    <style >
      .container{
        width: 80%;
        padding: 40px;
      }
      
    </style>
  </head>
  <body>
  <form action="act_register.php" method="POST">
      <div class="col-md-12">
        <div class="container">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">REGISTRATION</h3>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="">Repeat Password</label>
                <input type="password" name="ulangi" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="">First Name</label>
                <input type="text" name="first_name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" name="last_name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" required>
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block">Register</button>
          <div class="small"><a href="pusat.php">Have an account? Login!</a></div>
        </div>
        
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>