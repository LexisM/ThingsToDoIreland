<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/login_sctyle.css">
    
</head>



<body>
    <div class="container">
    <div class="row mt-5">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
           <?php
                if (isset($_GET['err'])){
                  $error=$_GET['err'];
                    if ($error == "wrongpass"){
                  echo ' <div class="alert alert-danger" role="alert">
                  Wrong Credentials
                </div>';
                  }elseif ($error == "empty") {
                     echo ' <div class="alert alert-danger" role="alert">
                        Input user and password.
                      </div>';
                  }elseif ($error == "nouserfound") {
                    echo ' <div class="alert alert-danger" role="alert">
                        No user found.
                      </div>';
                  }
                }
               
              ?>
          <div class="card-body p-4">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
            <form accept-charset="UTF-8" action="PHP/login_query.php" method="post">
              <div class="form-floating mb-3">
                <input name="user" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">User</label>
              </div>
              <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" name="login" type="submit">Sign
                  in</button>
              </div>
              <hr class="my-4">
              <div class="d-grid mb-2">
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>