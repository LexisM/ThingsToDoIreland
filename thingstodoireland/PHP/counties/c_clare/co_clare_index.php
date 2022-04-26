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
    <link rel="stylesheet" type="text/css" href="../../../CSS/style.css"> 
    <link rel="stylesheet" type="text/css" href="../../../CSS/homepage_style">
    <link rel="stylesheet" type="text/css" href="../CSS/style_co_index.css">



</head>
<body>

  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark py-0">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand d-flex align-items-center ms-4 text-dark text-decoration-none " href="../../../index.php">
      <img id="logo" src="../../../IMG/logo.png" width="auto" height="65" class="d-inline-block align-top" alt="">
    </a>

    <div class="collapse navbar-collapse" id="toggleMobileMenu" >

      <ul class="navbar-nav  mx-auto  justify-content-center">
        <li class="nav-item"><a href="../c_dublin/co_dublin_index.php" class="nav-link mx-2 text-white">What to do Dublin</a></li>
        <li class="nav-item"><a href="../c_galway/co_galway_index.php" class="nav-link mx-2 text-white">What to do Galway</a></li>
        <li class="nav-item"><a href="../c_cork/co_cork_index.php" class="nav-link mx-2 text-white">What to do Cork</a></li>
       
       


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-2" href="#" id="submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Things to do Ireland
          </a>

            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="submenu">
              <li><a class="dropdown-item active" href="#">Co. Clare</a></li>
              <li><a class="dropdown-item" href="../c_donegal/co_donegal_index.php">Co. Donegal</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
         <li class="nav-item"><a href="../../blog/blog.php" class="nav-link  text-white px-3 ">Blog</a></li>
      </ul>



        <div class="align-items-center me-4 text-end">
       
         <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Subscribe
        </button>

        </div>
    </div>
   
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
              <form action="../../functionality/actions/subscribe_newsletter_action.php" method="post">
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

  

  <div class="container-xl mt-5">

  <!-- <div id="carouselExampleDark" class="mb-2 carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="img/rename.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img/rename.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/rename.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> -->


   <div class="row row-cols-1 row-cols-md-3 g-3">
    <div class="col">
      <div class="card" >
        <div class="card-img">
         <img src="img/cliff_of_moher.jpg" class="card-img-top" alt="Cliff of moher">
       </div>
        <div class="card-body">
          <h5 class="card-title">Cliffs of moher</h5>
          <p class="card-text style-inter">Easily the most well-known natural wonder in Ireland is the beautiful Cliffs of Moher on the West Coast of Ireland. The 214m-high cliffs line the North Atlantic Ocean is one of the most visited places in Ireland. </p>
        </div>
        
        <div class="card-body">
           <a type="button" href="place_cliff_of_moher.php" class=" btn btn-dark btn-sm  btn-go-place">Learn more <i  style="color:white;" class="fa fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      </div>


      <div class="col">
     <div class="card" >
        <div class="card-img">
          <img src="img/ennis_friary.jpg" class="card-img-top" alt=" ">
        </div>
       
        <div class="card-body">
          <h5 class="card-title">Ennis Friary</h5>
          <p class="card-text">One of the best parts about visiting Ireland is that you can find rich history anywhere you go. While passing through Co.Clare you may want to stop off in Ennis to stretch your legs and check out one of the many Heritage sites the country has to offer: the Ennis Friary.
          </p>
        </div>
        
        <div class="card-body">
         <button type="button" class=" btn btn-dark btn-sm  btn-go-place">Learn more <i  style="color:white;" class="fa fa-solid fa-arrow-right"></i></button>
        </div>
      </div>
      </div>

  </div>
  </div>  

</div>

    

<footer class="bg-dark text-white">
   <?php
        
        if(isset($_GET['msg'])){
          $message = $_GET['msg'];

          if(!empty($message)){
            if($message == 'success'){
              echo '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                 You have subscribed to our newsletter!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ';
            }else  if ($message == 'news_email_empty'){
              echo '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR</strong> Please input a email.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ';
            }else if($message == 'email_subscribed'){
              echo '
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 This email it has been subscribed already.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ';
            }
        }
      }
    ?>

  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="my-5" id="newsletter_box">
      <div class="row ">
      <form action="../../functionality/actions/subscribe_newsletter_action.php" method="post">
        <!--Grid row-->
        <div class="d-flex ">
          <!--Grid column-->
          <div class="col-lg-6">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
        
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" name="newsletter_email"  class="form-control" />
              <label class="form-label" >Email address</label>
            </div>
          
          
            <!-- Submit button -->
            <button type="submit" href="#newsletter_box" name="news_sub" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>

          <!--Grid column-->
      </form>
      <div class="col-lg-6 text-center align-content-center">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>
      </div>

    </section>
  </div>  
  </div>
    <!-- Section: Social media -->
  

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="#">Things to do Ireland.</a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/15c2f479c9.js"></script>
    
    
</body>

</html>
