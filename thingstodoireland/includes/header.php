<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9fee83fe28.js" crossorigin="anonymous"></script>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/style.css"> 
    <link rel="stylesheet" type="text/css" href="CSS/homepage_style">


</head>
<body>
    <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark py-0">
      

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand d-flex align-items-center ms-4 text-dark text-decoration-none " href="#">
          <img id="logo" src="IMG/logo.png" width="auto" height="65" class="d-inline-block align-top" alt="">
        </a>

        <div class="collapse navbar-collapse" id="toggleMobileMenu" >

          <ul class="navbar-nav  mx-auto  justify-content-center">
            <li class="nav-item"><a href="#" class="nav-link mx-2 text-white">Things to do Dublin</a></li>
            <li class="nav-item"><a href="#" class="nav-link mx-2 text-white">Things to do Galway</a></li>
            <li class="nav-item"><a href="#" class="nav-link mx-2 text-white">Things to do Cork</a></li>
           
           


            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle mx-2" href="#" id="submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Things to do Ireland
              </a>

                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="submenu">
                  <li><a class="dropdown-item" href="PHP/co_clare.php">Co. Clare</a></li>
                  <li><a class="dropdown-item" href="#">Co. Donegal</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
             <li class="nav-item"><a href="PHP/blog/blog_app/blog.php" class="nav-link  text-white px-3 ">Blog</a></li>
          </ul>



        <div class="align-items-center me-4 text-end">
        <button type="button" class="btn btn-outline-light me-2">Login</button>

        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Sign-up
        </button>


    </nav>
 <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog  modal-dialog-scrollable " >
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <?php
        
                      if(isset($_GET['msg_2'])){
                        $message = $_GET['msg_2'];

                        if(!empty($message)){
                          if($message == 'success'){
                            echo '
                            <div class=" alert alert-success alert-dismissible fade show" role="alert">
                               You have subscribed to our newsletter!
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            ';
                          }else  if ($message == 'news_email_empty'){
                            echo '
                            <div class="  alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>ERROR</strong> Please input a email.
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            ';
                          }else if($message == 'email_subscribed'){
                            echo '
                             <div class="  alert alert-warning alert-dismissible fade show" role="alert">
                               This email it has been subscribed already.
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            ';
                          }
                      }
                    }
                  ?> 
                    <form action="PHP/functionality/actions/subscribe_newsletter_action.php" method="post">
                      <!--Grid row-->
                      <div class="row form-group">
                        <!--Grid column-->
                        <div class="col-md-12">
                          <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                          </p>
                      
                          <!-- Email input -->
                          <div class="form-outline form-white mb-4">
                            <input type="email" name="newsletter_email"  class="form-control" />
                            <label class="form-label" >Email address</label>
                          </div>
                        </div>
                          <button type="submit" name="news_sub_modal" class=" col-md-4 ms-auto btn btn-primary">Submit</button>
                        <!--Grid column-->
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark mb-4" data-bs-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
